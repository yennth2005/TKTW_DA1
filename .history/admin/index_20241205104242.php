<?php
session_start();
require_once '../commons/env.php';
require_once '../commons/function.php';
check_login();  
require_once './models/Customer.php';
require_once './models/Product.php';
require_once './models/Category.php';
require_once './models/Order.php';
require_once './models/State.php';
require_once './models/Comment.php';
require_once './models/Statistic.php';
require_once './controllers/CustomerController.php';
require_once './controllers/DashboardController.php';
require_once './controllers/ProductController.php';
require_once './controllers/CategoryController.php';
require_once './controllers/OrderController.php';
require_once './controllers/StateController.php';
require_once './controllers/CommentController.php';
require_once './controllers/StatisticsController.php';

// Router đơn giản
<<<<<<< Updated upstream
$controller = new CustomerController();
$product= new ProductControllerAdmin();
=======
$customer = new CustomerController();
$product = new ProductControllerAdmin();
$category = new CategoryController();
$order = new OrderController();
$comment = new CommentController();
$state = new StateController();
$statistic = new StatisticsController();
>>>>>>> Stashed changes

$act = $_GET['act'] ?? '/';
//$_GET['action'] : 'index';
match ($act) {
    'home' => (new DashboardController())->dashboard(),
    //thống kê
    'statistic' =>$statistic->showStatistic(),
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

    //quản lý sản phẩm
    'list-pro'=>(new ProductControllerAdmin())->listProduct(),
    'create-pro'=>(new ProductControllerAdmin())->add(),
    'post-create-pro'=>(new ProductControllerAdmin())->addProduct(),
    'update-pro'=>(new ProductControllerAdmin())->edit(),
    'post-update-pro'=>(new ProductControllerAdmin())->editProduct(),
    'delete-pro'=>(new ProductControllerAdmin())->delete(),
    'addProduct' => $product->listProduct(),

    //Quản lí danh mục
    'list-category' => (new CategoryController())->showAllCategory(),
    'delete-category' => (new CategoryController())->delete(),
    'add-category' => (new CategoryController())->addCategory(),
    'post-category' => (new CategoryController())->postCategory(),
    'update-category' => (new CategoryController())->updateCategory(),
    'post-update-category' => (new CategoryController())->postUpdateCategory(),

    //quản lý đơn hàng
    'list-order'=>(new OrderController())->showAllOrder(),
    'update-order'=>(new OrderController())->showDetailOrder(),
    'update-state'=>(new OrderController())->updateOrder(),

    //trạng thái đơn hàng
    'list-state'=>(new StateController())->list(),
    'delete-state' =>(new StateController())->delete(),
    'create-state' =>(new StateController())->create(),
    'post-create-state' =>(new StateController())->postCreate(),
    'edit-state' =>(new StateController())->update(),
    'post-update-state' =>(new StateController())->postUpdate(),

    //quản lý bình luận
    'list-comment'=>(new CommentController())->list(),
    'view-detail' =>(new CommentController())->viewDetail(),
    'delete-comment'=>(new CommentController())->delete(),
}
    ?>