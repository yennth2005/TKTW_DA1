<?php
require_once '../commons/env.php';
require_once '../commons/function.php';
require_once './models/Customer.php';
require_once './models/Product.php';


require './controllers/CustomerController.php';
require './controllers/DashboardController.php';
require './controllers/ProductController.php';


// Router đơn giản
$controller = new CustomerController();
$product= new ProductControllerAdmin();

$act = $_GET['act'] ?? '/';
//$_GET['action'] : 'index';
match($act){
    '/'=>(new DashboardController())->dashboard(),
    //Quản lí user
    'list-user'=>(new CustomerController())->list(),
    'delete-user'=>(new CustomerController())->delete(),
    'create-user'=>(new CustomerController())->create(),
    'post-create-user'=>(new CustomerController())->postCreate(),
    'update-user'=>(new CustomerController())->update(),
    'post-update-user'=>(new CustomerController())->postUpdate(),
    // 'search-user'=>(new CustomerController())->searchUser(),
    // 'find-user'=>(new CustomerController())->findUser(),
    // 'post-find'=>(new CustomerController())->postFind(),


    
// quản lí sản phẩm 
    'list-pro'=>(new ProductControllerAdmin())->listProduct(),
    'create-pro'=>(new ProductControllerAdmin())->add(),
    'post-create-pro'=>(new ProductControllerAdmin())->addProduct(),
    'update-pro'=>(new ProductControllerAdmin())->edit(),
    'post-update-pro'=>(new ProductControllerAdmin())->editProduct(),
    'delete-pro'=>(new ProductControllerAdmin())->delete(),

    'addProduct' => $product->listProduct(),

    //Quản lí danh mục

    //login
    

}
?>
