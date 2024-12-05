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
    'statistic' => $statistic->showStatistic(),
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
    'list-pro' => (new ProductControllerAdmin())->listProduct(),
    'create-pro' => (new ProductControllerAdmin())->add(),
    'post-create-pro' => (new ProductControllerAdmin())->addProduct(),
    'update-pro' => (new ProductControllerAdmin())->edit(),
    'post-update-pro' => (new ProductControllerAdmin())->editProduct(),
    'delete-pro' => (new ProductControllerAdmin())->delete(),
    'addProduct' => $product->listProduct(),
    'view-detail-pro' => $product->viewDetailVariantByProduct(),
    'add-variants' => $product->variants(),
    'post-add-variant' => $product->addVariant(),
    'add-size' => $product->saveSize(),
    'delete-variant' => $product->deleteVariant(),

    //Quản lí danh mục
    'list-category' => $category->showAllCategory(),
    'delete-category' => $category->delete(),
    'add-category' => $category->addCategory(),
    'post-category' => $category->postCategory(),
    'update-category' => $category->updateCategory(),
    'post-update-category' => $category->postUpdateCategory(),

    //quản lý đơn hàng
    'list-order' => (new OrderController())->showAllOrder(),
    'update-order' => (new OrderController())->showDetailOrder(),
    'update-state' => (new OrderController())->updateOrder(),

    //trạng thái đơn hàng
    'list-state' => (new StateController())->list(),
    'delete-state' => (new StateController())->delete(),
    'create-state' => (new StateController())->create(),
    'post-create-state' => (new StateController())->postCreate(),
    'edit-state' => (new StateController())->update(),
    'post-update-state' => (new StateController())->postUpdate(),

    //quản lý bình luận
    'list-comment' => (new CommentController())->list(),
    'view-detail' => (new CommentController())->viewDetail(),
    'delete-comment' => (new CommentController())->delete(),
}
    ?>