<?php 
class User{
    public $conn;

    public function __construct(){
        $this->conn=connect_db();
    }
    //Lays toanf bộ ở bảng user
    public function all(){

            $sql="SELECT * FROM `user`";
            $stmt=$this->conn->query($sql);
            $data=$stmt->fetchAll();
        return $data;
    }
    public function insert($fullnameAdd,$usernameAdd,$passwordAdd,$avatarAdd,$roleAdd){
        $sql= "INSERT INTO `user` (`fullname`,`username`, `password`,`avatar`, `role`) VALUES ('{$fullnameAdd}','{$usernameAdd}', '{$passwordAdd}','{$avatarAdd}', '{$roleAdd}')" ;
        $this->conn->exec($sql);  
    }
    public function delete($id){
        try{
            $sql="DELETE FROM `user` WHERE `user`.`user_id`={$id}";
            $this->conn->exec($sql);
        }catch(PDOException $e){
            $e->getMessage();
        }
    }
    public function find($id){
        $sql="SELECT * FROM user WHERE `user`.`user_id`={$id}";
        $stmt=$this->conn->query($sql);
        $data=$stmt->fetch();
        return $data;
    }
    public function update($id,$fullnameEdit,$usernameEdit,$passwordEdit,$avatar,$roleEdit){
        try{
            $sql="UPDATE `user` SET `fullname`='$fullnameEdit' ,`username`= '$usernameEdit', `password`= '$passwordEdit',`avatar`='$avatar', `role`='$roleEdit' WHERE `user`.`user_id`={$id}";
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