<?php
class Statistic
{
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }

    public function selectTopViewHighest()
    {
        $sql = "SELECT 
                    p.product_name,
                    p.image,
                    p.view,
                    MIN(v.price) AS price,
                    SUM(sv.quantity) AS total,
                    COALESCE(SUM(od.quantity), 0) AS total_sold
                FROM 
                    products p 
                JOIN 
                    variants v ON p.product_id = v.product_id
                JOIN 
                    size_variants sv ON v.variant_id = sv.variant_id 
                LEFT JOIN 
                    order_detail od ON sv.size_id = od.size_id
                GROUP BY 
                    p.product_name, p.image, p.view
                ORDER BY 
                    p.view DESC";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(); // Thực thi câu lệnh
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về dữ liệu dưới dạng mảng
    }


    //doanh thu theo tháng
    public function getMonthlyRevenue()
    {
        try {
            $sql = "SELECT 
                        DATE(o.order_date) AS order_date,
                        SUM(od.quantity * od.price) AS revenue
                    FROM 
                        order_detail od
                    JOIN 
                        orders o ON od.order_id = o.order_id
                    WHERE 
                        o.order_date >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND o.state_id = 4
                    GROUP BY 
                        DATE(o.order_date)
                    ORDER BY 
                        order_date;";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Xử lý lỗi
            echo "Error: " . $e->getMessage();
            return [];
        }
    }

    //top 5 sản phẩm bán ra cao nhất
    public function selectTop5ProductSoldHighly()
    {
        $sql = "SELECT 
                    p.product_name,
                    p.image,
                    MIN(v.price) AS price,
                    SUM(sv.quantity) AS total,
                    SUM(od.quantity) AS total_sold
                FROM 
                    products p 
                JOIN 
                    variants v ON p.product_id = v.product_id
                JOIN 
                    size_variants sv ON v.variant_id = sv.variant_id 
                JOIN 
                    order_detail od ON sv.size_id = od.size_id
                GROUP BY 
                    p.product_name, p.image
                ORDER BY 
                    total_sold DESC
                LIMIT 5;";

        // Chuẩn bị câu lệnh
        $stmt = $this->conn->prepare($sql);

        // Thực thi câu lệnh
        $stmt->execute();

        // Trả về kết quả
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Thêm FETCH_ASSOC để trả về kết quả dưới dạng mảng liên kết
    }

    //đếm lượng khách mới
    public function totalCustomers()
    {
        //tháng nầy
        $sqlThisMonth = "SELECT COUNT(*) AS new_customers
                        FROM customer
                        WHERE create_at >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH);";
        $stmtThisMonth = $this->conn->prepare($sqlThisMonth);
        $stmtThisMonth->execute();
        $currentMonthData = $stmtThisMonth->fetch(PDO::FETCH_ASSOC);

        //tháng trước
        $sqlLastMonth = "SELECT COUNT(*) AS new_customers_last_month
                        FROM customer
                        WHERE create_at >= DATE_SUB(CURDATE(), INTERVAL 2 MONTH)
                        AND create_at < DATE_SUB(CURDATE(), INTERVAL 1 MONTH);";
        $stmtLastMonth = $this->conn->prepare($sqlLastMonth);
        $stmtLastMonth->execute();
        $lastMonthData = $stmtLastMonth->fetch(PDO::FETCH_ASSOC);
        //
        $currentMonthCount = $currentMonthData['new_customers'];
        $lastMonthCount = $lastMonthData['new_customers_last_month'];

        if ($lastMonthCount > 0) {
            $percent = (($currentMonthCount - $lastMonthCount) / $lastMonthCount) * 100;
        } else {
            $percent = $currentMonthCount > 0 ? 100 : 0;
        }

        return [
            'current_month' => $currentMonthCount,
            'last_month' => $lastMonthCount,
            'percent' => $percent
        ];
    }

    //đếm đơn hàng theo tháng
    public function totalOrders()
    {
        // Tháng này
        $sqlThisMonth = "SELECT COUNT(*) AS total_orders
                     FROM orders o
                     JOIN states s ON o.state_id = s.state_id
                     WHERE o.order_date >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
                       AND s.state_slug = 'giao-hang-thanh-cong'";

        $stmtThisMonth = $this->conn->prepare($sqlThisMonth);
        $stmtThisMonth->execute();
        $currentMonthData = $stmtThisMonth->fetch(PDO::FETCH_ASSOC);

        // Tháng trước
        $sqlLastMonth = "SELECT COUNT(*) AS total_orders_last_month
                     FROM orders
                     WHERE order_date >= DATE_SUB(CURDATE(), INTERVAL 2 MONTH)
                       AND order_date < DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
                       AND state_id IN (SELECT state_id FROM states WHERE state_slug = 'giao-hang-thanh-cong')";

        $stmtLastMonth = $this->conn->prepare($sqlLastMonth);
        $stmtLastMonth->execute();
        $lastMonthData = $stmtLastMonth->fetch(PDO::FETCH_ASSOC);

        // Tính toán tổng số đơn hàng
        $currentMonthOrders = $currentMonthData['total_orders'] ?: 0;
        $lastMonthOrders = $lastMonthData['total_orders_last_month'] ?: 0;

        if ($lastMonthOrders > 0) {
            $percent = (($currentMonthOrders - $lastMonthOrders) / $lastMonthOrders) * 100;
        } else {
            $percent = $currentMonthOrders > 0 ? 100 : 0; // Nếu tháng trước không có đơn hàng
        }

        return [
            'this_month' => $currentMonthOrders,
            'last_month' => $lastMonthOrders,
            'percent' => $percent
        ];
    }


    //tổng doanh thu theo tháng

    public function totalRevenues()
    {
        // Tháng này
        $sqlThisMonth = "SELECT SUM(total_amount) AS total_revenue
                     FROM orders o 
                     JOIN states s ON o.state_id = s.state_id
                     WHERE o.order_date >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
                       AND s.state_slug = 'giao-hang-thanh-cong'"; // Thêm AND và đặt giá trị trong dấu nháy đơn

        $stmtThisMonth = $this->conn->prepare($sqlThisMonth);
        $stmtThisMonth->execute();
        $currentMonthData = $stmtThisMonth->fetch(PDO::FETCH_ASSOC);

        // Tháng trước
        $sqlLastMonth = "SELECT SUM(total_amount) AS total_revenue_last_month
                     FROM orders
                     WHERE order_date >= DATE_SUB(CURDATE(), INTERVAL 2 MONTH)
                       AND order_date < DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
                       AND state_id IN (SELECT state_id FROM states WHERE state_slug = 'giao-hang-thanh-cong');"; // Thêm điều kiện trạng thái

        $stmtLastMonth = $this->conn->prepare($sqlLastMonth);
        $stmtLastMonth->execute();
        $lastMonthData = $stmtLastMonth->fetch(PDO::FETCH_ASSOC);

        // Tính toán doanh thu
        $currentMonthRevenue = $currentMonthData['total_revenue'] ?: 0;
        $lastMonthRevenue = $lastMonthData['total_revenue_last_month'] ?: 0;

        if ($lastMonthRevenue > 0) {
            $percent = (($currentMonthRevenue - $lastMonthRevenue) / $lastMonthRevenue) * 100;
        } else {
            $percent = $currentMonthRevenue > 0 ? 100 : 0;
        }

        return [
            'this_month' => $currentMonthRevenue,
            'last_month' => $lastMonthRevenue,
            'percent' => $percent
        ];
    }
}


?>