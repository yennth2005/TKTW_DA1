<?php 
class Customer{
    public $conn;

    public function __construct(){
        $this->conn=connect_db();
    }
    //Lays toanf bộ ở bảng customer
    public function all(){

            $sql="SELECT * FROM `customer`";
            $stmt= $this->conn->query($sql);
            $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;

        //     $stmt=$this->conn->query($sql);
        //     $data=$stmt->fetchAll();
        // return $data;
    }
    public function insert($name,$email,$password,$image,$address,$phone,$role){
        $sql= "INSERT INTO `customer` (`name`,`email`, `password`,`image`,`address`,`phone`, `role`) VALUES ('{$name}','{$email}', '{$password}','{$image}', '{$address}', '{$phone}', '{$role}')" ;
        $this->conn->exec($sql);  
    }
    public function delete($id){
        try{
            $sql="DELETE FROM `customer` WHERE `customer`.`customer_id`={$id}";
            $this->conn->exec($sql);
        }catch(PDOException $e){
            $e->getMessage();
        }
    }
    public function find($id){
        $sql="SELECT * FROM customer WHERE `customer`.`customer_id`={$id}";
        $stmt=$this->conn->query($sql);
        $data=$stmt->fetch();
        return $data;
    }
    public function update($id,$fullnameEdit,$customernameEdit,$passwordEdit,$avatar,$roleEdit){
        try{
            $sql="UPDATE `customer` SET `fullname`='$fullnameEdit' ,`customername`= '$customernameEdit', `password`= '$passwordEdit',`avatar`='$avatar', `role`='$roleEdit' WHERE `customer`.`customer_id`={$id}";
            $this->conn->exec($sql);
        }catch(PDOException $e){
            $e->getMessage();
        }
    }
    public function __destruct(){
        $this->conn=null;
    }

}
?>