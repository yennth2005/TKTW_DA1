<?php
class Track_orderController
{
    public $orderModel;

    public function __construct()
    {
        $this->orderModel = new Order();
    }

    public function showListOrder()
    {
        if (isset($_SESSION['user']) && isset($_SESSION['user']['customer_id'])) {
            $customerId = $_SESSION['user']['customer_id'];
            $orders = $this->orderModel->getOrders($customerId);
            require_once './views/trangchinh/theo-doi-don-hang.php';
        } else {
            require_once './views/taikhoan/dang-nhap-form.php';
        }
    }

    //hủy đơn 
    public function cancelOrder($orderId)
    {
        if ($orderId) {
            $success = (new Order())->cancelOrder($orderId);
            if ($success) {
                header("Location: index.php?act=theo-doi-don-hang");
                exit;
            } else {
                echo "Không thể hủy đơn hàng.";
            }
        }
    }
    public function showOrderDetail($orderId)
    {
        if ($orderId) {
            $orderDetails = (new Order())->getOrderDetails($orderId);
            require_once './views/trangchinh/chi-tiet-don-hang.php';
            echo "Đơn hàng không tồn tại!!!.";
        }
    }
}


?>