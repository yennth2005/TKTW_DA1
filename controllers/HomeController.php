<?php

class HomeController
{
    public $homeModel;

    public function __construct()
    {
        $this->homeModel = new Home();
    }

    public function home()
    {

        require_once './views/home.php';
    }
    public function register()
    {
        require_once './views/taikhoan/dang-ky-form.php';
    }
    public function postInfo()
    {
        if (isset($_POST['btn-register'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['matkhau'];
            $verify_password = $_POST['matkhau1'];
            $role = 0;
            $this->homeModel->insertCustomer($name, $email, $password, $role);
            echo "";
            require_once './views/taikhoan/dang-nhap-form.php';

        }
    }
    public function login()
    {
        require_once './views/taikhoan/dang-nhap-form.php';
    }
    public function postLogin()
    {
        $data = $this->homeModel->checklogin();
        if ($data) {
            $_SESSION['user'] = $data;
            $_SESSION['success_message'] = "Đăng nhập thành công! Chào mừng " . $data['name'];
            header("Location: " . BASE_URL . "?act=/");
            exit;
        } else {
            $_SESSION['error_message'] = "Sai email hoặc mật khẩu. Vui lòng thử lại!";
            header("Location: " . BASE_URL . "?act=login");
            exit;
        }
    }
    public function logout()
    {
        session_unset();
        header("Location: " . BASE_URL . "?act=login");
        exit;
    }
}