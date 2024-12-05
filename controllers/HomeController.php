<?php
class HomeController
{
    public $homeModel;
    public $BlogModel;

    public function __construct()
    {
        $this->homeModel = new Home();
        $this->BlogModel = new BlogModel();

    }
    //////////products and categories///////////////////
    public function home()
    {
        $products = $this->homeModel->listPro();
        $cates = $this->homeModel->getAllCate();
        $catePro = $this->homeModel->cateProduct();
        $posts = $this->BlogModel->getAllBlog();
        // var_dump($products);
        require_once './views/home.php';
    }
    public function viewAllProducts()
    {
        $products = $this->homeModel->getAllProducts();
        $cates = $this->homeModel->getAllCate();
        $catePro = $this->homeModel->cateProduct();
        // echo "<pre>";
        // print_r($products);
        // echo "</pre>";
        require_once 'views/trangchinh/san-pham.php';
    }
    public function search()
    {
        $search = $_POST['search'];
        $products = $this->homeModel->searchProCateKey($search);
        $cates = $this->homeModel->getAllCate();
        $catePro = $this->homeModel->cateProduct();
        require_once 'views/trangchinh/san-pham.php';
    }
    public function filter()
    {
        $catePro = $this->homeModel->cateProduct();
        $cates = $this->homeModel->getAllCate();
        $categories = isset($_POST['categories']) ? $_POST['categories'] : [];
        // Get minimum and maximum price values from the POST request
        $min_price = isset($_POST['min_price']) ? (float) $_POST['min_price'] : 0;
        $max_price = isset($_POST['max_price']) ? (float) $_POST['max_price'] : PHP_INT_MAX;

        // Lấy danh sách sản phẩm lọc
        $products = $this->homeModel->filterProducts($categories, $min_price, $max_price);

        // Lưu kết quả vào session
        $_SESSION['filtered_products'] = $products;

        // Hiển thị trang hiện tại
        require_once 'views/trangchinh/san-pham.php';
    }
    public function addComments()
    {
        $customer_id = $_SESSION['user']['customer_id'];
        $product_id = $_POST['product_id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $create_at = date("Y-m-d H:i:s");
        // var_dump($product_id);
        $this->homeModel->insertComment($title, $content, $customer_id, $product_id, $create_at);
        $_SESSION['success'] = "Gửi bình luận thành công";
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }


    //view category
    public function viewProductByCategogy()
    {
        $cate_id = $_GET['category-id'];
        $cates = $this->homeModel->getAllCate();
        $products = $this->homeModel->getProductByCategory($cate_id);
        $catePro = $this->homeModel->cateProduct();
        require_once 'views/trangchinh/trang-danh-muc.php';
    }


    public function viewDetailProduct()
    {
        $products = $this->homeModel->listPro();
        $variant_id = $_GET['color'];
        if (isset($_GET['size'])) {
            $size_id = $_GET['size'];
        }
        $cates = $this->homeModel->getAllCate();
        $productDetail = $this->homeModel->getProductWithVariant($variant_id);
        $product_id = $productDetail['product_id'];
        $allVariants = $this->homeModel->getAllVariantByProduct($product_id);
        $allSizes = $this->homeModel->getAllSizeByProductAndVariant($variant_id);

        $comments = $this->homeModel->showComments($product_id);
        $this->homeModel->increaseView($product_id);
        // echo "<pre>";
        // print_r($allVariants);
        // echo "</pre>";
        // var_dump($comments);
        // echo json_encode($productDetail);
        // echo json_encode($allVariants);
        $exchangeColor = [
            'Đỏ' => '#dc3545',
            'Hồng' => 'pink',
            'Xanh dương' => '#0dcaf0',
            'Cam' => '#fd7e14',
            'Xanh than' => 'navy',
            'Be' => '#fcffb2',
            'Tím' => 'violet',
            'Xanh nhạt' => '#0dcaf0',
            'Nâu' => 'brown',
        ];
        require_once './views/trangchinh/trang-chi-tiet.php';
    }
    public function getSizesByVariant()
    {
        $variant_id = $_GET['variant_id'] ?? null;
        if (!$variant_id) {
            // echo json_encode([]);
            return;
        }

        $allSizes = $this->homeModel->getAllSizeByProductAndVariant($variant_id);
        echo json_encode($allSizes);
    }
    public function getProductDetail()
    {
        $variant_id = $_GET['color'];
        $size_id = $_GET['size'];
        $product_id = $_GET['product'];
        $data = $this->homeModel->getDetailProduct($product_id, $variant_id, $size_id);
    }
    public function fetchVariantDetails()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $variant_id = $_POST['variant_id'];

            // Lấy dữ liệu kích thước và giá dựa trên màu được chọn
            $sizes = $this->homeModel->getAllSizeByProductAndVariant($variant_id);
            $variant = $this->homeModel->getVariantDetails($variant_id); // Lấy chi tiết variant

            if ($sizes && $variant) {
                echo json_encode([
                    'status' => 'success',
                    'sizes' => $sizes,
                    'price' => $variant['price']
                ]);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'error' => 'Không tìm thấy dữ liệu'
                ]);
            }
        } else {
            echo json_encode([
                'status' => 'error',
                'error' => 'Yêu cầu không hợp lệ'
            ]);
        }
    }


    /////////////acount///////////////////
    public function register()
    {
        $cates = $this->homeModel->getAllCate();
        require_once './views/taikhoan/dang-ky-form.php';
    }
    public function postInfo()
    {
        if (isset($_POST['btn-register'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['matkhau'];
            $verify_password = $_POST['matkhau1'];
            $role = 0;
            $this->homeModel->insertCustomer($name, $email, $password, $role);
            $_SESSION['success'] = "Đăng ký thành công";
            $cates = $this->homeModel->getAllCate();
            require_once './views/taikhoan/dang-nhap-form.php';

        }
    }
    public function login()
    {
        $cates = $this->homeModel->getAllCate();

        require_once './views/taikhoan/dang-nhap-form.php';
    }
    public function postLogin()
    {

        $data = $this->homeModel->checklogin();

        if ($data) {
            $_SESSION['user'] = $data;
            $_SESSION['success'] = "Đăng nhập thành công! Chào mừng " . $data['name'];
            header("Location: ?act=/");
            exit;
        }

        $error_email = "";
        $error_password = "";

        if (!isset($_POST['email']) || empty($_POST['email'])) {
            $error_email = "Email không được để trống";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error_email = "Email không hợp lệ";
        }


        if (!isset($_POST['password']) || empty($_POST['password'])) {
            $error_password = "Mật khẩu không được để trống";
        } else {
            $_SESSION['error'] = "Sai email hoặc mật khẩu. Vui lòng thử lại!";
            header("Location: index.php?act=login");
            exit;
        }
    }
    public function logout()
    {
        session_unset();
        header("Location: " . BASE_URL . "?act=login");
        exit;
    }
    ///thông tin cá nhân và cập nhật thông tin
    public function showPersonalDetail()
    {
        $customer = $this->homeModel->find($_SESSION['user']['customer_id']);
        // var_dump($customer);
        if (isset($_POST['btn_update'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];

            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $image = $customer['image'];

            if (isset($_FILES['image'])) {
                if ($_FILES['name']['error'] == UPLOAD_ERR_OK) {
                    $uploadDir = __DIR__ . '/../../uploads/Customer/';
                    $fileName = basename($_FILES['image']['name']);
                    $uploadFile = $uploadDir . $fileName;
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                        // echo "<h1>Uploaded</h1>";
                        $relativePath = "uploads/Customer/" . $fileName;
                        $image = $relativePath;
                        // echo "<p>Image URL: <a href='$images'>$images</a></p>";
                    } else {
                        echo "<h1>Error uploading file</h1>";
                    }
                }
            } else {
                $image = $customer['image'];
            }


            $this->homeModel->edit($_SESSION['user']['customer_id'], $name, $email, $image, $address, $phone);
            // header("Location: " .$_SERVER['HTTP_REFERER']);
        }
        require_once 'views/taikhoan/thong-tin-ca-nhan.php';
    }

    //CART

    public function addToCart()
    {
        $cates = $this->homeModel->getAllCate();
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        if (isset($_SESSION['user'])) {
            $customerId = $_SESSION['user']['customer_id'];
            $createdAt = date('Y-m-d H:i:s');
            if (isset($_POST['btn_submit'])) {
                if (!isset($_POST['variant_id'])) {
                    $_SESSION['error'] = "Bạn chưa chọn màu";
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                    exit;
                }
                if (empty($_POST['size_id'])) {
                    $_SESSION['error'] = "Bạn chưa chọn kích thước";
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                    exit;
                }
                if (isset($_POST['quantity'], $_POST['price'], $_POST['variant_id'], $_POST['size_id'])) {
                    $variantId = $_POST['variant_id'];
                    $sizeId = $_POST['size_id'];
                    $quantity = $_POST['quantity'];
                    $price = $_POST['price'];
                } else {
                    $_SESSION['error'] = "Dữ liệu không hợp lệ.";
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                    exit;
                }
                // var_dump($variantId);
                // var_dump($sizeId);
            }

            // Lấy thông tin giỏ hàng của khách hàng
            $cart = $this->homeModel->selectCartByCustomer($customerId);
            if ($cart) {
                $cartId = $cart['cart_id'];

                // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                $cartItem = $this->homeModel->selectCartItem($cartId, $variantId, $sizeId);
                if ($cartItem) {
                    // Nếu có, cập nhật số lượng
                    $newQuantity = $cartItem['quantity'] + $quantity;
                    $updateResult = $this->homeModel->updateCartItemQuantity($cartItem['cart_item_id'], $newQuantity);
                    if (!$updateResult) {
                        $_SESSION['error'] = "Lỗi: Không thể cập nhật số lượng sản phẩm.";
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                        exit;
                    }
                } else {
                    // Nếu chưa có, thêm mới sản phẩm
                    $result = $this->homeModel->insertCartItemByCartId($cartId, $variantId, $sizeId, $quantity, $price);
                    if (empty($result)) {
                        $_SESSION['success'] = "Thêm vào giỏ hàng thành công.";
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                        exit;
                    }
                }
            } else {
                // Tạo giỏ hàng mới nếu chưa tồn tại
                $insertCartResult = $this->homeModel->insertCart($customerId, $createdAt);
                if ($insertCartResult) {
                    $cart = $this->homeModel->selectCartByCustomer($customerId);
                    if ($cart) {
                        $cartId = $cart['cart_id'];
                        $result = $this->homeModel->insertCartItemByCartId($cartId, $variantId, $sizeId, $quantity, $price);
                        if (!$result) {
                            $_SESSION['error'] = "Lỗi: Không thể thêm sản phẩm vào giỏ hàng.";
                            header('Location: ' . $_SERVER['HTTP_REFERER']);
                            exit;
                        }
                    }
                } else {
                    $_SESSION['error'] = "Lỗi: Không thể tạo giỏ hàng.";
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                    exit;
                }
            }

            $_SESSION['success'] = "Thêm vào giỏ hàng thành công.";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        } else {
            $_SESSION['error'] = "Vui lòng đăng nhập";
            header('Location: ?act=login');
            exit;
        }
    }

    public function showCart()
    {
        $cates = $this->homeModel->getAllCate();

        if (isset($_SESSION['user'])) {
            $customer_id = $_SESSION['user']['customer_id'];
            $cart = $this->homeModel->selectCartByCustomer($customer_id);

            $cart_id = $cart['cart_id'];
            $cartData = $this->homeModel->getItemFromCart($cart_id);
            foreach ($cartData as $cart) {
                $products = $this->homeModel->getProductWithVariant($cart['variant_id']);
            }
            $allVariants = $this->homeModel->getAllVariantByProduct($products['product_id']);
            // var_dump($allVariants);
            // echo "<pre>";
            // print_r($allVariants);  
            // echo "</pre>";
            foreach ($allVariants as $variant) {

                $allSizes = $this->homeModel->getAllSizeByProductAndVariant($variant['variant_id']);
            }
            // var_dump($cartData);
            // echo "<pre>";
            // print_r($products);
            // echo "</pre>";
            // echo "<pre>";
            // print_r($allSizes);
            // echo "</pre>";
            // echo "<pre>";
            // print_r($cart);
            // echo "</pre>";
            require_once 'views/gio-hang/gio-hang.php';
        } else {
            require_once 'views/gio-hang/gio-hang.php';
        }
    }

    public function deleteProductFromCartById()
    {
        $id = $_GET['id'];
        $this->homeModel->deleteProductFromCart($id);
        $_SESSION['success'] = "Xoá thành công";
        header("Location: ?act=view-cart");
    }


    //Đơn mua////////////////////////
    //đăng nhập rồi mới mua được, nếu submit mà tồn tại detail product thì lấy ra mảng sản phẩm được chọn
    //lấy ra được thì gộp nó vào 1 mảng chung rồi foreach nó ra để tính tổng và chuyển đến trang checkout để xử lý
    //trong này sẽ có nút cập nhật sản phẩm nữa, nhấn nút cập nhật thì lấy thông tin từ form và gửi lên///

    public function order()
    {
        $product_id = $_POST['product_id'];
        $cates = $this->homeModel->getAllCate();
        $customerId = $_SESSION['user']['customer_id'];
        $cart = $this->homeModel->selectCartByCustomer($customerId);
        $cart_id = $cart['cart_id'];
        $cartItem = $this->homeModel->getCartItemFromCartId($cart_id);

        $allVariants = $this->homeModel->getAllVariantByProduct($product_id);
        // var_dump($allVariants);
        // echo "<pre>";
        // print_r($allVariants);  
        // echo "</pre>";
        foreach ($allVariants as $variant) {

            $allSizes = $this->homeModel->getAllSizeByProductAndVariant($variant['variant_id']);
        }
        // echo "<pre>";
        // print_r($allSizes);  
        // echo "</pre>";
        if (isset($_POST['submit'])) {
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $variant_id = $_POST['variant'];
            $size_id = $_POST['size'];

            if ($_POST['submit'] === 'Thanh toán') {
                $selectedProducts = $_POST['selected_products'];
                $total = 0;
                $cartItems = [];

                foreach ($selectedProducts as $variant_id) {
                    // Gọi hàm selectItemFromVariantId với từng variant_id
                    $items = $this->homeModel->selectItemFromVariantId($variant_id);

                    // Gộp các items vào mảng cartItems
                    $cartItems = array_merge($cartItems, $items);
                }

                //  tổng giá trị
                foreach ($cartItems as $item) {
                    $total += $item['price'] * $item['quantity'];
                }
                // var_dump($cartItems);
                require_once 'views/gio-hang/mua-hang.php';

            } else {
                $id = $_POST['id'];
                // var_dump($id);
                foreach ($id as $key => $cart_item_id) {
                    $quantityValue = $_POST['quantity'][$key];
                    $priceValue = $_POST['price'][$key];
                    $variantValue = $_POST['variant'][$key];
                    $sizeValue = $_POST['size'][$key];

                    // Cập nhật sản phẩm trong giỏ hàng
                    $this->homeModel->updateProductInCart($variantValue, $sizeValue, $quantityValue, $priceValue, $cart_item_id);
                    $_SESSION['success'] = "Cập nhật thành công";
                    header("Location: ?act=view-cart");
                }


            }
        }

        // Cập nhật thời gian của giỏ hàng sua khi cập nhật thông tin
        $this->homeModel->updateTimeCart(date('Y-m-d'), $cart_id);
    }


    ////////////THANH TOÁN///////////////////////
    //Gồm nhiều thứ: khi thanh toán thì phải thêm info customer vào order, thêm info products vào order_details, thêm trạng thái vào history
    //cập nhật lại số lượng sản phẩm sau khi mua và xoá products đó khỏi giỏ hàng

    public function checkout()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $cates = $this->homeModel->getAllCate();
        $customer_id = $_SESSION['user']['customer_id'];
        $state_id = 1;
        $recipient_name = $_POST['name'];
        $recipient_address = $_POST['address'];
        $recipient_email = $_POST['email'];
        $recipient_phone = $_POST['phone'];
        $total_amount = $_POST['total_amount'];
        $order_date = date("Y-m-d H:i:s");
        $update_at = date("Y-m-d H:i:s");
        $cartItems = $_POST['cartItems'];
        $comments = $_POST['comments'];
        $cartItemIds = $_POST['cart-item-id'];
        //validate
        if (empty($recipient_name)) {
            $name_err = "Vui lòng nhập tên người nhận";
        }
        if (empty($recipient_address)) {
            $address_err = "Vui lòng nhập địa chỉ";
        }
        if (empty($recipient_email)) {
            $email_err = "Vui lòng nhập địa chỉ Email";
        } elseif (!filter_var($recipient_email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Địa chỉ Email không hợp lệ";
        }
        if (empty($recipient_phone)) {
            $phone_err = "Vui lòng nhập số điện thoại";
        } elseif (!preg_match('/^(0[2-9]|01[2|6|8|9])+([0-9]{8})$/', $recipient_phone)) {
            $phone_err = "Số điện thoại sai định dạng";
        }

        if (isset($_POST['submit']) && empty($name_err) && empty($address_err) && empty($email_err) && empty($phone_err)) {
            // Chèn đơn hàng và lấy order_id
            $order_id = $this->homeModel->insertOrder($customer_id, $recipient_name, $recipient_email, $recipient_phone, $recipient_address, $order_date, $total_amount, $comments, $update_at, $state_id);

            // Duyệt qua từng sản phẩm trong giỏ hàng để thêm vào order_detail
            foreach ($cartItems as $item) {
                $variant_id = $item['variant_id'];
                $size_id = $item['size_id'];
                $quantity = $item['quantity'];
                $price = $item['price'];

                $this->homeModel->insertOrderDetail($order_id, $variant_id, $size_id, $quantity, $price);
                $this->homeModel->updateQuantityAfterCheckout($size_id, $quantity);
            }
            foreach ($cartItemIds as $id) {
                // var_dump($id);
                $this->homeModel->deleteItemAfterCheckout($id);
            }
            $this->homeModel->insertStateInHistory($order_id, $state_id, 'Đơn hàng sẽ được xử lý sớm nhất có thể', date("Y-m-d H:i:s"));
            header("Location: ?act=cam-on");
            exit;

        }
    }
    ////////////XEM TỔNG QUAN ĐƠN HÀNG THEO NGƯỜI DÙNG//////////////////
    public function viewOrderByCustomer()
    {
        $cates = $this->homeModel->getAllCate();
        $customer_id = $_SESSION['user']['customer_id'];
        $order = $this->homeModel->selectOrderByCustomer($customer_id);
        // var_dump($cart);

        //lấy ra danh sách đơn hàng chung
        $orderItems = $this->homeModel->showOrder($customer_id);
        // $totalOrder = $this->homeModel->getTotalFromOrder($order['order_id']);

        // var_dump($stateItem);
        // echo "<pre>";
        // print_r($orderItems);
        // echo "</pre>";
        require_once 'views/gio-hang/don-hang.php';
    }

    ///////////XEM CHI TIẾT ĐƠN MUA (info customer, info status, info products)
    public function viewDetailOrder()
    {
        $cates = $this->homeModel->getAllCate();
        $customer_id = $_SESSION['user']['customer_id'];
        //chi tiết người mua
        $orderDetail = $this->homeModel->selectOrderByCustomer($customer_id);
        // var_dump($cart);
        //lấy ra danh sách đơn hàng chung
        $order_id = $_GET['order-id'];
        // $totalOrder = $this->homeModel->getTotalFromOrder($order['order_id']);
        //chi tiết trạng thái
        $historyState = $this->homeModel->getHistoryDetail($order_id);
        //chi tiết sản phẩm
        $orderItems = $this->homeModel->showDetailOrder($order_id);
        //tổng thông tin đơn hàng
        $order = $this->homeModel->findOrder($order_id);
        // lấy thông tin nguoiwf nhận, lấy thông tin lịch sử trạng thái theo orderId
        // lấy thông tin từng sp theo orderId
        // foreach($orderItems as $item){
        //     echo "<pre>";
        // print_r($item);
        // echo "</pre>";
        // }
        //              echo "<pre>";
        // print_r($orderDetail);
        // echo "</pre>";

        require_once 'views/gio-hang/chi-tiet-don-hang.php';
    }

    /////////////////HUỶ ĐƠN HÀNG//////////////////////
    //////////khi huỷ đơn hàng thì chuyển trạng thái và thêm trạng thái đó vào history state ngoài ra sẽ cộng lại số
    //////////số lượng sản phẩm đã mua trở lại

    public function cancelOrder()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order_id = $_GET['order-id'];
        $orderDetails = $this->homeModel->getInfoSizeFromOrder($order_id);
        // var_dump($orderDetails);
        $create_at = date("Y-m-d H:i:s");
        $state_id = $this->homeModel->updateOrderState("5", $order_id);
        foreach ($orderDetails as $detail) {
            $size_id = $detail['size_id'];
            $quantity = $detail['quantity'];
            // var_dump($size_id);
            // var_dump($quantity);
            // var_dump($detail);
            // Cộng lại số lượng vào kho
            $this->homeModel->updateQuantityAfterCancel($size_id, $quantity);
        }
        $this->homeModel->insertHistoryState($order_id, $state_id, '', $create_at);
        $this->homeModel->updateQuantityAfterCancel($size_id, $quantity);
        $_SESSION['success'] = "Huỷ đơn hàng thành công";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    public function camOn()
    {
        require_once 'views/gio-hang/cam-on.php';
    }

    //blogs

    public function showBlogsDetail($id)
    {
        $post = $this->BlogModel->getBlogById($id);
        // var_dump($id);
        require './views/trangchinh/trang-bai-viet.php';
    }

}