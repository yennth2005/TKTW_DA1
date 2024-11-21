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
        $uploadFile = "../uploads/Category/" . $_FILES['image']['name'];
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile))
            echo "<h1>Uploaded</h1>";
        $images = $uploadFile;
        $image = $images;
        $errors = [];
        if (empty($category_name)) {
            $errors['category_name'] = 'Tên danh mục không được để trống.';
        } elseif (strlen($category_name) < 3) {
            $errors['category_name'] = 'Tên danh mục phải có ít nhất 3 ký tự.';
        }

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['old_data'] = $_POST;
            header("Location:" . BASE_URL_ADMIN . "?act=add-category");
            exit;
        }

        $this->categoryModel->insertCategory($category_name, $image);
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
        if (isset($_FILES['image'])) {
            if ($_FILES['name']['error'] == UPLOAD_ERR_OK) {
                $uploadFile = "../uploads/Customer/" . $_FILES['image']['name'];
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                    $image = $uploadFile;
                }
            }
        }
        $this->categoryModel->updateCategory($id, $category_name);
        header("Location:" . BASE_URL_ADMIN . "?act=list-category");

    }
}




?>