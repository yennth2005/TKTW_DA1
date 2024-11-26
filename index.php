<?php
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ
require_once './models/Product.php';
require_once './models/Home.php';
require_once './models/Category.php';
require_once './models/track-orderModel.php';
// Require toàn bộ file Models: phải connect db trước

// Require toàn bộ file Controllers
require_once "./controllers/calculatorController.php";
require_once "./controllers/HomeController.php";
require_once "./controllers/ProductController.php";
require_once "./controllers/CategoryController.php";
require_once "./controllers/track-orderController.php";
//Xây dựng Route
$act = $_GET['act'] ?? "/"; //nếu không có act thì nó trả về cái / có nghĩa là trống

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match
//nếu act không tồn tại thì trả về / và nó trả về object nó tên HomeController
// $homeController= new HomeController();

match ($act) {
    // Trang chủ
    '/' => (new ProductController())->showList(),
    'shop' => (new ProductController())->timkiem(),
    // 'shop' => (new ProductController())->listProducts(),
    // 'shop' => (new CategoryController())->showListCategories(),
    // 'shop' => (new ProductController())->showProductsByCategory($categoryId),


    //tài khoản
    'register' => (new HomeController())->register(),
    'post-info-register' => (new HomeController())->postInfo(),
    'login' => (new HomeController())->login(),
    'check-login' => (new HomeController())->postLogin(),
    'logout' => (new HomeController())->logout(),
    //danh mục
// 'category' => (new CategoryController())->showList(), 

    //đơn hàng
    'theo-doi-don-hang' => (new Track_orderController())->showListOrder(),
    'huy-don' => (new Track_orderController())->cancelOrder($_GET['order_id'] ?? null),
    'chi-tiet-don-hang' => (new Track_orderController())->showOrderDetail($_GET['order_id'] ?? null),


};