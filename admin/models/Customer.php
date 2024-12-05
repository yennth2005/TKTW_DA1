<?php 
class Customer{
    public $conn;

    public function __construct(){
        $this->conn=connect_db();
    }
    //Lays toanf bộ ở bảng customer
    public function all(){

            $sql="SELECT * FROM `customer`";
            $stmt=$this->conn->query($sql);
            $data=$stmt->fetchAll();
        return $data;
    }
    public function insert($name,$email,$password,$image,$address,$phone,$role,$create_at){
        $sql= "INSERT INTO `customer` (`name`,`email`, `password`,`image`,`address`,`phone`, `role`,`create_at`) VALUES ('{$name}','{$email}', '{$password}','{$image}', '{$address}', '{$phone}', '{$role}','{$create_at}') " ;
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
    public function deleteComments($id){
        try{
            $sql="DELETE FROM `comments` WHERE `comments`.`customer_id`={$id}";
            $this->conn->exec($sql);
        }catch(PDOException $e){
            $e->getMessage();
        }
    }
    public function find($id){
        try {
            $sql="SELECT * FROM `customer` WHERE `customer`.`customer_id`={$id}";
            $stmt=$this->conn->query($sql);
            $data= $stmt->fetch();
            return $data;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function edit($id,$name,$email,$password,$image,$address,$phone,$role,$create_at){
        try {
            $sql="UPDATE `customer` SET `name` = '{$name}', `email` = '{$email}', `password` = '{$password}', `image` = '{$image}', `address` = '{$address}',`phone`= '{$phone}', `role` = '{$role}' , `create_at` = '{$create_at}' WHERE `customer`.`customer_id` = '{$id}'";
            $this->conn->exec($sql);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function __destruct(){
        $this->conn=null;
    }

}
?>