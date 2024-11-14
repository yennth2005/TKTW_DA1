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
        $category_name = $_POST['category_name'];
        $this->categoryModel->insertCategory($category_name);
        header("Location:" . BASE_URL_ADMIN . "?act=list-category");

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
        $this->categoryModel->updateCategory($id, $category_name);
        header("Location:" . BASE_URL_ADMIN . "?act=list-category");

    }
}




?>