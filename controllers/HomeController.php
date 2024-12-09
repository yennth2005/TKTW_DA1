<?php
class HomeController
{
    public $homeModel;

    public function __construct()
    {
        $this->homeModel = new Home();
    }
    //////////products and categories///////////////////
    public function home()
    {
        $products = $this->homeModel->listPro();
        $cates = $this->homeModel->getAllCate();
        $catePro = $this->homeModel->cateProduct();
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
        $order_id = $_POST['order_id'];
        $order_id = $_POST['order_id'];
        $order_item_id = $_POST['order_item_id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $rating = isset($_POST['rating']) ? intval($_POST['rating']) : 0;
        $create_at = date("Y-m-d H:i:s");

        $this->homeModel->insertComment($title, $content, $customer_id, $product_id,$order_item_id, $create_at, $rating);
        $_SESSION['success'] = "Gửi bình luận thành công";
        header("Location: ?act=view-detail-order&order-id=".$order_id);
    }
    public function updateComment(){
        $comment_id = $_GET['id'];
        $order_id = $_POST['order_id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = date("Y-m-d");
        $this->homeModel->updateComment($title,$content,$date,$comment_id);
        $_SESSION['success']="Cập nhật thành công";
        header("Location: ?act=view-detail-order&order-id=".$order_id);
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
            'Xanh' => 'blue'
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


    /////////////acount///////////////////
    public function register()
    {
        $cates = $this->homeModel->getAllCate();
        require_once './views/taikhoan/dang-ky-form.php';
    }
    public function postInfo()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $customers = $this->homeModel->getAllCustomer();
        if (isset($_POST['btn-register'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['matkhau'];
            $verify_password = $_POST['matkhau1'];
            $role = 0;
            $create_at = date("Y-m-d H:i:s");
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            foreach ($customers as $customer) {
                $dataEmail = $customer['email'];
            }
            if ($email === $dataEmail) {
                $_SESSION['error'] = "Tài khoản email đã tồn tại";
                header("Location: " . $_SERVER['HTTP_REFERER']);
            } else {
                $this->homeModel->insertCustomer($name, $email, $hashedPassword, $role, $create_at);
                $_SESSION['success'] = "Đăng ký thành công";
                $cates = $this->homeModel->getAllCate();
                require_once './views/taikhoan/dang-nhap-form.php';
            }
        }

        // var_dump($customers);


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
            if (password_verify($_POST['password'], $data['password'])) {
                $_SESSION['user'] = $data;
                $_SESSION['success'] = "Đăng nhập thành công! Chào mừng " . $data['name'];
                header("Location: ".BASE_URL);
                exit;
            } else {
                $_SESSION['error_password'] = "Mật khẩu không đúng"; 
                header("Location: ".$_SERVER['HTTP_REFERER']);
                exit;
            }
        } else {
            $_SESSION['error_email'] = "Email không tồn tại"; 
        }

        $error_email = "";
        if (!isset($_POST['email']) || empty($_POST['email'])) {
            $error_email = "Email không được để trống";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error_email = "Email không hợp lệ";
        }
        $error_password = "";
        if (!isset($_POST['password']) || empty($_POST['password'])) {
            $error_password = "Mật khẩu không được để trống";
        }
        if ($error_email || $error_password) {
            $_SESSION['error_email'] = $error_email;
            $_SESSION['error_password'] = $error_password;
            header("Location: ?act=login");
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
        $customer = $this->homeModel->getCustomerInfo($_SESSION['user']['customer_id']);
        // var_dump($customer);
        if (isset($_POST['btn_update'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];

            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $image = $customer['image'];

            if (isset($_FILES['image'])) {
                if ($_FILES['name']['error'] == UPLOAD_ERR_OK) {
                    $uploadDir = __DIR__ . '/../uploads/Customer/';
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
            $_SESSION['success'] = "Cập nhật thành công";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        }
        require_once 'views/taikhoan/thong-tin-ca-nhan.php';
    }


    public function changePassword()
    {
        $customer_id = $_GET['id'];
        require_once 'views/taikhoan/thay-doi-mat-khau.php';
    }
    public function doneChanged()
    {
        $customer_id = $_POST['customer_id'];
        var_dump($customer_id);
        $password = $_POST['new_pass'];
        $passwordCheck = $_POST['new_pass_check'];
        $code = null;
        if (strlen($password) < 6) {
            $_SESSION['error'] = "Mật khẩu ít nhất 6 kí tự";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        } elseif ($passwordCheck !== $password) {
            $_SESSION['error'] = "Mật khẩu không trùng khớp";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        } else {
            $this->homeModel->updatePasswordByCode($code,$customer_id);
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $this->homeModel->changePass($passwordHash, $customer_id);
            $_SESSION['success'] = "Thay đổi mật khẩu thành công";
            header("Location: ?act=login");
            
        }
        // session_unset();
    }
    //CART

    // public function addToCart()
    // {
    //     $cates = $this->homeModel->getAllCate();
    //     date_default_timezone_set('Asia/Ho_Chi_Minh');

    //     if (isset($_SESSION['user'])) {
    //         $customerId = $_SESSION['user']['customer_id'];
    //         $createdAt = date('Y-m-d H:i:s');
    //         if (isset($_POST['btn_submit'])) {
    //             if (!isset($_POST['variant_id'])) {
    //                 $_SESSION['error'] = "Bạn chưa chọn màu";
    //                 header('Location: ' . $_SERVER['HTTP_REFERER']);
    //                 exit;
    //             }
    //             if (empty($_POST['size_id'])) {
    //                 $_SESSION['error'] = "Bạn chưa chọn kích thước";
    //                 header('Location: ' . $_SERVER['HTTP_REFERER']);
    //                 exit;
    //             }
    //             if (isset($_POST['quantity'], $_POST['price'], $_POST['variant_id'], $_POST['size_id'])) {
    //                 $variantId = $_POST['variant_id'];
    //                 $sizeId = $_POST['size_id'];
    //                 $quantity = $_POST['quantity'];
    //                 $price = $_POST['price'];
    //             } else {
    //                 $_SESSION['error'] = "Dữ liệu không hợp lệ.";
    //                 header('Location: ' . $_SERVER['HTTP_REFERER']);
    //                 exit;
    //             }
    //             // var_dump($variantId);
    //             // var_dump($sizeId);
    //         }

    //         //thông tin giỏ hàng
    //         $cart = $this->homeModel->selectCartByCustomer($customerId);
    //         if ($cart) {
    //             $cartId = $cart['cart_id'];
    //             $cartItem = $this->homeModel->selectCartItem($cartId, $variantId, $sizeId);
    //             $productInfo = $this->homeModel->selectItemFromVariantId($variantId);
    //             if ($cartItem) {
    //                 $newQuantity = $cartItem['quantity'] + $quantity;
    //                 if($newQuantity <=$productInfo['quantity']){
    //                     $updateResult = $this->homeModel->updateCartItemQuantity($cartItem['cart_item_id'], $newQuantity);
                        
    //                 }else{
    //                     $_SESSION['error'] = "Vượt quá số lượng tồn kho";
    //                     header('Location: ' . $_SERVER['HTTP_REFERER']);

    //                 }
    //                 if (!$updateResult) {
    //                     $_SESSION['error'] = "Lỗi: Không thể cập nhật số lượng sản phẩm.";
    //                     header('Location: ' . $_SERVER['HTTP_REFERER']);
    //                     exit;
    //                 }
    //             } else {
    //                 $result = $this->homeModel->insertCartItemByCartId($cartId, $variantId, $sizeId, $quantity, $price);
    //                 if (empty($result)) {
    //                     $_SESSION['success'] = "Thêm vào giỏ hàng thành công.";
    //                     header('Location: ' . $_SERVER['HTTP_REFERER']);
    //                     exit;
    //                 }
    //             }
    //         } else {
    //             // Tạo giỏ hàng mới nếu chưa tồn tại
    //             $insertCartResult = $this->homeModel->insertCart($customerId, $createdAt);
    //             if ($insertCartResult) {
    //                 $cart = $this->homeModel->selectCartByCustomer($customerId);
    //                 if ($cart) {
    //                     $cartId = $cart['cart_id'];
    //                     $result = $this->homeModel->insertCartItemByCartId($cartId, $variantId, $sizeId, $quantity, $price);
    //                     if (!$result) {
    //                         $_SESSION['error'] = "Lỗi: Không thể thêm sản phẩm vào giỏ hàng.";
    //                         header('Location: ' . $_SERVER['HTTP_REFERER']);
    //                         exit;
    //                     }
    //                 }
    //             } else {
    //                 $_SESSION['error'] = "Lỗi: Không thể tạo giỏ hàng.";
    //                 header('Location: ' . $_SERVER['HTTP_REFERER']);
    //                 exit;
    //             }
    //         }

    //         $_SESSION['success'] = "Thêm vào giỏ hàng thành công.";
    //         header('Location: ' . $_SERVER['HTTP_REFERER']);
    //         exit;
    //     } else {
    //         $_SESSION['error'] = "Vui lòng đăng nhập";
    //         header('Location: ?act=login');
    //         exit;
    //     }
    // }

    public function addToCart()
{
    $cates = $this->homeModel->getAllCate();
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    if (!isset($_SESSION['user'])) {
        $_SESSION['error'] = "Vui lòng đăng nhập";
        header('Location: ?act=login');
        exit;
    }

    $customerId = $_SESSION['user']['customer_id'];
    $createdAt = date('Y-m-d H:i:s');

    if (isset($_POST['btn_submit'])) {
        if (!$this->validateInput()) {
            return; // Lỗi đã được xử lý trong validateInput
        }

        $variantId = $_POST['variant_id'];
        $sizeId = $_POST['size_id'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        $this->processCart($customerId, $variantId, $sizeId, $quantity, $price);
    }
}

private function validateInput()
{
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

    if (empty($_POST['quantity']) || empty($_POST['price']) || empty($_POST['variant_id']) || empty($_POST['size_id'])) {
        $_SESSION['error'] = "Dữ liệu không hợp lệ.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    return true;
}

private function processCart($customerId, $variantId, $sizeId, $quantity, $price)
{
    $cart = $this->homeModel->selectCartByCustomer($customerId);
    
    if ($cart) {
        $this->updateExistingCart($cart['cart_id'], $variantId, $sizeId, $quantity, $price);
    } else {
        $this->createNewCart($customerId, $variantId, $sizeId, $quantity, $price);
    }
}

private function updateExistingCart($cartId, $variantId, $sizeId, $quantity, $price)
{
    $cartItem = $this->homeModel->selectCartItem($cartId, $variantId, $sizeId);
    $productInfo = $this->homeModel->selectItemFromVariantId($variantId);

    if ($cartItem) {
        $newQuantity = $cartItem['quantity'] + $quantity;
        if ($newQuantity <= $productInfo['quantity']) {
            $updateResult = $this->homeModel->updateCartItemQuantity($cartItem['cart_item_id'], $newQuantity);
            if (!$updateResult) {
                $_SESSION['error'] = "Vượt quá số lượng tồn kho";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
            }
        } else {
            $_SESSION['error'] = "Vượt quá số lượng tồn kho";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }
    } else {
        $this->addItemToCart($cartId, $variantId, $sizeId, $quantity, $price);
    }
}

private function addItemToCart($cartId, $variantId, $sizeId, $quantity, $price)
{
    $result = $this->homeModel->insertCartItemByCartId($cartId, $variantId, $sizeId, $quantity, $price);
    if (!$result) {
        $_SESSION['error'] = "Lỗi: Không thể thêm sản phẩm vào giỏ hàng.";
    } else {
        $_SESSION['success'] = "Thêm vào giỏ hàng thành công.";
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

private function createNewCart($customerId, $variantId, $sizeId, $quantity, $price)
{
    $createdAt = date('Y-m-d H:i:s');
    $insertCartResult = $this->homeModel->insertCart($customerId, $createdAt);
    if ($insertCartResult) {
        $cart = $this->homeModel->selectCartByCustomer($customerId);
        if ($cart) {
            $this->addItemToCart($cart['cart_id'], $variantId, $sizeId, $quantity, $price);
        }
    } else {
        $_SESSION['error'] = "Lỗi: Không thể tạo giỏ hàng.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
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

            $allVariantsData = [];
            $allSizesData = [];

            foreach ($cartData as $cartItem) {
                $products = $this->homeModel->getProductWithVariant($cartItem['variant_id']);
                $allVariants = $this->homeModel->getAllVariantByProduct($products['product_id']);

                foreach ($allVariants as $variant) {
                    if (!isset($allVariantsData[$variant['variant_id']])) {
                        $allVariantsData[$variant['variant_id']] = $variant;
                    }

                    if (!isset($allSizesData[$variant['variant_id']])) {
                        $allSizes = $this->homeModel->getAllSizeByProductAndVariant($variant['variant_id']);
                        $allSizesData[$variant['variant_id']] = $allSizes;
                    }
                }
            }
            // echo "<pre>";
            // print_r($allVariantsData);
            // echo "</pre>";

            // echo "<pre>";
            // print_r($allSizesData);
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
        $customerInfo = $this->homeModel->getCustomerInfo($customerId);
        if (isset($_POST['submit'])) {
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $variant_id = $_POST['variant'];
            $size_id = $_POST['size'];

            if ($_POST['submit'] === "Thanh toán") {
                $selectedProducts = $_POST['selected_products'];
                $total = 0;
                $cartItems = [];
                if (!empty($selectedProducts)) {
                    foreach ($selectedProducts as $variant_id) {
                        $items = $this->homeModel->selectItemFromVariantId($variant_id);
                        $cartItems = array_merge($cartItems, $items);
                    }

                    //tổng giá trị
                    foreach ($cartItems as $item) {
                        $total += $item['price'] * $item['quantity'];
                    }

                    require_once 'views/gio-hang/mua-hang.php';
                } else {
                    $_SESSION['error'] = "Vui lòng chọn ít nhất một sản phẩm";
                    header("Location: " . $_SERVER['HTTP_REFERER']);
                    exit;
                }
            } else {
                $id = $_POST['id'];

                foreach ($id as $key => $cart_item_id) {
                    $quantityValue = $_POST['quantity'][$key];
                    $priceValue = $_POST['price'][$key];
                    $variantValue = $_POST['variant'][$key];
                    $sizeValue = $_POST['size'][$key];
                    //     echo "<pre>";
                    // print_r($sizeValue);
                    // echo "</pre>";
                    if (!empty($variantValue) && !empty($sizeValue) && !empty($quantityValue) && !empty($priceValue)) {
                        // //cập nhật sản phẩm
                        $this->homeModel->updateProductInCart($variantValue, $sizeValue, $quantityValue, $priceValue, $cart_item_id);
                    } else {
                        $_SESSION['error'] = "Vui lòng kiểm tra thông tin sản phẩm.";
                        header("Location: ?act=view-cart");
                        exit;
                    }
                }
                // echo "<pre>";
                // print_r($_POST['variant']);
                // echo "</pre>";

                $_SESSION['success'] = "Cập nhật thành công";
                // Chỉ chuyển hướng sau khi cập nhật tất cả sản phẩm
                header("Location: ?act=view-cart");
                exit;
            }
        }

        // Cập nhật thời gian của giỏ hàng sau khi cập nhật thông tin
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
        $orders = $this->homeModel->selectOrderByCustomer($customer_id);
        // var_dump($order);
        foreach($orders as $order ){
            $orderDetails = $this->homeModel->showDetailOrder($order['order_id']);
        }
        //lấy ra danh sách đơn hàng chung
        $orderItems = $this->homeModel->showOrder($customer_id);
        // $totalOrder = $this->homeModel->getTotalFromOrder($order['order_id']);
        foreach($orderItems as $item){
            
        }
        // var_dump($stateItem);
        // echo "<pre>";
        // print_r($order);
        // echo "</pre>";
        require_once 'views/gio-hang/don-hang.php';
    }

    public function viewDetailOrder()
    {
        $cates = $this->homeModel->getAllCate();
        $customer_id = $_SESSION['user']['customer_id'];
        //chi tiết người mua
        // var_dump($cart);
        //lấy ra danh sách đơn hàng chung
        $order_id = $_GET['order-id'];
        // var_dump($orderDetail);
        // $totalOrder = $this->homeModel->getTotalFromOrder($order['order_id']);
        //chi tiết trạng thái
        $historyState = $this->homeModel->getHistoryDetail($order_id);
        //chi tiết sản phẩm
        $orderItems = $this->homeModel->showDetailOrder($order_id);
        //tổng thông tin đơn hàng
        $order = $this->homeModel->findOrder($order_id);
        // lấy thông tin nguoiwf nhận, lấy thông tin lịch sử trạng thái theo orderId
        // lấy thông tin từng sp theo orderId
        $comments = [];
        foreach ($orderItems as $item) {
            $comments[$item['id']] = $this->homeModel->selectCommentByOrder($item['id']);
            
        }

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
        $message = $_POST['message'];
        foreach ($orderDetails as $detail) {
            $size_id = $detail['size_id'];
            $quantity = $detail['quantity'];
            // var_dump($size_id);
            // var_dump($quantity);
            // var_dump($detail);
            // Cộng lại số lượng vào kho
            $this->homeModel->updateQuantityAfterCancel($size_id, $quantity);
        }
        $this->homeModel->insertHistoryState($order_id, $state_id, $message, $create_at);
        $this->homeModel->updateQuantityAfterCancel($size_id, $quantity);
        $_SESSION['success'] = "Huỷ đơn hàng thành công";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;


    }
    public function useConfirmOrder()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order_id = $_GET['order-id'];
        $create_at = date("Y-m-d H:i:s");
        $state_id = $this->homeModel->updateOrderState("4", $order_id);
        $this->homeModel->insertHistoryState($order_id, $state_id, '', $create_at);
        $_SESSION['success'] = "Cảm ơn bạn đã tin tưởng Baby Store";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    public function camOn()
    {
        require_once 'views/gio-hang/cam-on.php';
    }

    public function forgot()
    {
        require_once 'views/taikhoan/quen-mat-khau.php';
    }
    public function handleForgot(){
        if(isset($_POST['btn_submit'])){
            if($_POST['email']){
                $email = $_POST['email'];
                $check = $this->homeModel->checkExistCustomer($email);
                if($email != $check['email']){
                    $_SESSION['error'] = "Email không tồn tại";
                    header("Location: ".$_SERVER['HTTP_REFERER']);
                }
                $dataCustomer = $this->homeModel->checklogin();
                $codeVerify = generateRandomNumber();
                sendResetPasswordMail($_POST['email'],$codeVerify);
                $updatePassword = $this->homeModel->updatePasswordByCode($codeVerify,$dataCustomer['customer_id']);
                if($updatePassword){
                    $_SESSION['success'] = 'Mã đã được gửi về Email của bạn!';
                    $_SESSION['hienthi'] = 100; 
                    require_once 'views/taikhoan/quen-mat-khau.php';
                }else{
                    $_SESSION['error'] = 'Có lỗi xảy ra';
                    header("Location:" .$_SERVER['HTTP_REFERER']);
                }
            }
        }
    }

    public function checkCodeVerify(){
        if(isset($_POST['btn_submit'])){
            $customer_id = $_POST['customer_id'];
            $code = $_POST['code'];
            $customerInfo = $this->homeModel->getCustomerInfo($customer_id);
            if (strlen($customerInfo['code']) < 2) {
                $_SESSION['error'] = 'Vui lòng thử lại';
                $_SESSION['hienthi'] = 100; 
                require_once 'views/taikhoan/quen-mat-khau.php';
            }
            elseif($code == $customerInfo['code']){
                $_SESSION['success']="Xác minh thành công!";
                header("Location: ?act=change-password&id=".$customer_id);
                exit;
            }else{
                $_SESSION['error']="Mã xác minh không hợp lệ!";
                header("Location: ".$_SERVER['HTTP_REFERER']);
                exit;
            }
        }
    }

    // public function handleForgot() {
    //     if (isset($_POST['btn_submit'])) {
    //         if (!empty($_POST['email'])) { // Kiểm tra xem email có được nhập hay không
    //             $email = $_POST['email'];
    //             $dataCustomer = $this->homeModel->checkExistCustomer($email); // Chuyển email vào hàm kiểm tra
                
    //             // Kiểm tra xem email có tồn tại không
    //             if (!$dataCustomer || $email != $dataCustomer['email']) {
    //                 $_SESSION['error'] = "Email không tồn tại";
    //                 header("Location: " . $_SERVER['HTTP_REFERER']);
    //                 exit; // Thêm exit để dừng script
    //             }

    //             $codeVerify = generateRandomNumber();
    //             sendResetPasswordMail($email, $codeVerify);
                
    //             // Cập nhật mã xác minh trong cơ sở dữ liệu
    //             $updatePassword = $this->homeModel->updatePasswordByCode($codeVerify, $dataCustomer['customer_id']);
    //             if ($updatePassword) {
    //                 $_SESSION['success'] = 'Vui lòng nhập mã';
    //                 $_SESSION['hienthi'] = 100; // Cài đặt hiển thị
    //                 require_once 'views/taikhoan/quen-mat-khau.php';
    //                 exit; // Thêm exit để dừng script
    //             }
    //         } else {
    //             $_SESSION['error'] = "Vui lòng nhập email"; // Thông báo nếu email rỗng
    //             header("Location: " . $_SERVER['HTTP_REFERER']);
    //             exit; // Thêm exit để dừng script
    //         }
    //     }
    // }
    
}