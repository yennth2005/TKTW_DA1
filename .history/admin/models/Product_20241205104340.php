<?php
class ProductAdmin
{
    public $cnt;
    public function __construct()
    {
        $this->cnt = connect_db();
    }


    // Hiển thị danh sách - Lấy tất cả dữ liệu
    public function getAllProduct()
    {
        $sql = "SELECT p.*,COUNT(v.variant_id) as variant_quantity, MAX(sv.quantity) as quantity FROM `products` p 
            JOIN `variants` v ON p.product_id = v.product_id 
            JOIN size_variants sv ON v.variant_id = sv.variant_id
            GROUP BY p.product_id 
            HAVING variant_quantity>=0 ";
        $stmt = $this->cnt->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
    // Thêm sản phẩm - Thực hiện lệnh insert
    public function insertProduct($product_name, $image, $description, $view, $category_id)
    {
        $sql = "INSERT INTO `products` (`product_name`,`image`, `description`, `view`, `category_id`) VALUES (?,?,?,?,?)";
        $stmt = $this->cnt->prepare($sql);
        $stmt->execute([$product_name, $image, $description, $view, $category_id]);
        $productId = $this->cnt->lastInsertId();
        return $productId;
    }

    // Sửa sản phẩm - Lấy dữ liệu theo product_id
    public function getIdProduct($product_id)
    {
        $sql = "SELECT * FROM `products` WHERE product_id = '$product_id'";
        $stmt = $this->cnt->query($sql);
        $data = $stmt->fetch();
        return $data;
    }
    // Cập nhật sản phẩm
    public function updateProduct($product_name, $price, $images, $description, $view, $category_id, $stock_quantity, $product_id)
    {
        $sql = "UPDATE `products` SET `product_name` = '$product_name',`price`='$price' ,`images` = '$images', `description` = '$description', `view` = '$view', `category_id` = '$category_id', `stock_quantity` = '$stock_quantity' WHERE `product_id` = '$product_id'";
        $this->cnt->exec($sql);
    }
    // Xóa sản phẩm

    public function deleteSizeByVariant($variant_id)
    {
        $sql = "DELETE FROM size_variants WHERE variant_id = ?";
        $stmt = $this->cnt->prepare($sql);
        $stmt->execute([$variant_id]);
    }
    public function deleteVariantByProductId($product_id)
    {
        $sql = "DELETE FROM variants WHERE product_id = ?";
        $stmt = $this->cnt->prepare($sql);
        $stmt->execute([$product_id]);
    }
    public function deleteProduct($product_id)
    {
        $sql = "DELETE FROM `products` WHERE product_id = '$product_id'";
        $this->cnt->exec($sql);
    }
    public function getVariantsByProductId($product_id)
    {
        $sql = "SELECT v.*, s.size_value,s.size_id, s.quantity
            FROM variants v 
            LEFT JOIN size_variants s ON v.variant_id = s.variant_id 
            WHERE v.product_id = ?";
        $stmt = $this->cnt->prepare($sql);
        $stmt->execute([$product_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteSize($size_id)
    {

    }
    public function deleteVariant($size_id)
    {
        $sql = "DELETE FROM size_variants WHERE `size_variants`.`size_id`= ? ";
        $stmt = $this->cnt->prepare($sql);
        $stmt->execute([$size_id]);

    }
    // public function find
// public function getVariantsByProductId($product_id) {
//     $sql = "SELECT v.*, s.size_value,s.quantity,p.product_name FROM size_variants s 
//         JOIN variants v ON v.variant_id = s.variant_id 
//         JOIN products p ON v.product_id = p.product_id WHERE v.product_id = ?";
//     $stmt = $this->cnt->prepare($sql);
//     $stmt->execute([$product_id]);
//     return $stmt->fetchAll(PDO::FETCH_ASSOC);
// }

    public function getSizesByVariantId($variant_id)
    {
        $sql = "SELECT * FROM `size_variants` WHERE variant_id = ?";
        $stmt = $this->cnt->prepare($sql);
        $stmt->execute([$variant_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>