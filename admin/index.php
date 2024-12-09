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
$customer = new CustomerController();
$product = new ProductControllerAdmin();
$category = new CategoryController();
$order = new OrderController();
$comment = new CommentController();
$state = new StateController();
$statistic = new StatisticsController();

$act = $_GET['act'] ?? '/';
//$_GET['action'] : 'index';
match ($act) {
    'home' => (new DashboardController())->dashboard(),
    //thống kê
    'statistic' =>$statistic->showStatistic(),
    //Quản lí user
    'list-user' => $customer->list(),
    'delete-user' => $customer->delete(),
    'create-user' => $customer->create(),
    'post-create-user' => $customer->postCreate(),
    'update-user' => $customer->update(),
    'post-update-user' => $customer->postUpdate(),
    // 'search-user'=>$customer->searchUser(),
    // 'find-user'=>$customer->findUser(),
    // 'post-find'=>$customer->postFind(),

    //quản lý sản phẩm
    'list-pro'=>$product->listProduct(),
    'create-pro'=>$product->add(),
    'post-create-pro'=>$product->addProduct(),
    'update-pro'=>$product->edit(),
    'post-update-pro'=>$product->editProduct(),
    'delete-pro'=>$product->delete(),
    'addProduct' => $product->listProduct(),
    'view-detail-pro'=>$product->viewDetailVariantByProduct(),
    'add-variants'=> $product -> variants(),
    'post-add-variant'=>$product->addVariant(),
    'add-size'=>$product->saveSize(),
    'delete-variant'=>$product->deleteVariant(),
    'update-color'=>$product->updateVariant(),
    'update-size'=>$product->updateSize(),
    // 'delete-size'=>$product->deleteSize(),

    //Quản lí danh mục
    'list-category' => $category->showAllCategory(),
    'delete-category' => $category->delete(),
    'add-category' => $category->addCategory(),
    'post-category' => $category->postCategory(),
    'update-category' => $category->updateCategory(),
    'post-update-category' => $category->postUpdateCategory(),

    //quản lý đơn hàng
    'list-order'=>$order->showAllOrder(),
    'update-order'=>$order->showDetailOrder(),
    'update-state'=>$order->updateOrder(),
    'delete-order'=>$order->deleteOrder(),
    //trạng thái đơn hàng
    'list-state'=>$state->list(),
    'delete-state' =>$state->delete(),
    'create-state' =>$state->create(),
    'post-create-state' =>$state->postCreate(),
    'edit-state' =>$state->update(),
    'post-update-state' =>$state->postUpdate(),

    //quản lý bình luận
    'list-comment'=>$comment->list(),
    'view-detail' =>$comment->viewDetail(),
    'delete-comment'=>$comment->delete(),
}
    ?>