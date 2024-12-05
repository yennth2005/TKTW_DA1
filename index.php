<?php 
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ
require_once './models/Product.php';
require_once './models/Home.php';
// Require toàn bộ file Models: phải connect db trước

// Require toàn bộ file Controllers
require_once "./controllers/calculatorController.php";
require_once "./controllers/HomeController.php";
require_once "./controllers/ProductController.php";
require_once "./controllers/CategoryController.php";

//Xây dựng Route
$act = $_GET['act'] ?? '/'; //nếu không có act thì nó trả về cái / có nghĩa là trống

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match
//nếu act không tồn tại thì trả về / và nó trả về object nó tên HomeController
$homeController= new HomeController();

match ($act) {
    // Trang chủ
    '/' => $homeController->home(),
    'search'=>$homeController->search(),
    'filter'=>$homeController->filter(),
    'add-comment'=>$homeController->addComments(),
    //tài khoản
    'register' => $homeController->register(),
    'post-info-register' =>$homeController->postInfo(),
    'login'=>$homeController->login(),
    'check-login'=>$homeController->postLogin(),
    'logout'=>$homeController->logout(),
    'view-products'=>$homeController->viewAllProducts(),
    'view-detail'=> $homeController ->viewDetailProduct(),
    'view-category'=> $homeController ->viewProductByCategogy(),
    'add-to-cart'=>$homeController ->addToCart(),
    'view-cart'=>$homeController ->showCart(),
    'deleteProductFromCart'=>$homeController->deleteProductFromCartById(),
    'order'=>$homeController->order(),
    'checkout' =>$homeController->checkout(),
    // 'getSizesByVariant' =>  $homeController->getSizesByVariant(),
    'view-order'=>$homeController->viewOrderByCustomer(),
    'view-detail-order'=>$homeController->viewDetailOrder(),
    'cancel-order' =>$homeController->cancelOrder(),
    // 'update-cart'=>$homeController->updateCart(),
    'cam-on'=>$homeController->camOn(),
    'get-size-by-color'=>$homeController->getSizesByVariant(),
    // 'detail-product'=>$homeController->viewDetailProduct(),

    //account
    'personal-detail'=>$homeController->showPersonalDetail(),
    'change-password'=>$homeController->changePassword(),
    'post-changed'=>$homeController->doneChanged(),

};