<?php

class CategoryController
{
    public $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    //đổ danh sách
    public function showAllCategory()
    {
        $categories = $this->categoryModel->getAllCategories();


        // load view
        include "./views/Category/listCategory.php";
    }

    //xóa
    public function delete()
    {
        $id = $_GET['id'];
        $this->categoryModel->deleteCategory($id);
        header("Location:" . BASE_URL_ADMIN . "?act=list-category");
    }
    public function addCategory()
    {
        //lấy danh sách danh mục
        $categories = $this->categoryModel->getAllCategories();
        //load view
        include "./views/Category/addCategory.php";
    }
    public function postCategory()
    {
        session_start();
    
        $category_name = $_POST['category_name'];
        $errors = [];
        $image = '';
    
        // Kiểm tra nếu có file ảnh được tải lên
        if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            // Đường dẫn tới thư mục lưu ảnh
            $uploadDir = __DIR__ . '/../../uploads/Category/';
    
            // Kiểm tra và tạo thư mục nếu chưa tồn tại
            if (!file_exists($uploadDir)) {
                if (!mkdir($uploadDir, 0777, true)) {
                    echo "<h1>Tải ảnh thất bại</h1>";
                    echo "<p>Lỗi: Không thể tạo thư mục lưu trữ.</p>";
                    exit;
                }
            }
    
            // Tạo tên file mới duy nhất để tránh trùng lặp
            $filename = uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $uploadFile = $uploadDir . $filename;
    
            // Di chuyển file tải lên vào thư mục đích
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                $image = 'uploads/Category/' . $filename; // Lưu đường dẫn tương đối
            } else {
                $_SESSION['error']= "Tải ảnh thất bại";
                $_SESSION['error']= "Lỗi: Không thể di chuyển file tải lên.";
                exit;
            }
        }
    
        // Kiểm tra tính hợp lệ của tên danh mục
        if (empty($category_name)) {
            $errors['category_name'] = 'Tên danh mục không được để trống.';
        } elseif (strlen($category_name) < 3) {
            $errors['category_name'] = 'Tên danh mục phải có ít nhất 3 ký tự.';
        }
    
        // Xử lý lỗi nếu có
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['old_data'] = $_POST;
            header("Location:" . BASE_URL_ADMIN . "?act=add-category");
            exit;
        }
    
        // Lưu danh mục vào cơ sở dữ liệu
        $this->categoryModel->insertCategory($category_name, $image);
        $_SESSION['success'] = "THÊM THÀNH CÔNG";
        // Chuyển hướng về danh sách danh mục
        header("Location:" . BASE_URL_ADMIN . "?act=list-category");
        exit;
    }
    


    public function updateCategory()
    {
        $id = $_GET['id'];
        $category = $this->categoryModel->find($id);
        require_once './views/Category/updateCategory.php';
    }

    public function postUpdateCategory()
    {
        $id = $_GET['id'];
        $category_name = $_POST['category_name'];
    
        // Lấy thông tin danh mục hiện tại
        $cate = $this->categoryModel->find($id);
        $image = $cate['image']; // Giữ ảnh cũ nếu không có ảnh mới được tải lên
    
        // Kiểm tra nếu có file ảnh mới được tải lên
        if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            // Đường dẫn tới thư mục lưu ảnh
            $uploadDir = __DIR__ . '/../../uploads/Category/';
    
            // Kiểm tra và tạo thư mục nếu chưa tồn tại
            if (!file_exists($uploadDir)) {
                if (!mkdir($uploadDir, 0777, true)) {
                    echo "<h1>Cập nhật thất bại</h1>";
                    echo "<p>Lỗi: Không thể tạo thư mục lưu trữ.</p>";
                    exit;
                }
            }
    
            // Tạo tên file mới duy nhất để tránh trùng lặp
            $filename = uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $uploadFile = $uploadDir . $filename;
    
            // Di chuyển file tải lên vào thư mục đích
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                $image = 'uploads/Category/' . $filename; // Lưu đường dẫn tương đối nếu tải lên thành công
            } else {
                echo "<h1>Cập nhật thất bại</h1>";
                echo "<p>Lỗi: Không thể tải lên file ảnh mới.</p>";
                exit;
            }
        }
    
        // Cập nhật danh mục vào cơ sở dữ liệu
        $this->categoryModel->updateCategory($id, $category_name, $image);
    
        // Chuyển hướng về danh sách danh mục
        header("Location:" . BASE_URL_ADMIN . "?act=list-category");
        exit;
    }
}




?>