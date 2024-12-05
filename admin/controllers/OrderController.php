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
    // public function updateOrder(){
    //     date_default_timezone_set('Asia/Ho_Chi_Minh');
    //     $id = $_GET['id'];
    //     $state = $_POST['state'];
    //     $description = $_POST['description'];
    //     $create_at = date("Y-m-d H:i:s");
    //     $order_id =$this->orderModel->updateOrder($id,$state,$create_at);
    //     $this->orderModel->addStateInHistory($order_id,$state,$description,$create_at);
    //     $_SESSION['success'] = "Trạng thái đã được cập nhật";
    //     header("Location: ?act=list-order");
    // }
    public function updateOrder() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $id = $_GET['id'];
        $state = $_POST['state'];
        $description = $_POST['description'];
        $create_at = date("Y-m-d H:i:s");
    
        // Mảng xác định thứ tự trạng thái
        // $statesOrder = [1 => 'Đang xử lý', 2 => 'Đã xác nhận', 3 => 'Đang giao hàng', 4 => 'Giao hàng thành công', 5 => 'Đơn hàng đã bị hủy'];
        
        // Lấy trạng thái hiện tại của đơn hàng
        $currentOrder = $this->orderModel->find($id);
        $currentState = $currentOrder['state_id'];
    
        // Kiểm tra trạng thái mới có hợp lệ hay không
        switch ($state) {
            case 1: // Đang xử lý
                if ($currentState == 1) {
                    // Không thay đổi trạng thái
                    $_SESSION['error'] = "Trạng thái này đã được áp dụng.";
                    header("Location: ?act=list-order");
                    return;
                }
                break;
            case 2: // Đã xác nhận
                if ($currentState != 1) {
                    $_SESSION['error'] = "Bạn phải cập nhật từ trạng thái 'Đang xử lý' trước.";
                    header("Location: ?act=list-order");
                    return;
                }
                break;
            case 3: // Đang giao hàng
                if ($currentState != 2) {
                    $_SESSION['error'] = "Bạn phải cập nhật từ trạng thái 'Đã xác nhận' trước.";
                    header("Location: ?act=list-order");
                    return;
                }
                break;
            case 4: // Giao hàng thành công
                if ($currentState != 3) {
                    $_SESSION['error'] = "Bạn phải cập nhật từ trạng thái 'Đang giao hàng' trước.";
                    header("Location: ?act=list-order");
                    return;
                }
                break;
            case 5: // Đơn hàng đã bị hủy
                if ($currentState != 1 && $currentState != 2) {
                    $_SESSION['error'] = "Bạn không thể hủy đơn hàng ở trạng thái này.";
                    header("Location: ?act=list-order");
                    return;
                }
                break;
            default:
                $_SESSION['error'] = "Trạng thái không hợp lệ.";
                header("Location: ?act=list-order");
                return;
        }
    
        // Cập nhật trạng thái nếu tất cả kiểm tra đều hợp lệ
        $order_id = $this->orderModel->updateOrder($id, $state, $create_at);
        $this->orderModel->addStateInHistory($order_id, $state, $description, $create_at);
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