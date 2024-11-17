<?php 
class Order{
    public $conn;
    public function __construct(){
        $this->conn = connect_db();
    }
    public function showAll(){
        $sql = "SELECT * FROM orders o join states s 
            on o.state_id = s.state_id";
        $stmt= $this->conn->query($sql);
        $data= $stmt->fetchAll();
        return $data;
    }
    public function allState(){
        $sql = "SELECT * FROM states";
        $stmt= $this->conn->query($sql);
        $data= $stmt->fetchAll();
        return $data;
    }
    public function find($order_id){
        $sql = "SELECT * FROM orders o join states s 
            on o.state_id = s.state_id WHERE o.order_id = $order_id" ;
        $stmt= $this->conn->query($sql);
        $data= $stmt->fetch();
        return $data;
    }
    public function showDetailOrder($order_id){
        $sql = "SELECT * FROM order_detail od JOIN products p ON od.product_id = p.product_id
        where od.order_id = $order_id" ;
        $stmt = $this->conn->query($sql);
        $data= $stmt->fetchAll();
        return $data;
    }
    public function updateOrder($order_id, $state_id) {
        $sql = "UPDATE orders SET state_id = ? WHERE order_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$state_id, $order_id]);
    }
    
    public function __destruct(){
        $this->conn= null;
    }
}
?>