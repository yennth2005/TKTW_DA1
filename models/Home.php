<?php
class Home
{
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }
    public function searchProCateKey($keyword)
    {
        $sql = "SELECT 
                c.category_code,
                c.category_id,
                p.product_name, 
                p.product_id, 
                p.image, 
                MIN(v.variant_id) as color_id, 
                MIN(v.price) as new_price,
                MIN(v.sale) as sale_price 
                FROM categories c JOIN products p 
                ON c.category_id = p.category_id
                JOIN variants v 
                ON p.product_id = v.product_id
                WHERE c.category_name LIKE ? 
                OR p.product_name LIKE ? 
                OR v.color LIKE ?
                GROUP BY p.product_id
                ORDER BY p.product_id ";

        $stmt = $this->conn->prepare($sql);

        // Tạo mảng chứa các tham số
        $likeKeyword = "%$keyword%";
        $params = [$likeKeyword, $likeKeyword, $likeKeyword];

        $stmt->execute($params); // Truyền mảng tham số vào
        return $stmt->fetchAll();
    }
    public function insertCustomer($name, $email, $password, $role, $create_at)
    {
        $sql = "INSERT INTO customer (`name` , `email`, `password`,`role`,`create_at`) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name, $email, $password, $role, $create_at]);
    }
    public function getAllCustomer()
    {
        try {
            $sql = "SELECT * FROM customer";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function getCustomerInfo($customer_id)
    {
        try {
            $sql = "SELECT * FROM customer WHERE customer_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$customer_id]);
            return $stmt->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function increaseView($product_id)
    {
        $sql = "UPDATE products SET view = view +1 WHERE product_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$product_id]);
    }
    public function checklogin()
    {
        $email = $_POST['email'];
        $sql = "SELECT * FROM customer WHERE `email`=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch(); // Chỉ lấy dữ liệu người dùng theo email
    }
    public function listPro()
    {
        $sql = "SELECT 
                c.category_code,
                c.category_id,
                p.product_name, 
                p.product_id, 
                p.image, 
                MIN(v.variant_id) as color_id, 
                MIN(v.price) as new_price,
                MIN(v.sale) as sale_price 
                FROM categories c JOIN products p 
                ON c.category_id = p.category_id
                JOIN variants v 
                ON p.product_id = v.product_id
                GROUP BY p.product_id
                ORDER BY p.product_id
                LIMIT 8";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function checkExistCustomer($email)
    {
        $sql = "SELECT * FROM customer WHERE `email`=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch(); // Chỉ lấy dữ liệu người dùng theo email
    }

    ////////ACOUNT//////////
    public function changePass($password, $customer_id)
    {
        $sql = "UPDATE customer SET `password` = ? WHERE customer_id = ?";
        $stmt = $this->conn->prepare($sql);

        if ($stmt->execute([$password, $customer_id])) {
            return true;
        } else {
            return false;
        }
    }
    public function edit($id, $name, $email, $image, $address, $phone)
    {
        try {
            $sql = "UPDATE `customer` SET `name` = '{$name}', `email` = '{$email}',  `image` = '{$image}', `address` = '{$address}',`phone`= '{$phone}' WHERE `customer`.`customer_id` = '{$id}'";
            $this->conn->exec($sql);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function updatePasswordByCode($code, $customer_id)
    {
        $sqlUpdate = "UPDATE customer SET `code` = ? WHERE customer_id = ?";
        $stmtUpdate = $this->conn->prepare($sqlUpdate);
        if ($stmtUpdate->execute([$code, $customer_id])) {
            $sqlSelect = "SELECT * FROM customer WHERE customer_id = ?";
            $stmtSelect = $this->conn->prepare($sqlSelect);
            $stmtSelect->execute([$customer_id]);
            return $stmtSelect->fetch(PDO::FETCH_ASSOC);
        }
        return false;
    }
    public function getAllProducts()
    {
        $sql = "SELECT  
        c.category_code,
        c.category_id,
        p.product_name, 
        p.product_id, 
        p.image, 
        MIN(v.variant_id) as color_id, 
        MIN(v.price) as new_price,
        MIN(v.sale) as sale_price 
        FROM categories c JOIN products p 
        ON c.category_id = p.category_id
        JOIN variants v 
        ON p.product_id = v.product_id
        GROUP BY p.product_id
        ORDER BY p.product_id
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function filterProducts($categories, $min_price, $max_price)
    {
        $sql = "SELECT 
          c.category_code,
          p.product_name,
          p.product_id, 
          p.image, 
          MIN(v.variant_id) as color_id, 
          MIN(v.price) as old_price,
          MIN(v.sale) as new_price 
        FROM categories c
        JOIN products p ON c.category_id = p.category_id
        JOIN variants v ON p.product_id = v.product_id
        WHERE v.price BETWEEN ? AND ?
        ";

        // Add filter for categories if any are selected
        if (!empty($categories)) {
            $placeholders = implode(',', array_fill(0, count($categories), '?'));
            $sql .= " AND c.category_id IN ($placeholders)";
        }

        $sql .= " GROUP BY p.product_id";  // Add GROUP BY clause

        $stmt = $this->conn->prepare($sql);
        $params = array_merge([$min_price, $max_price], $categories);
        $stmt->execute($params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllCate()
    {
        $sql = "SELECT * FROM categories";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function cateProduct()
    {
        $sql = "SELECT c.category_id,c.category_name,c.category_code, c.image,COUNT(p.product_id) as quantity FROM categories c JOIN products p 
                ON c.category_id = p.category_id 
                GROUP BY c.category_id
                ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function showComments($product_id)
    {
        $sql = "SELECT c.*,cus.name,cus.image FROM 
                     comments c  JOIN customer cus ON c.customer_id = cus.customer_id
                  WHERE c.product_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$product_id]);
        return $stmt->fetchAll();
    }

    public function insertComment($title, $content, $customer_id, $product_id, $order_item_id, $create_at, $rating)
    {
        $sql = "INSERT INTO comments (`title`, `content`, `customer_id`,`product_id`,`order_item_id`,`date`,`rating`) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$title, $content, $customer_id, $product_id, $order_item_id, $create_at, $rating]);
    }
    public function selectCommentByOrder($order_id)
    {
        $sql = "SELECT * FROM comments  WHERE order_item_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$order_id]);
        return $stmt->fetch();
    }
    public function updateComment($title, $content, $date, $comment_id)
    {
        $sql = "UPDATE comments SET `title` = ?, `content` = ?, `date` = ? WHERE `comment_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$title, $content, $date, $comment_id]);
    }

    ////Detail
    public function getDetailProduct($product_id, $variantId, $size_id)
    {
        try {
            $sql = "SELECT p.product_id, p.product_name,
               v.variant_id, 
               v.image, 
               v.color, 
               v.price, 
               v.sale, 
               s.size_id, 
               s.size_value
        FROM variants AS v
        JOIN products AS p ON p.product_id = v.product_id
        LEFT JOIN size_variants AS s ON s.variant_id = v.variant_id
        WHERE v.product_id = ? AND s.variant_id = ? AND s.size_id=?";

            $stmt = $this->conn->prepare(query: $sql);
            $stmt->execute([$product_id, $variantId, $size_id]);
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {

            return null;
        }
    }
    public function getProductWithVariant($variantId)
    {
        try {
            $sql = "SELECT p.product_id, p.product_name, p.description, p.category_id, p.view,
               v.variant_id, 
               v.image, 
               v.color, 
               v.price, 
               v.sale, 
               s.size_id, 
               s.size_value
        FROM variants AS v
        JOIN products AS p ON p.product_id = v.product_id
        LEFT JOIN size_variants AS s ON s.variant_id = v.variant_id
        WHERE v.variant_id = ? 
        AND s.size_id = (SELECT MIN(size_id) 
                        FROM size_variants 
                        WHERE variant_id = $variantId)";

            $stmt = $this->conn->prepare(query: $sql);
            $stmt->execute([$variantId]);
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {

            return null;
        }
    }

    public function getAllVariantByProduct($product_id)
    {
        $sql = "SELECT * FROM variants WHERE product_id =?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$product_id]);
        return $stmt->fetchAll();
    }

    public function getAllSizeByProductAndVariant($variantId)
    {
        $sql = "SELECT * FROM size_variants WHERE variant_id = $variantId";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getVariantDetails($variantId)
    {
        try {
            $sql = "SELECT variant_id, color, price FROM variants WHERE variant_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$variantId]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return null;
        }
    }



    /////////ProductByCategory
    public function getProductByCategory($category_id)
    {
        $sql = "SELECT 
                 c.category_code,
                 p.category_id,
                 p.product_name, 
                 p.product_id, 
                 p.image, 
                 MIN(v.variant_id) as color_id, 
                 MIN(v.price) as new_price,
                 MIN(v.sale) as sale_price 
               FROM categories c JOIN products p 
                 ON c.category_id = p.category_id
               JOIN variants v 
                 ON p.product_id = v.product_id
               WHERE p.category_id = ?
               GROUP BY p.product_id
               ORDER BY p.product_id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$category_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    public function selectCartByCustomer($customer_id)
    {
        try {
            $sql = "SELECT * FROM carts WHERE customer_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$customer_id]);
            return $stmt->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function insertCart($customer_id, $create_at)
    {
        try {
            $sql = "INSERT INTO carts (`customer_id`, `create_at`) VALUES (?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$customer_id, $create_at]);
            return $this->conn->lastInsertId();
        } catch (PDOException $e) {
            echo "Lỗi khi thêm giỏ hàng: " . $e->getMessage();
            return null;
        }
    }

    public function insertCartItemByCartId($cart_id, $variant_id, $size_id, $quantity, $price)
    {
        $sql = "INSERT INTO cart_items (`cart_id`,`variant_id`,`size_id`,`quantity`,`price`) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$cart_id, $variant_id, $size_id, $quantity, $price]);
    }
    public function getItemFromCart($cart_id)
    {
        $sql = "SELECT ct.quantity,
                        ct.price,
                        ct.cart_item_id,
                        v.color,
                        v.product_id,
                        s.size_value,
                        v.variant_id,
                        s.size_id,
                        p.product_name, 
                        p.product_id,
                        v.image
                    FROM cart_items ct JOIN size_variants s ON ct.size_id = s.size_id JOIN variants v ON s.variant_id = v.variant_id
                    JOIN products p ON v.product_id = p.product_id WHERE ct.cart_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$cart_id]);
        return $stmt->fetchAll();
    }
    public function selectCartItem($cartId, $variantId, $sizeId)
    {
        $sql = "SELECT * FROM cart_items WHERE cart_id = ? AND variant_id = ? AND size_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$cartId, $variantId, $sizeId]);
        return $stmt->fetch();
    }
    public function updateCartItemQuantity($cartItemId, $quantity)
    {
        $sql = "UPDATE cart_items SET quantity = ? WHERE cart_item_id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$quantity, $cartItemId]);
    }
    public function deleteProductFromCart($cart_item_id)
    {
        $sql = "DELETE FROM cart_items WHERE cart_item_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$cart_item_id]);
    }

    public function updateProductInCart($variant_id, $size_id, $quantity, $price, $cart_item_id)
    {
        $sql = "UPDATE `cart_items` SET 
                `variant_id` = ?, `size_id` = ?, `quantity` = ?, `price` = ? WHERE `cart_items`.`cart_item_id` = ? ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$variant_id, $size_id, $quantity, $price, $cart_item_id]);
    }
    public function updateTimeCart($create_at, $cart_id)
    {
        $sql = "UPDATE carts SET updated_at = ? WHERE cart_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$create_at, $cart_id]);
    }
    public function getCartItemFromCartId($cart_id)
    {
        $sql = "SELECT * FROM cart_items WHERE cart_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$cart_id]);
        return $stmt->fetch();
    }
    public function selectItemFromVariantId($variant_id)
    {
        if (is_array($variant_id)) {
            $variant_id = $variant_id[0];
        }
        $sql = "SELECT ct.*, v.*,sv.size_value, p.product_name FROM cart_items ct 
                    JOIN size_variants sv ON ct.size_id = sv.size_id
                    JOIN variants v ON sv.variant_id = v.variant_id 
                    JOIN products p ON v.product_id = p.product_id 
                    WHERE ct.variant_id = ?";
        $stmt = $this->conn->prepare($sql);

        try {
            $stmt->execute([$variant_id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }
    public function insertOrder($customer_id, $recipient_name, $recipient_email, $recipient_phone, $recipient_address, $order_date, $total_amount, $comments, $update_at, $state_id)
    {
        $sql = "INSERT INTO `orders` 
                (`customer_id`, `recipient_name`, `recipient_email`, `recipient_phone`, `recipient_address`, `order_date`, `total_amount`,`comments`,`update_at`, `state_id`) 
                VALUES (?, ?, ?, ?, ?, ?, ?,?,?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$customer_id, $recipient_name, $recipient_email, $recipient_phone, $recipient_address, $order_date, $total_amount, $comments, $update_at, $state_id]);

        // Trả về order_id vừa chèn
        return $this->conn->lastInsertId();
    }

    public function insertOrderDetail($order_id, $variant_id, $size_id, $quantity, $price)
    {
        $sql = "INSERT INTO 
                `order_detail` ( `order_id`, `variant_id`, `size_id`, `quantity`, `price`) 
                VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$order_id, $variant_id, $size_id, $quantity, $price]);
    }
    public function insertStateInHistory($order_id, $state_id, $description, $create_at)
    {
        $sql = "INSERT INTO order_history_state(order_id,state_id,`description`, create_at) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$order_id, $state_id, $description, $create_at]);
    }
    public function deleteItemAfterCheckout($cart_item_id)
    {
        $sql = "DELETE FROM cart_items WHERE cart_item_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$cart_item_id]);
    }

    //////////////////////ORDER DETAIL///////////////

    public function selectOrderByCustomer($order_id)
    {
        $sql = "SELECT * FROM orders  WHERE customer_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$order_id]);
        return $stmt->fetchAll();
    }
    //tìm đơn hàng để lấy thông tin tổng tiền cho vào phần chi tiết đơn hàng
    public function findOrder($order_id)
    {
        $sql = "SELECT * FROM orders WHERE order_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$order_id]);
        return $stmt->fetch();
    }
    public function showOrder($customer_id)
    {
        $sql = "SELECT 
                o.order_id,
                o.state_id,
                s.state_name,  
                o.order_date,
                o.update_at,
                MAX(p.product_name) AS product_name,
                MAX(p.product_id) AS product_id,
                MAX(v.image) AS `image`,
                MAX(v.price) AS price,
                o.total_amount
            FROM orders o
            JOIN order_detail od ON o.order_id = od.order_id
            JOIN size_variants sv ON od.size_id = sv.size_id
            JOIN variants v ON sv.variant_id = v.variant_id
            JOIN products p ON v.product_id = p.product_id
            JOIN states s ON o.state_id = s.state_id 
            WHERE o.customer_id = ?
            GROUP BY o.order_id
            ORDER BY o.order_id DESC";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$customer_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function showDetailOrder($order_id)
    {
        $sql = "SELECT 
            od.id,
            p.product_name,
            p.product_id,
            v.image,
            v.variant_id,
            sv.size_id,
            od.quantity,
            od.price,
            sv.size_value,
            v.color,
            od.order_id
        FROM  order_detail od 
        JOIN size_variants sv ON od.size_id = sv.size_id
        JOIN variants v ON sv.variant_id = v.variant_id
        JOIN products p ON v.product_id = p.product_id
        WHERE od.order_id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$order_id]);
        return $stmt->fetchAll();
    }
    public function getTotalFromOrder($order_id)
    {
        $sql = "SELECT 
            o.order_id,
            SUM(od.quantity * v.price) AS total_price
        FROM orders o
        JOIN order_detail od ON o.order_id = od.order_id
        JOIN size_variants sv ON od.size_id = sv.size_id
        JOIN variants v ON sv.variant_id = v.variant_id
        WHERE o.order_id = :order_id
        GROUP BY o.order_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['order_id' => $order_id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

    }
    public function getStateByOrder($state_id)
    {
        $sql = "SELECT * FROM orders o JOIN states s ON o.state_id = s.state_id WHERE o.state_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$state_id]);
        return $stmt->fetch();

    }

    public function updateOrderState($state_id, $order_id)
    {
        $sql = "UPDATE orders  SET state_id = ? WHERE order_id = ? ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$state_id, $order_id]);
        return $state_id;
    }
    public function insertHistoryState($order_id, $state_id, $description, $create_at)
    {
        $sql = "INSERT INTO order_history_state (order_id,state_id,`description`,create_at) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$order_id, $state_id, $description, $create_at]);
    }

    public function getHistoryDetail($order_id)
    {
        $sql = "SELECT oht.*,s.state_name FROM order_history_state oht JOIN states s ON oht.state_id = s.state_id WHERE order_id = ? ORDER BY oht.create_at desc";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$order_id]);
        return $stmt->fetchAll();
    }

    public function getInfoSizeFromOrder($order_id)
    {
        $sql = "SELECT od.size_id, od.quantity
        FROM order_detail od
        WHERE od.order_id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$order_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    public function updateQuantityAfterCheckout($size_id, $quantity)
    {
        $sql = "UPDATE size_variants SET quantity = quantity - ? WHERE size_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$quantity, $size_id]);
    }
    public function updateQuantityAfterCancel($size_id, $quantity)
    {
        $sql = "UPDATE size_variants SET quantity = quantity + ? WHERE size_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$quantity, $size_id]);
    }
    public function __destruct()
    {
        $this->conn = null;
    }

    public function getAllBlog()
    {
        $sql = " SELECT * FROM blogs ";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBlogById($id)
    {
        $sql = "SELECT * FROM blogs WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>