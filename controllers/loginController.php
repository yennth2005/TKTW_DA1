<?php 
class LoginController {
    public $loginModel;

    public function __construct() {
        require_once './models/LoginModel.php';
        $this->loginModel = new LoginModel();
    }

    // Hiển thị form đăng nhập
    public function login() {
        require_once './views/login/login.php';
    }

    // Xử lý thông tin đăng nhập
    public function handleLogin() {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $password = trim($_POST['password'] ?? '');

            if (empty($email) || empty($password)) {
                $_SESSION['error'] = "Vui lòng nhập đầy đủ thông tin.";
                header("Location: ?act=login");
                exit;
            }

            $user = $this->loginModel->checkLogin($email, $password);

            if ($user) {
                // Đăng nhập thành công
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                header("Location: ?act=dashboard");
            } else {
                // Thông tin đăng nhập không hợp lệ
                $_SESSION['error'] = "Email hoặc mật khẩu không đúng.";
                header("Location: ?act=login");
            }
            exit;
        }
    }

    // Xử lý đăng xuất
    public function logout() {
        session_start();
        session_destroy();
        header("Location: ?act=login");
        exit;
    }
}
?>