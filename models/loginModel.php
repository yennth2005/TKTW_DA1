<?php 
class LoginModel {
    public $cnt;

    public function __construct() {
        try {
            $this->cnt = connect_db(); // Kết nối cơ sở dữ liệu
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // Kiểm tra thông tin đăng nhập
    public function checkLogin($email, $password) {
        try {
            $sql = "SELECT * FROM `users` WHERE `email` = :email";
            $stmt = $this->cnt->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                return $user; // Trả về thông tin người dùng nếu mật khẩu đúng
            }

            return false; // Đăng nhập thất bại
        } catch (PDOException $e) {
            error_log("Error checking login: " . $e->getMessage());
            return false;
        }
    }
}
?>