<?php 
    class ProductControllerAdmin {
        public $proAdminModel;

        public function __construct() {
            $this->proAdminModel = new ProductAdmin();
        }

        public function listProduct() {
            // $cates = $this->proAdminModel->showCate();
            $idProducts = $this->proAdminModel->getAllProduct();
            require_once './views/Products/list.php';
        }

        public function add() {
            require_once './views/Products/add.php';
        }

        public function addProduct() {
           
                $upload = '../uploads/Product/' . basename($_FILES['images']['name']);
                if (move_uploaded_file($_FILES['images']['tmp_name'], $upload)) {
                    echo "<h1>Uploaded</h1>";
                    $images = $upload;}
                

            $product_name = $_POST['product_name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $view = $_POST['view'];
            $category_id = $_POST['category_id'];
            $stock_quantity = $_POST['stock_quantity'];
            $imagesPro=$images;
            $this->proAdminModel->insertProduct($product_name, $price, $imagesPro, $description, $view, $category_id, $stock_quantity);
            header("Location: ?act=list-pro");
        }

        public function edit() {
            $product_id = $_GET['id'];
            $idProduct = $this->proAdminModel->getIdProduct($product_id);
            require_once './views/Products/edit.php';
        }

        public function editProduct() {
            $product_id = $_GET['id'];
            $product_name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $view = $_POST['view'];
            $category_id = $_POST['category_id'];
            $stock_quantity = $_POST['stock_quantity'];
            
            $idProduct = $this->proAdminModel->getIdProduct($product_id);
            
            $images = $idProduct['product_img']; // giữ ảnh cũ nếu không có ảnh mới được tải lên
            if (isset($_FILES['images']) && $_FILES['images']['error'] == UPLOAD_ERR_OK) {
                $upload = '../uploads/Product/' . basename($_FILES['images']['name']);
                if (move_uploaded_file($_FILES['images']['tmp_name'], $upload)) {
                    $images = $upload; // cập nhật ảnh nếu tải lên thành công
                }
            }

            $this->proAdminModel->updateProduct($product_name,$price, $images, $description, $view, $category_id, $stock_quantity, $product_id);
            header("Location: ?act=list-pro");
        }

        public function delete() {
            $id = $_GET['id'];
            $this->proAdminModel->deleteProduct($id);
            header("Location:  ?act=list-pro");
        }
    }
?>