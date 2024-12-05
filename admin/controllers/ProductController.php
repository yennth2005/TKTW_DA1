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
        // Validate product name
        if (empty($_POST['product_name'])) {
            echo "<h1>Lỗi</h1><p>Tên sản phẩm không được để trống.</p>";
            return;
        }
    
        // Validate description
        if (empty($_POST['description'])) {
            echo "<h1>Lỗi</h1><p>Mô tả sản phẩm không được để trống.</p>";
            return;
        }
    
        // Validate category
        if (empty($_POST['category_id'])) {
            echo "<h1>Lỗi</h1><p>Vui lòng chọn danh mục.</p>";
            return;
        }
    
        // Validate file upload
        $file = $_FILES['images'];
    
        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo "<h1>Tải ảnh thất bại</h1>";
            echo "<p>Lỗi: File không được tải lên đúng cách.</p>";
            return;
        }
    
        // Validate file type
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($extension, $allowedExtensions)) {
            echo "<h1>Lỗi</h1><p>Hình ảnh phải có định dạng JPG, JPEG, PNG hoặc GIF.</p>";
            return;
        }
    
        $filename = uniqid() . '.' . $extension;
        $uploadDir = __DIR__ . '/../../uploads/Products/';
    
        if (!file_exists($uploadDir)) {
            if (!mkdir($uploadDir, 0777, true)) {
                echo "<h1>Tải ảnh thất bại</h1>";
                echo "<p>Lỗi: Không thể tạo thư mục lưu trữ.</p>";
                return;
            }
        }
    
        $destination = $uploadDir . $filename;
    
        if (move_uploaded_file($file['tmp_name'], $destination)) {
            echo "<h1>Tải ảnh thành công</h1>";
    
            // Lưu thông tin sản phẩm vào cơ sở dữ liệu
            $product_id = $this->proAdminModel->insertProduct(
                $_POST['product_name'],
                'uploads/Products/' . $filename,
                $_POST['description'],
                0,
                $_POST['category_id']
            );
            $_SESSION['success'] = "Thêm sản phẩm thành công";
            // Chuyển hướng về danh sách sản phẩm
            header("Location: ?act=add-variants&product-id=" . $product_id);
        } else {
            echo "<h1>Tải ảnh thất bại</h1>";
            echo "<p>Lỗi: Không thể di chuyển file tải lên.</p>";
        }
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
        // Lấy thông tin từ yêu cầu
        $product_id = $_GET['id'];
        $product_name = $_POST['name'];
        $description = $_POST['description'];
        $view = 0;
        $category_id = $_POST['category_id'];

        $idProduct = $this->proAdminModel->getIdProduct($product_id);
        $images = $idProduct['image'];

        if (isset($_FILES['images']) && $_FILES['images']['error'] == UPLOAD_ERR_OK) {
            // Tạo đường dẫn tới thư mục lưu ảnh
            $uploadDir = __DIR__ . '/../../uploads/Products/';

            if (!file_exists($uploadDir)) {
                if (!mkdir($uploadDir, 0777, true)) {
                    echo "<h1>Cập nhật thất bại</h1>";
                    echo "<p>Lỗi: Không thể tạo thư mục lưu trữ.</p>";
                    return;
                }
            }
            $filename = uniqid() . '.' . pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
            $upload = $uploadDir . $filename;

            if (move_uploaded_file($_FILES['images']['tmp_name'], $upload)) {
                $images = 'uploads/Products/' . $filename; // Lưu đường dẫn tương đối nếu tải lên thành công
            } else {
                echo "<h1>Cập nhật thất bại</h1>";
                echo "<p>Lỗi: Không thể tải lên file ảnh mới.</p>";
                return;
            }
        }

        // Cập nhật sản phẩm vào cơ sở dữ liệu
        $this->proAdminModel->updateProduct(
            $product_name,
            $images,
            $description,
            $view,
            $category_id,
            $product_id
        );

        // Chuyển hướng về danh sách sản phẩm
        header("Location: ?act=list-pro");
    }


    public function delete()
    {
        $id = $_GET['id'];
        $variants = $this->proAdminModel->getVariantsByProductId($id);
        foreach ($variants as $variant) {
            // echo "<pre>";
            // print_r($variant);
            // echo "</pre>";
            $variant_id = $variant['variant_id'];
            $this->proAdminModel->deleteSizeByVariant($variant_id);
        } 
        $this->proAdminModel->deleteVariantByProductId($id);
        // $variant_id = $variant['variant_id'];
        // var_dump($variant_id);

        $this->proAdminModel->deleteProduct($id);
        $_SESSION['success']="Xoá thành công";
        header("Location:  ?act=list-pro");
    }

    //VARIANTS



    public function viewDetailVariantByProduct()
    {
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
        $file = $_FILES['images'];

        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo "<h1>Tải ảnh thất bại</h1>";
            echo "<p>Lỗi: File không được tải lên đúng cách.</p>";
            return;
        }

        $filename = uniqid() . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);

        $uploadDir = __DIR__ . '/../../uploads/Products/';

        if (!file_exists($uploadDir)) {
            if (!mkdir($uploadDir, 0777, true)) {
                echo "<h1>Tải ảnh thất bại</h1>";
                echo "<p>Lỗi: Không thể tạo thư mục lưu trữ.</p>";
                return;
            }
        }

        $destination = $uploadDir . $filename;

        if (move_uploaded_file($file['tmp_name'], $destination)) {
            echo "<h1>Tải ảnh thành công</h1>";
        }
        $image = 'uploads/Products/' . $filename;
        $this->proAdminModel->insertVariant($image, $color, $price, $sale, $desc, $product_id);

        // Điều hướng trở lại danh sách sản phẩm
        header("Location: ?act=view-detail-pro&id=".$product_id);
    }
    public function saveSize()
    {
        $variant_id = $_GET['variant-id']; // Lấy variant_id từ URL
        $size_value = $_POST['size']; // Lấy kích cỡ từ form
        $quantity = $_POST['quantity']; // Lấy số lượng từ form
        $product = $_POST['product-id'];
        // Thêm kích cỡ vào cơ sở dữ liệu
        $this->proAdminModel->insertSizeVariant($size_value, $quantity, $variant_id);

        // Quay lại trang danh sách biến thể
        header("Location: ?act=view-detail-pro&id=" . $product);
        exit();
    }

    public function deleteVariant()
    {
        $product = $_GET['product-id'];
        $size_id = $_GET['size-id'];
        $this->proAdminModel->deleteVariant($size_id);
        $_SESSION['success']="Xoá thành công";
        header("Location: ?act=view-detail-pro&id=" . $product);
    }
    public function updateVariant()
    {
        
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