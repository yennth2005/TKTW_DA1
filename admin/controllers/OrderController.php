<?php 
class OrderController{
    public $orderModel;
    public function __construct(){
        $this->orderModel= new Order();
    }
    public function showAllOrder(){
        $orders= $this->orderModel->showAll();
        require_once './views/Orders/list.php';
    }
    public function showDetailOrder(){
        $order_id = $_GET['id'];
        $orderDetail = $this->orderModel->showDetailOrder($order_id);
        $order = $this->orderModel->find($order_id);
        $states= $this->orderModel->allState();
        require_once './views/Orders/viewDetail.php';
    }
    public function updateOrder(){
        $id = $_GET['id'];
        $state = $_POST['state'];
        
        $this->orderModel->updateOrder($id,$state);
        header("Location: ?act=list-order");
    }
}
?>