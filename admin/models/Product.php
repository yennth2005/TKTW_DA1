<?php 
class ProductAdmin{
    public $cnt;
    public function __construct(){
        $this->cnt=connect_db();
    }
    public function showCate(){
        $sql1="SELECT * FROM `categories`";
        $stmt1=$this->cnt->query($sql1);
        $data1=$stmt1->fetchAll();
        return $data1;
    }
    public function show(){
        $sql="SELECT * FROM `products`";
        $stmt=$this->cnt->query($sql);
        $data=$stmt->fetchAll();
        return $data;
    }
    public function add($proName,$avatar,$proPrice,$amount,$idCate,$nameCate,$description){
        $sql="INSERT INTO `products` ( `product_name`, `product_img`, `product_price`,`amount`, `cate_id`, `name_cate`,`description`) VALUES ('$proName', '$avatar', '$proPrice','$amount', '$idCate', '$nameCate', '$description')";
        $this->cnt->exec($sql);
    }
    public function find($id){
        $sql="SELECT * FROM `products` WHERE `products`.`product_id`={$id}";
        $stmt=$this->cnt->query($sql);
        $data=$stmt->fetch();
        return $data;
    }
    public function edit($id,$proName,$avatar,$proPrice,$amount,$idCate,$nameCate,$description){
        $sql="UPDATE `products` SET `product_name` = '$proName', `product_img` = '$avatar', `product_price` = '$proPrice',`amount`='$amount' ,`cate_id` = '$idCate', `name_cate` = '$nameCate',`description`='$description' WHERE `products`.`product_id` = {$id}";
        $this->cnt->exec($sql);
    }
    public function delete($id){
        $sql="DELETE FROM `products` WHERE `products`.`product_id`={$id}";
        $this->cnt->exec($sql);
    }
}
?>