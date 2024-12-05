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
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $id = $_GET['id'];
        $state = $_POST['state'];
        $description = $_POST['description'];
        $create_at = date("Y-m-d H:i:s");
        $order_id =$this->orderModel->updateOrder($id,$state,$create_at);
        $this->orderModel->addStateInHistory($order_id,$state,$description,$create_at);
        $_SESSION['success'] = "Trạng thái đã được cập nhật";
        header("Location: ?act=list-order");
    }
    public function deleteOrder(){
        $order_id = $_GET['id'];
        $this->orderModel->deleteOrderHistory($order_id);
        $this->orderModel->deleteOrderItem($order_id);
        $this->orderModel->deleteOrder($order_id);
        $_SESSION['success'] = "Xoá thành công";
        header("Location: " .$_SERVER['HTTP_REFERER']);
    }
}
?>