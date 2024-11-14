<?php
require_once '../commons/env.php';
require_once '../commons/function.php';
require_once './models/Customer.php';
require_once './models/Product.php';
require_once './models/Category.php';
require './controllers/CustomerController.php';
require './controllers/DashboardController.php';
require './controllers/ProductController.php';
require './controllers/CategoryController.php';
// Router đơn giản
$controller = new CustomerController();

$act = $_GET['act'] ?? '/';
//$_GET['action'] : 'index';
match ($act) {
    '/' => (new DashboardController())->dashboard(),
    //Quản lí user
    'list-user' => (new CustomerController())->list(),
    'delete-user' => (new CustomerController())->delete(),
    'create-user' => (new CustomerController())->create(),
    'post-create-user' => (new CustomerController())->postCreate(),
    'update-user' => (new CustomerController())->update(),
    'post-update-user' => (new CustomerController())->postUpdate(),
    // 'search-user'=>(new CustomerController())->searchUser(),
    // 'find-user'=>(new CustomerController())->findUser(),
    // 'post-find'=>(new CustomerController())->postFind(),
    //Quản lí danh mục
    'list-category' => (new CategoryController())->showAllCategory(),
    'delete-category' => (new CategoryController())->delete(),
    'add-category' => (new CategoryController())->addCategory(),
    'post-category' => (new CategoryController())->postCategory(),
    'update-category' => (new CategoryController())->updateCategory(),
    'post-update-category' => (new CategoryController())->postUpdateCategory(),
}
    ?>