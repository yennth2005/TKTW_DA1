<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:26 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ecommerce, market, shop, mart, cart, deal, multipurpose, marketplace">
    <meta name="description" content="Carrot - Multipurpose eCommerce HTML Template.">
    <meta name="author" content="ashishmaraviya">

    <title>Carrot - Multipurpose eCommerce HTML Template</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="views/assets/img/logo/favicon.png">

    <!-- Icon CSS -->
    <link rel="stylesheet" href="views/assets/css/vendor/materialdesignicons.min.css">
    <link rel="stylesheet" href="views/assets/css/vendor/remixicon.css">

    <!-- Vendor -->
    <link rel="stylesheet" href="views/assets/css/vendor/animate.css">
    <link rel="stylesheet" href="views/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="views/assets/css/vendor/aos.min.css">
    <link rel="stylesheet" href="views/assets/css/vendor/range-slider.css">
    <link rel="stylesheet" href="views/assets/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="views/assets/css/vendor/jquery.slick.css">
    <link rel="stylesheet" href="views/assets/css/vendor/slick-theme.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="views/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <?php
    if (isset($_SESSION['error'])) {
        echo "
        <script>
            $(document).ready(function() {
                toastr.error('{$_SESSION['error']}');
            });
        </script>";
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
        echo "
        <script>
            $(document).ready(function() {
                toastr.success('{$_SESSION['success']}');
            });
        </script>";
        unset($_SESSION['success']);
    }
    ?>
</head>

<body class="body-bg-6">

    <!-- Loader -->
    <div id="cr-overlay">
        <span class="loader"></span>
    </div>

    <!-- Header -->
    <?php include './views/components/header.php' ?>


    <!-- Mobile menu -->
    <div class="cr-sidebar-overlay"></div>
    <div id="cr_mobile_menu" class="cr-side-cart cr-mobile-menu">
        <div class="cr-menu-title">
            <span class="menu-title">My Menu</span>
            <button type="button" class="cr-close">×</button>
        </div>
        <div class="cr-menu-inner">
            <div class="cr-menu-content">
                <ul>
                    <li class="dropdown drop-list">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="dropdown drop-list">
                        <span class="menu-toggle"></span>
                        <a href="javascript:void(0)" class="dropdown-list">Category</a>
                        <ul class="sub-menu">
                            <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                            <li><a href="shop-right-sidebar.html">Shop Right sidebar</a></li>
                            <li><a href="shop-full-width.html">Full Width</a></li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list">
                        <span class="menu-toggle"></span>
                        <a href="javascript:void(0)" class="dropdown-list">product</a>
                        <ul class="sub-menu">
                            <li><a href="product-left-sidebar.html">product Left sidebar</a></li>
                            <li><a href="product-right-sidebar.html">product Right sidebar</a></li>
                            <li><a href="product-full-width.html">Product Full Width </a></li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list">
                        <span class="menu-toggle"></span>
                        <a href="javascript:void(0)" class="dropdown-list">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="track-order.html">Track Order</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="policy.html">Policy</a></li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list">
                        <span class="menu-toggle"></span>
                        <a href="javascript:void(0)" class="dropdown-list">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                            <li><a href="blog-full-width.html">Full Width</a></li>
                            <li><a href="blog-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                            <li><a href="blog-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                            <li><a href="blog-detail-full-width.html">Detail Full Width</a></li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list">
                        <span class="menu-toggle"></span>
                        <a href="javascript:void(0)">Element</a>
                        <ul class="sub-menu">
                            <li><a href="elements-products.html">Products</a></li>
                            <li><a href="elements-typography.html">Typography</a></li>
                            <li><a href="elements-buttons.html">Buttons</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="cr-breadcrumb-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-breadcrumb-title">
                            <h2>Checkout</h2>
                            <span> <a href="index.html">Home</a> - Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout section -->
    <section class="cr-checkout-section padding-tb-100">
        <div class="container">
            <form action="?act=checkout" method="POST">
                <div class="row">
                    <!-- Sidebar Area Start -->
                    <div class="cr-checkout-rightside col-lg-4 col-md-12">
                        <div class="cr-sidebar-wrap">
                            <!-- Sidebar Summary Block -->
                            <div class="cr-sidebar-block">
                                <div class="cr-sb-title">
                                    <h3 class="cr-sidebar-title">Summary</h3>
                                </div>
                                <div class="cr-sb-block-content">
                                    <div class="cr-checkout-summary">
                                        <div>
                                            <span class="text-left">Tổng tiền của bạn</span>
                                            <span class="text-right"><?= number_format($total) ?>đ</span>
                                        </div>
                                        <div>
                                            <span class="text-left">Phí vận chuyển</span>
                                            <span class="text-right">
                                                <?php
                                                $fee = $total >= 200000 ? 0 : 30000;
                                                echo number_format($fee) . "đ"
                                                    ?>
                                            </span>
                                        </div>
                                        <div class="cr-checkout-summary-total">
                                            <span class="text-left">Tổng tiên</span>
                                            <span class="text-right"><?php $total_amout = $total + $fee;
                                            echo number_format($total_amout) . "đ" ?></span>
                                            <input type="hidden" name="total_amount" value="<?= $total_amout ?>">
                                        </div>
                                    </div>
                                    <div class="cr-checkout-pro">
                                        <?php foreach ($cartItems as $item): ?>
                                            <div class="col-sm-12 mb-6">
                                                <div class="cr-product-inner">
                                                    <div class="cr-pro-image-outer">
                                                        <div class="cr-pro-image">
<<<<<<< Updated upstream
                                                            <a href="?act=view-detail&color=<?= $item['variant_id'] ?>"
                                                                class="image">
=======
                                                            <a href="?act=view-detail&color=<?= $item['variant_id'] ?>" class="image">
>>>>>>> Stashed changes
                                                                <img class="main-image" src="<?= $item['image'] ?>"
                                                                    alt="Product">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="cart-item-id[]"
                                                        value="<?= $item['cart_item_id'] ?>">
                                                    <div class="cr-pro-content cr-product-details">
                                                        <h5 class="cr-pro-title"><a
                                                                href="?act=view-detail&color=<?= $item['variant_id'] ?>"><?= $item['product_name'] ?></a>
                                                        </h5>
                                                        <div class="cr-pro-rating">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-line"></i>
                                                        </div>
                                                        <p class="cr-price"><span
                                                                class="new-price"><?= number_format($item['price']) ?>đ</span>
                                                            <!-- <span class="old-price">$123.25</span></p> -->
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endforeach; ?>
                                        <?php foreach ($cartItems as $index => $item): ?>
                                            <input type="hidden" name="cartItems[<?= $index ?>][variant_id]"
                                                value="<?= $item['variant_id'] ?>">
                                            <input type="hidden" name="cartItems[<?= $index ?>][size_id]"
                                                value="<?= $item['size_id'] ?>">
                                            <input type="hidden" name="cartItems[<?= $index ?>][quantity]"
                                                value="<?= $item['quantity'] ?>">
                                            <input type="hidden" name="cartItems[<?= $index ?>][price]"
                                                value="<?= $item['price'] ?>">
                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Summary Block -->
                        </div>
                        <div class="cr-sidebar-wrap cr-checkout-del-wrap">
                            <!-- Sidebar Summary Block -->
                            <div class="cr-sidebar-block">
                                <div class="cr-sb-title">
                                    <h3 class="cr-sidebar-title">Phương thức vận chuyển</h3>
                                </div>
                                <div class="cr-sb-block-content">
                                    <div class="cr-checkout-del">
                                        <div class="cr-del-desc">Đơn hàng trên 200,000đ sẽ được miễn phí vận chuyển
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Summary Block -->
                        </div>
                        <div class="cr-sidebar-wrap cr-checkout-pay-wrap">
                            <!-- Sidebar Payment Block -->
                            <div class="cr-sidebar-block">
                                <div class="cr-sb-title">
                                    <h3 class="cr-sidebar-title">Phương thức thanh toán</h3>
                                </div>
                                <div class="cr-sb-block-content">
                                    <div class="cr-checkout-pay">
                                        <div class="cr-pay-desc">Please select the preferred payment method to use on
                                            this
                                            order.</div>
                                        <form action="#" class="payment-options">
                                            <span class="cr-pay-option">
                                                <span>
                                                    <input type="radio" id="pay1" name="radio-group" checked>
                                                    <label for="pay1">Thanh toán khi nhận hàng</label>
                                                </span>
                                            </span>
                                            <span class="cr-pay-option">
                                                <span>
                                                    <input type="radio" id="pay2" name="radio-group">
                                                    <label for="pay2">Thanh toán trực tuyến</label>
                                                </span>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Payment Block -->
                        </div>
                        <div class="cr-sidebar-wrap cr-check-pay-img-wrap">
                            <!-- Sidebar Payment Block -->
                            <div class="cr-sidebar-block">
                                <div class="cr-sb-title">
                                    <h3 class="cr-sidebar-title">Payment Method</h3>
                                </div>
                                <div class="cr-sb-block-content">
                                    <div class="cr-check-pay-img-inner">
                                        <div class="cr-check-pay-img">
                                            <img src="views/assets/img/banner/payment.png" alt="payment">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Payment Block -->
                        </div>
                    </div>
                    <div class="cr-checkout-leftside col-lg-8 col-md-12 m-t-991">
                        <!-- checkout content Start -->
                        <div class="cr-checkout-content">
                            <div class="cr-checkout-inner">

                                <div class="cr-checkout-wrap">
                                    <div class="cr-checkout-block cr-check-bill">
                                        <h3 class="cr-checkout-title">Billing Details</h3>
                                        <div class="cr-bl-block-content">
                                            <div class="cr-check-subtitle">Checkout Options</div>

                                            <div class="cr-check-bill-form mb-minus-24">

                                                <span class="cr-bill-wrap cr-bill-half">
                                                    <label>Họ và tên*</label>
                                                    <input type="text" name="name" placeholder="Điền họ và tên"
                                                        required>
                                                    <p id="name_err" style="color:red">
                                                        <?= isset($name_err) ? $name_err : '' ?>
                                                    </p>
                                                </span>
                                                <span class="cr-bill-wrap cr-bill-half">
                                                    <label>Email*</label>
                                                    <input type="email" name="email" placeholder="Điền email" required>
                                                    <p id="email_err" style="color:red">
                                                        <?= isset($email_err) ? $email_err : '' ?>
                                                    </p>
                                                </span>
                                                <span class="cr-bill-wrap">
                                                    <label>Địa chỉ</label>
                                                    <input type="text" name="address" placeholder="Điền địa chỉ">
                                                </span>
                                                <p id="address_err" style="color:red">
                                                    <?= isset($address_err) ? $address_err : '' ?>
                                                </p>
                                                <span class="cr-bill-wrap">
                                                    <label>Số điện thoại</label>
                                                    <input type="text" name="phone" placeholder="Điền số điện thoại">
                                                </span>
                                                <p id="phone_err" style="color:red">
                                                    <?= isset($phone_err) ? $phone_err : '' ?>
                                                </p>
                                                <div class="cr-bill-wrap">
                                                    <label>Ghi chú về đơn hàng của bạn</label>
<<<<<<< Updated upstream
                                                    <textarea class="form-control" name="comments"
                                                        placeholder="Leave a comment here"
=======
                                                    <textarea class="form-control" name="comments" placeholder="Leave a comment here"
>>>>>>> Stashed changes
                                                        id="floatingTextarea"></textarea>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <span class="cr-check-order-btn">
                                    <button name="submit" class="btn btn-success">Đặt hàng</button>
                                </span>
                            </div>
                        </div>
                        <!--cart content End -->
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout section End -->

    <!-- Footer -->
    <footer class="footer padding-t-100 bg-off-white">
        <div class="container">
            <div class="row footer-top padding-b-100">
                <div class="col-xl-4 col-lg-6 col-sm-12 col-12 cr-footer-border">
                    <div class="cr-footer-logo">
                        <div class="image">
                            <img src="views/assets/img/logo/logo.png" alt="logo" class="logo">
                            <img src="views/assets/img/logo/dark-logo.png" alt="logo" class="dark-logo">
                        </div>
                        <p>Carrot is the biggest market of grocery products. Get your daily needs from our store.</p>
                    </div>
                    <div class="cr-footer">
                        <h4 class="cr-sub-title cr-title-hidden">
                            Contact us
                            <span class="cr-heading-res"></span>
                        </h4>
                        <ul class="cr-footer-links cr-footer-dropdown">
                            <li class="location-icon">
                                51 Green St.Huntington ohaio beach ontario, NY 11746 KY 4783, USA.
                            </li>
                            <li class="mail-icon">
                                <a href="javascript:void(0)">example@email.com</a>
                            </li>
                            <li class="phone-icon">
                                <a href="javascript:void(0)"> +91 123 4567890</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-12 col-12 cr-footer-border">
                    <div class="cr-footer">
                        <h4 class="cr-sub-title">
                            Company
                            <span class="cr-heading-res"></span>
                        </h4>
                        <ul class="cr-footer-links cr-footer-dropdown">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="track-order.html">Delivery Information</a></li>
                            <li><a href="policy.html">Privacy Policy</a></li>
                            <li><a href="terms.html">Terms & Conditions</a></li>
                            <li><a href="contact-us.html">contact Us</a></li>
                            <li><a href="faq.html">Support Center</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-12 col-12 cr-footer-border">
                    <div class="cr-footer">
                        <h4 class="cr-sub-title">
                            Category
                            <span class="cr-heading-res"></span>
                        </h4>
                        <ul class="cr-footer-links cr-footer-dropdown">
                            <li><a href="shop-left-sidebar.html">Dairy & Bakery</a></li>
                            <li><a href="shop-left-sidebar.html">Fruits & Vegetable</a></li>
                            <li><a href="shop-left-sidebar.html">Snack & Spice</a></li>
                            <li><a href="shop-left-sidebar.html">Juice & Drinks</a></li>
                            <li><a href="shop-left-sidebar.html">Chicken & Meat</a></li>
                            <li><a href="shop-left-sidebar.html">Fast Food</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-sm-12 col-12 cr-footer-border">
                    <div class="cr-footer cr-newsletter">
                        <h4 class="cr-sub-title">
                            Subscribe Our Newsletter
                            <span class="cr-heading-res"></span>
                        </h4>
                        <div class="cr-footer-links cr-footer-dropdown">
                            <form class="cr-search-footer">
                                <input class="search-input" type="text" placeholder="Search here...">
                                <a href="javascript:void(0)" class="search-btn">
                                    <i class="ri-send-plane-fill"></i>
                                </a>
                            </form>
                        </div>
                        <div class="cr-social-media">
                            <span><a href="javascript:void(0)"><i class="ri-facebook-line"></i></a></span>
                            <span><a href="javascript:void(0)"><i class="ri-twitter-x-line"></i></a></span>
                            <span><a href="javascript:void(0)"><i class="ri-dribbble-line"></i></a></span>
                            <span><a href="javascript:void(0)"><i class="ri-instagram-line"></i></a></span>
                        </div>
                        <div class="cr-payment">
                            <div class="cr-insta-slider swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="views/assets/img/insta/1.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="views/assets/img/insta/2.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="views/assets/img/insta/3.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="views/assets/img/insta/4.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="views/assets/img/insta/5.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="views/assets/img/insta/6.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="views/assets/img/insta/7.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="views/assets/img/insta/8.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cr-last-footer">
                <p>&copy; <span id="copyright_year"></span> <a href="index.html">Carrot</a>, All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Tab to top -->
    <a href="#Top" class="back-to-top result-placeholder">
        <i class="ri-arrow-up-line"></i>
        <div class="back-to-top-wrap">
            <svg viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </a>

    <!-- Cart -->
    <div class="cr-cart-overlay"></div>
    <div class="cr-cart-view">
        <div class="cr-cart-inner">
            <div class="cr-cart-top">
                <div class="cr-cart-title">
                    <h6>My Cart</h6>
                    <button type="button" class="close-cart">×</button>
                </div>
                <ul class="crcart-pro-items">
                    <li>
                        <a href="product-left-sidebar.html" class="crside_pro_img"><img
                                src="views/assets/img/product/4.jpg" alt="product-1"></a>
                        <div class="cr-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Fresh Pomegranate</a>
                            <span class="cart-price"><span>$56.00</span> x 1kg</span>
                            <div class="cr-cart-qty">
                                <div class="cart-qty-plus-minus">
                                    <button type="button" class="plus">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity">
                                    <button type="button" class="minus">-</button>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="crside_pro_img"><img
                                src="views/assets/img/product/2.jpg" alt="product-2"></a>
                        <div class="cr-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Green Apples</a>
                            <span class="cart-price"><span>$75.00</span> x 1kg</span>
                            <div class="cr-cart-qty">
                                <div class="cart-qty-plus-minus">
                                    <button type="button" class="plus">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity">
                                    <button type="button" class="minus">-</button>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="crside_pro_img"><img
                                src="views/assets/img/product/3.jpg" alt="product-3"></a>
                        <div class="cr-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Watermelon - Small</a>
                            <span class="cart-price"><span>$48.00</span> x 5kg</span>
                            <div class="cr-cart-qty">
                                <div class="cart-qty-plus-minus">
                                    <button type="button" class="plus">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity">
                                    <button type="button" class="minus">-</button>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cr-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.html" class="cr-button">View Cart</a>
                    <a href="checkout.html" class="cr-btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Side-tool -->
    <div class="cr-tool-overlay"></div>
    <div class="cr-tool">
        <div class="cr-tool-btn">
            <a href="javascript:void(0)" class="btn-cr-tool result-placeholder">
                <i class="ri-settings-line"></i>
            </a>
            <div class="color-variant">
                <div class="cr-bar-title">
                    <h6>Tools</h6>
                    <a href="javascript:void(0)" class="close-tools">
                        <i class="ri-close-line"></i>
                    </a>
                </div>
                <div class="cr-tools-detail">
                    <div class="heading">
                        <h2>Select Color</h2>
                    </div>
                    <ul class="cr-color">
                        <li class="colors c1 active-colors">
                        </li>
                        <li class="colors c2">
                        </li>
                        <li class="colors c3">
                        </li>
                        <li class="colors c4">
                        </li>
                        <li class="colors c5">
                        </li>
                        <li class="colors c6">
                        </li>
                        <li class="colors c7">
                        </li>
                        <li class="colors c8">
                        </li>
                        <li class="colors c9">
                        </li>
                        <li class="colors c10">
                        </li>
                    </ul>
                </div>
                <div class="cr-tools-detail">
                    <div class="heading">
                        <h2>Dark mode</h2>
                    </div>
                    <ul class="dark-mode">
                        <li class="dark">
                        </li>
                        <li class="white active-dark-mode">
                        </li>
                    </ul>
                </div>
                <div class="cr-tools-detail">
                    <div class="heading">
                        <h2>RTL mode</h2>
                    </div>
                    <ul class="rtl-mode">
                        <li class="rtl">
                            <img src="views/assets/img/tool/rtl.png" alt="rtl">
                        </li>
                        <li class="ltr active-rtl-mode">
                            <img src="views/assets/img/tool/ltr.png" alt="ltr">
                        </li>
                    </ul>
                </div>
                <div class="cr-tools-detail">
                    <div class="heading">
                        <h2>Backgrounds</h2>
                    </div>
                    <ul class="bg-panel">
                        <li class="bg-1">
                            <img src="views/assets/img/shape/bg-shape-1.png" alt="bg-shape-1">
                        </li>
                        <li class="bg-2">
                            <img src="views/assets/img/shape/bg-shape-2.png" alt="bg-shape-2">
                        </li>
                        <li class="bg-3">
                            <img src="views/assets/img/shape/bg-shape-3.png" alt="bg-shape-3">
                        </li>
                        <li class="bg-4">
                            <img src="views/assets/img/shape/bg-shape-4.png" alt="bg-shape-4">
                        </li>
                        <li class="bg-5">
                            <img src="views/assets/img/shape/bg-shape-5.png" alt="bg-shape-5">
                        </li>
                        <li class="bg-6 active-bg-panel">
                            <img src="views/assets/img/shape/bg-shape-6.png" alt="bg-shape-6">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor Custom -->
    <script src="views/assets/js/vendor/jquery-3.6.4.min.js"></script>
    <script src="views/assets/js/vendor/jquery.zoom.min.js"></script>
    <script src="views/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="views/assets/js/vendor/mixitup.min.js"></script>
    <script src="views/assets/js/vendor/range-slider.js"></script>
    <script src="views/assets/js/vendor/aos.min.js"></script>
    <script src="views/assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="views/assets/js/vendor/slick.min.js"></script>

    <!-- Main Custom -->
    <script src="views/assets/js/main.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:26 GMT -->

</html>