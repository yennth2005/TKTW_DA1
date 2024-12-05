<?php
class Order
{
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }
    public function showAll()
    {
        $sql = "SELECT * FROM orders o join states s 
            on o.state_id = s.state_id";
        $stmt = $this->conn->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
    public function allState()
    {
        $sql = "SELECT * FROM states";
        $stmt = $this->conn->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
    public function find($order_id)
    {
        $sql = "SELECT * FROM orders o join states s 
            on o.state_id = s.state_id WHERE o.order_id = $order_id";
        $stmt = $this->conn->query($sql);
        $data = $stmt->fetch();
        return $data;
    }
    public function showDetailOrder($order_id)
    {
        $sql = "SELECT 
                    od.*,
                    v.image,
                    v.price,
                    p.product_id,
                    p.product_name
                     FROM order_detail od 
                    JOIN size_variants sv ON od.size_id = sv.size_id
                    JOIN variants v ON sv.variant_id = v.variant_id
                    JOIN products p ON v.product_id = p.product_id
                    WHERE od.order_id = $order_id";
        $stmt = $this->conn->query($sql);
        // $stmt->execute([$order_id]);
        return $stmt->fetchAll();
    }
    public function addStateInHistory($order_id, $state_id, $description, $create_at)
    {
        $sql = "INSERT INTO order_history_state SET `order_id`=?, `state_id`=?,`description`=?, `create_at`=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$order_id, $state_id, $description, $create_at]);
    }
    public function updateOrder($order_id, $state_id, $update_at)
    {
        $sql = "UPDATE orders SET state_id = ?,update_at =? WHERE order_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$state_id, $update_at, $order_id]);
        return $order_id;
    }


    public function __destruct()
    {
        $this->conn = null;
    }
}
?>