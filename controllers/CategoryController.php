<?php
class CategoryController
{
    public $proModel;
    public function __construct()
    {
        $this->proModel = new Category();
    }
    public function showList()
    {
        $cates = $this->proModel->show();
        require_once './views/home.php';
    }
}
?>