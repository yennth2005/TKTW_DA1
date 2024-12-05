<?php

class BlogController
{
    public $BlogModel;

    public function __construct()
    {
        $this->BlogModel = new BlogModel();
    }

    public function showAllBlog()
    {
        // Lấy tất cả bài viết từ mô hình
        $posts = $this->BlogModel->getAllBlogs();

        // Bao gồm view để hiển thị các blog
        include "./views/Blogs/listBlogs.php";
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->BlogModel->deleteBlog($id);
        header("Location:" . BASE_URL_ADMIN . "?act=list-blogs");
    }

    public function addBlogs()
    {
        $posts = $this->BlogModel->getAllBlogs();
        include "./views/Blogs/addBlogs.php";
    }

    public function postBlog()
    {
        session_start();

        $errors = [];
        $img = '';
        $title = $_POST['title'] ?? '';
        $description = $_POST['description'] ?? '';
        $content = $_POST['content'] ?? '';

        // Kiểm tra nếu có file ảnh được tải lên
        if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
            // Đường dẫn tới thư mục lưu ảnh
            $uploadDir = __DIR__ . '/../../uploads/Blogs/';

            // Kiểm tra và tạo thư mục nếu chưa tồn tại
            if (!file_exists($uploadDir)) {
                if (!mkdir($uploadDir, 0777, true)) {
                    echo "<h1>Tải ảnh thất bại</h1>";
                    echo "<p>Lỗi: Không thể tạo thư mục lưu trữ.</p>";
                    exit;
                }
            }

            // Tạo tên file mới duy nhất để tránh trùng lặp
            $filename = uniqid() . '.' . pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
            $uploadFile = $uploadDir . $filename;

            // Di chuyển file tải lên vào thư mục đích
            if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadFile)) {
                $img = 'uploads/Blogs/' . $filename; // Lưu đường dẫn tương đối
            } else {
                $_SESSION['error'] = "Tải ảnh thất bại. Lỗi: Không thể di chuyển file tải lên.";
                header("Location: " . BASE_URL_ADMIN . "?act=add-blog");
                exit;
            }
        }

        // Kiểm tra tính hợp lệ của các trường
        if (empty($title)) {
            $errors['title'] = 'Tên bài viết không được để trống.';
        }

        if (empty($description)) {
            $errors['description'] = 'Mô tả không được để trống.';
        }

        if (empty($content)) {
            $errors['content'] = 'Nội dung không được để trống.';
        }

        // Xử lý lỗi nếu có
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['old_data'] = $_POST; // Lưu dữ liệu cũ
            header("Location: " . BASE_URL_ADMIN . "?act=add-blog");
            exit;
        }

        // Lưu bài viết vào cơ sở dữ liệu
        $this->BlogModel->insertBlog($title, $img, $description, $content);
        $_SESSION['success'] = "THÊM THÀNH CÔNG";

        // Chuyển hướng về danh sách bài viết
        header("Location: " . BASE_URL_ADMIN . "?act=list-blogs");
        exit;
    }

    public function updateBlog()
    {
        $id = $_GET['id'];
        $posts = $this->BlogModel->find($id);
        require_once './views/Blogs/editBlogs.php';
    }

    public function postUpdateBlog()
    {
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $content = $_POST['content'];
        $blog = $this->BlogModel->find($id);
        $img = $blog['img']; //giữ ảnh cũ nếu ko có ảnh ms tải lên

        $errors = [];


        // Kiểm tra nếu có file ảnh được tải lên
        if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
            // Đường dẫn tới thư mục lưu ảnh
            $uploadDir = __DIR__ . '/../../uploads/Blogs/';

            // Kiểm tra và tạo thư mục nếu chưa tồn tại
            if (!file_exists($uploadDir)) {
                if (!mkdir($uploadDir, 0777, true)) {
                    echo "<h1>Tải ảnh thất bại</h1>";
                    echo "<p>Lỗi: Không thể tạo thư mục lưu trữ.</p>";
                    exit;
                }
            }

            // Tạo tên file mới duy nhất để tránh trùng lặp
            $filename = uniqid() . '.' . pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
            $uploadFile = $uploadDir . $filename;

            // Di chuyển file tải lên vào thư mục đích
            if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadFile)) {
                $img = 'uploads/Blogs/' . $filename; // Lưu đường dẫn tương đối
            } else {
                $_SESSION['error'] = "Tải ảnh thất bại. Lỗi: Không thể di chuyển file tải lên.";
                header("Location: " . BASE_URL_ADMIN . "?act=add-blog");
                exit;
            }
        }

        // Kiểm tra tính hợp lệ của các trường
        if (empty($title)) {
            $errors['title'] = 'Tên bài viết không được để trống.';
        }

        if (empty($description)) {
            $errors['description'] = 'Mô tả không được để trống.';
        }

        if (empty($content)) {
            $errors['content'] = 'Nội dung không được để trống.';
        }

        // Xử lý lỗi nếu có
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['old_data'] = $_POST; // Lưu dữ liệu cũ
            header("Location: " . BASE_URL_ADMIN . "?act=add-blog");
            exit;
        }

        // Cập nhật danh mục vào cơ sở dữ liệu
        $this->BlogModel->updateBlog($id, $title, $img, $description, $content);

        // Chuyển hướng về danh sách danh mục
        header("Location:" . BASE_URL_ADMIN . "?act=list-blogs");
        exit;
    }
}

?>