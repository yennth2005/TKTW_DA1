<?php 

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ
require_once './models/Product.php';
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
// $homeController= new HomeController();

match ($act) {
    // Trang chủ
    '/' => (new ProductController())->showList(),
    'category-pro'=>(new ProductController())->category(),
    'desc-pro' => (new ProductController())->desc(),
    // 'search-pro'=> (new ProductController())->search(),
    // 'calculator'=>(new CalculatorController())->process(),
    // '/' =>$homeController->home(),
};