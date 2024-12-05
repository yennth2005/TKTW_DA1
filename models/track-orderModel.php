<?php
class Order
{
    public $connect;

    public function __construct()
    {
        $this->connect = connect_db();
    }

    public function getOrders($customerId)
    {
        $query = "SELECT * FROM orders WHERE customer_id = :customer_id";
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(":customer_id", $customerId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy chi tiết của một đơn hàng
    public function getOrderDetails($orderId)
    {
        $query = "SELECT * FROM orders WHERE order_id = :order_id";
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(":order_id", $orderId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // public function getProcessingOrders($customerId)
    // {
    //     $query = "SELECT * FROM orders WHERE customer_id = :customer_id AND state_id = 1";
    //     $stmt = $this->connect->prepare($query);
    //     $stmt->bindParam(":customer_id", $customerId);
    //     $stmt->execute();
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    // Hủy đơn hàng
    public function cancelOrder($orderId)
    {
        // echo "$orderId";
        // if ($orderId) {
        //     echo "<script>alert($orderId)</script>";
        // } else {
        //     echo "<script>alert('loi r')</script>";

        // }
        $query = "UPDATE orders SET state_id = 5 WHERE order_id = :order_id AND state_id = 1";
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(':order_id', $orderId, PDO::PARAM_INT);
        // return $stmt->execute();
        if ($stmt->execute()) {
            return true;
        } else {
            // Lấy lỗi nếu không thành công
            $errorInfo = $stmt->errorInfo();
            echo "Lỗi: " . $errorInfo[2];
            return false;
        }
    }
}



?>