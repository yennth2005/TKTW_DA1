<?php 
class Home{
    public $conn;
    public function __construct(){
        $this->conn = connect_db();
    }
    public function insertCustomer($name,$email,$password,$role){
        $sql = "INSERT INTO customer (`name` , `email`, `password`,`role`) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name,$email,$password,$role]);
    }
    public function checklogin(){
        $email= $_POST['email'];
        $password = $_POST['password'];
        $sql="SELECT * FROM customer WHERE `email`=? and `password`=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$email,$password]);
        return $stmt->fetch();
    }
    public function __destruct(){
        $this->conn= null;
    }
}
?>