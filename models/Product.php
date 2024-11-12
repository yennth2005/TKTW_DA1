<?php 
class Product{
    public $connect;
    public function __construct(){
        $this->connect=connect_db();
    }
    public function showCate(){
        $sql="SELECT * FROM `categories`";
        $stmt=$this->connect->query($sql);
        $data=$stmt->fetchAll();
        return $data;
    }
    public function show(){
        $sql="SELECT * FROM `products`";
        $stmt=$this->connect->query($sql);
        $data=$stmt->fetchAll();
        return $data;
    }
    public function showCateHome($id){
        $sql="SELECT * FROM `categories` WHERE `categories`.`cate_id`={$id}";
        $stmt=$this->connect->query($sql);
        $data=$stmt->fetch();
        return $data;
    }
    public function findDesc($id){
        $sql = "SELECT * FROM `products` WHERE `products`.`product_id` = {$id}";
        $stmt = $this->connect->query($sql);
        $data = $stmt->fetch();
        return $data;
    }
    
}
?>