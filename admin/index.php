<?php
require_once '../commons/env.php';
require_once '../commons/function.php';
require_once './models/User.php';
require_once './models/Product.php';
require './controllers/UserController.php';
require './controllers/DashboardController.php';
require './controllers/ProductController.php';
// Router đơn giản
$controller = new UserController();

$act = $_GET['act'] ?? '/';
//$_GET['action'] : 'index';
match($act){
    '/'=>(new DashboardController())->dashboard(),
    //Quản lí user
    'list-user'=>(new UserController())->list(),
    'delete-user'=>(new UserController())->delete(),
    'create-user'=>(new UserController())->create(),
    'post-create-user'=>(new UserController())->postCreate(),
    'update-user'=>(new UserController())->update(),
    'post-update-user'=>(new UserController())->postUpdate(),
    // 'search-user'=>(new UserController())->searchUser(),
    // 'find-user'=>(new UserController())->findUser(),
    // 'post-find'=>(new UserController())->postFind(),

    'list-pro'=>(new ProductControllerAdmin())->showPro(),
    'create-pro'=>(new ProductControllerAdmin())->create(),
    'post-create-pro'=>(new ProductControllerAdmin())->postCreate(),
    'update-pro'=>(new ProductControllerAdmin())->update(),
    'post-update-pro'=>(new ProductControllerAdmin())->postPro(),
    'delete-pro'=>(new ProductControllerAdmin())->delete(),

    //Quản lí danh mục
}
?>
