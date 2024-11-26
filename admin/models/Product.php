<?php 
class ProductAdmin{
    public $cnt;
    public function __construct(){
        $this->cnt=connect_db();
    }
  

    // Hiển thị danh sách - Lấy tất cả dữ liệu
 public function getAllProduct() {
    $sql = "SELECT * FROM `products`";
    $stmt=$this->cnt->query($sql);
    $data=$stmt->fetchAll();
    return $data;
}
// Thêm sản phẩm - Thực hiện lệnh insert
public function insertProduct($product_name, $price, $images, $description, $view, $category_id, $stock_quantity) {
    $sql = "INSERT INTO `products` (`product_name`,`price`, `images`, `description`, `view`, `category_id`, `stock_quantity`) VALUES ('$product_name','$price','$images', '$description', '$view', '$category_id', '$stock_quantity')";
    $this->cnt->exec($sql);
}    

    // Sửa sản phẩm - Lấy dữ liệu theo product_id
public function getIdProduct($product_id) {
    $sql = "SELECT * FROM `products` WHERE product_id = '$product_id'";
    $stmt=$this->cnt->query($sql);
        $data=$stmt->fetch();
        return $data;
}
    // Cập nhật sản phẩm
    public function updateProduct($product_name,$price, $images, $description, $view, $category_id, $stock_quantity, $product_id) {
        $sql = "UPDATE `products` SET `product_name` = '$product_name',`price`='$price' ,`images` = '$images', `description` = '$description', `view` = '$view', `category_id` = '$category_id', `stock_quantity` = '$stock_quantity' WHERE `product_id` = '$product_id'";
        $this->cnt->exec($sql);
    }
    // Xóa sản phẩm
public function deleteProduct($product_id) {
    $sql = "DELETE FROM `products` WHERE product_id = '$product_id'";
    $this->cnt->exec($sql);
}
}
?>