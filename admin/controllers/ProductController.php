<?php
class ProductControllerAdmin
{
    public $proAdminModel;

    public function __construct()
    {
        $this->proAdminModel = new ProductAdmin();
    }

    public function listProduct()
    {
        // $cates = $this->proAdminModel->showCate();
        $idProducts = $this->proAdminModel->getAllProduct();
        require_once './views/Products/list.php';
    }

    public function add()
    {
        $cates = $this->proAdminModel->allCate();
        require_once './views/Products/add.php';
    }

    public function addProduct()
    {
        $upload = '../uploads/Products/' . basename($_FILES['images']['name']);
        if (move_uploaded_file($_FILES['images']['tmp_name'], $upload)) {
            echo "<h1>Uploaded</h1>";
            $images = $upload;
        }   
        $imagesPro = $images;
        $product_name = $_POST['product_name'];
        $description = $_POST['description'];
        $view = 0;
        $category_id = $_POST['category_id'];
        $this->proAdminModel->insertProduct($product_name,$imagesPro, $description, $view, $category_id);
        header("Location: ?act=list-pro");
    }

    public function edit()
    {
        $product_id = $_GET['id'];
        $cates = $this->proAdminModel->allCate();
        $idProduct = $this->proAdminModel->getIdProduct($product_id);
        require_once './views/Products/edit.php';
    }

    public function editProduct()
    {
        $product_id = $_GET['id'];
        $product_name = $_POST['name'];
        $description = $_POST['description'];
        $view = 0;
        $category_id = $_POST['category_id'];
        $idProduct = $this->proAdminModel->getIdProduct($product_id);
        $images = $idProduct['product_img']; // giữ ảnh cũ nếu không có ảnh mới được tải lên
        if (isset($_FILES['images']) && $_FILES['images']['error'] == UPLOAD_ERR_OK) {
            $upload = '../uploads/Products/' . basename($_FILES['images']['name']);
            if (move_uploaded_file($_FILES['images']['tmp_name'], $upload)) {
                $images = $upload; // cập nhật ảnh nếu tải lên thành công
            }
        }
        $this->proAdminModel->updateProduct($product_name,$images, $description, $view, $category_id, $product_id);
        header("Location: ?act=list-pro");
    }

    public function delete(){
        $id = $_GET['id'];
        $this->proAdminModel->deleteProduct($id);
        header("Location:  ?act=list-pro");
    }

    //VARIANTS
   

    
    public function viewDetailVariantByProduct(){
        $product_id = $_GET['id'];
        $products = $this->proAdminModel->getVariantsByProductId($product_id);
        require_once './views/Products/Variants.php';
    }
    public function variants()
    {
        $product_id = $_GET['product-id'];
        $variants = $this->proAdminModel->getVariantsByProductId($product_id); // Lấy danh sách biến thể

        require_once './views/Products/addVariant.php';
    }


    public function addVariant()
    {
        $product_id = $_POST['product-id'];
        $color = $_POST['color'];
        $price = $_POST['price'];
        $sale = $_POST['sale'];
        $desc = $_POST['description'];
        // Xử lý upload hình ảnh
        $image = '';
        if (!empty($_FILES['image']['name'])) {
            $target_dir = "../uploads/Products/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            $image = $target_file;
        }

        $this->proAdminModel->insertVariant($image, $color, $price, $sale, $desc, $product_id);

        // Điều hướng trở lại danh sách sản phẩm
        header("Location: ?act=list-pro");
    }
    public function saveSize() {
        $variant_id = $_GET['variant-id']; // Lấy variant_id từ URL
        $size_value = $_POST['size']; // Lấy kích cỡ từ form
        $quantity = $_POST['quantity']; // Lấy số lượng từ form
        $product=$_POST['product-id'];
        // Thêm kích cỡ vào cơ sở dữ liệu
        $this->proAdminModel->insertSizeVariant($size_value, $quantity, $variant_id);
        
        // Quay lại trang danh sách biến thể
        header("Location: ?act=view-detail-pro&id=".$product);
        exit();
    }

    public function deleteVariant(){
        $product=$_GET['product-id'];
        $size_id=$_GET['size-id'];
        $this->proAdminModel->deleteVariant($size_id);
        header("Location: ?act=view-detail-pro&id=".$product);
    }
    public function updateVariant(){
        
    }
    // public function saveSize()
    // {
    //     $variant_id = $_POST['variant_id'];
    //     $size_value = $_POST['size_value'];
    //     $quantity = $_POST['quantity'];

    //     // Thêm size vào cơ sở dữ liệu
    //     $this->proAdminModel->insertSizeVariant($size_value, $quantity, $variant_id);

    //     // Điều hướng trở lại danh sách biến thể
    //     header("Location: ?act=variants&product-id=" . $this->proAdminModel->getVariantsByProductId($variant_id)['product_id']);
    // }

}
?>