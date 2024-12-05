<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:26 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ecommerce, market, shop, mart, cart, deal, multipurpose, marketplace">
    <meta name="tatca" content="Carrot - Multipurpose eCommerce HTML Template.">
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
    <style>.timeline {
            /* border: 1px solid #007bff; */
            border-radius: 5px;
            padding: 1rem;
            /* background-color: #f8f9fa; */
        }
        .timeline-event {
            border-bottom: 1px solid #dee2e6;
            padding: 1rem 0;
        }
        .timeline-event:last-child {
            border-bottom: none;
        }
        .timeline-date {
            font-weight: bold;
            color: #007bff;
        }</style>
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
                            <h2>Đơn hàng của tôi</h2>
                            <span> <a href="index.php">Trang chủ</a> - Đơn mua</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout section -->
    <section class="section-cart padding-t-100">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-lg-4 col-12 mb-24">
                    <h1>Thông tin người nhận</h1>
                    <span><h6><?= $orderDetail['recipient_name'] ?></h6></span>
                    <span><?= $orderDetail['recipient_phone'] ?></span> <br>
                    <span><?= $orderDetail['recipient_address'] ?></span> <br>
                </div>
                <div class="col-lg-4 col-12 mb-24">
                    <div class="timeline">
                        <?php foreach($historyState as $history): ?>
                        <div class="timeline-event row">
                            <div class="col-md-4 timeline-date"><?= $history['create_at'] ?></div>
                            <div class="col-md-8 timeline-content">
                                <strong><?= $history['state_name'] ?></strong><br>
                                <?= $history['description'] ?><br>
                                <?= $orderDetail['recipient_name'] ?>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <?php foreach($orderItems as $item): ?>
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-1">
                            <img style="padding: 40px 0px 0px 20px" width="100px" height="100px"
                                src="<?= $item['image'] ?>" class="img-fluid rounded-start"
                                alt="Product Image">
                        </div>
                        <div class="col-md-11">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title"><a href="?act=view-detail&color=<?= $item['variant_id'] ?>"><?= $item['product_name'] ?></a>
                                    </h5>
                                    
                                </div>
                                <p class="card-text">Màu: <span
                                        class="text-default fw-bold"><?= $item['color']. "-" . $item['size_value'] ?></span>
                                </p>
                                <p class="card-text">Giá: <span
                                        class="text-danger fw-bold"><?= number_format($item['price']) . "đ" ?></span>
                                </p>
                                <p class="card-text">Số lượng: <span
                                        class="text-info fw-bold">x <?= $item['quantity'] ?></span>
                                </p>

                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <span class="fw-bold">Tổng tiền: <span
                                            class="text-success"><?= number_format($item['price'] * $item['quantity']) . "đ" ?></span></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <?php endforeach;?>
            
            <div class="col-lg-4 col-6 mb-12">
                <div class="container mt-5">
                    <h3>Tổng Kết Đơn Hàng</h3>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Tổng tiền hàng</td>
                                <td class="text-right"><?= $order['total_amount']-20000 >=200000 ? number_format($order['total_amount'])."đ" : number_format(($order['total_amount']) - 20000)."đ" ?></td>
                            </tr>
                            <tr>
                                <td>Phí vận chuyển</td>
                                <td class="text-right">+<?= number_format(20000) ."đ" ?></td>
                            </tr>
                            <tr>
                                <td>Giảm giá phí vận chuyển</td>
                                <td class="text-right text-danger"><?= $order['total_amount']-20000>=200000 ? "-20,000đ" : "-0đ" ?></td>
                            </tr>
                            <tr class="total-row">
                                <td>Thành tiền</td>
                                <td class="text-right text-success"><b><?= number_format($order['total_amount'])."đ" ?></b></td>
                            </tr>
                            <tr>
                                <td>Phương thức Thanh toán</td>
                                <td class="text-right"><?= $order['payment_method']==0 ? "Thanh toán khi nhận hàng" :"Thanh toán trực tuyến" ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
    <!-- Checkout section End -->

    <!-- Footer -->
    <?php include 'views/components/footer.php'; ?>

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

</html>n