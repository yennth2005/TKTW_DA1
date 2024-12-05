<!-- ========================================================= 
    Item Name: Carrot - Multipurpose eCommerce HTML Template.
    Author: ashishmaraviya
    Version: 2.1
    Copyright 2024
 ============================================================-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:29:37 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="ecommerce, market, shop, mart, cart, deal, multipurpose, marketplace" />
    <meta name="description" content="Carrot - Multipurpose eCommerce HTML Template." />
    <meta name="author" content="ashishmaraviya" />

    <title>Carrot - Multipurpose eCommerce HTML Template</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="views/assets/img/logo/favicon.png" />

    <!-- Icon CSS -->
    <link rel="stylesheet" href="views/assets/css/vendor/materialdesignicons.min.css" />
    <link rel="stylesheet" href="views/assets/css/vendor/remixicon.css" />

    <!-- Vendor -->
    <link rel="stylesheet" href="views/assets/css/vendor/animate.css" />
    <link rel="stylesheet" href="views/assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="views/assets/css/vendor/aos.min.css" />
    <link rel="stylesheet" href="views/assets/css/vendor/range-slider.css" />
    <link rel="stylesheet" href="views/assets/css/vendor/swiper-bundle.min.css" />
    <link rel="stylesheet" href="views/assets/css/vendor/jquery.slick.css" />
    <link rel="stylesheet" href="views/assets/css/vendor/slick-theme.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="views/assets/css/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
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
<<<<<<< Updated upstream
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body class="body-bg-6">
    <?php
=======
</head>

<body class="body-bg-6">
<?php
>>>>>>> Stashed changes
    if (isset($_SESSION['error'])) {
        echo "
            <script style='text/javascript'> 
                toastr.error('{$_SESSION['error']}');
            </script>";
        unset($_SESSION['error']);
<<<<<<< Updated upstream
    }
=======
    }   
>>>>>>> Stashed changes
    if (isset($_SESSION['success'])) {
        echo "
            <script style='text/javascript'> 
                toastr.success('{$_SESSION['success']}');
            </script>";
        unset($_SESSION['success']);
    }
    ?>
    <!-- Loader -->
    <div id="cr-overlay">
        <span class="loader"></span>
    </div>

    <!-- Header -->
    <?php include './views/components/header.php' ?>

    <!-- Mobile menu -->
    <div class="cr-sidebar-overlay">
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
                                <li>
                                    <a href="shop-right-sidebar.html">Shop Right sidebar</a>
                                </li>
                                <li><a href="shop-full-width.html">Full Width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown drop-list">
                            <span class="menu-toggle"></span>
                            <a href="javascript:void(0)" class="dropdown-list">product</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="product-left-sidebar.html">product Left sidebar</a>
                                </li>
                                <li>
                                    <a href="product-right-sidebar.html">product Right sidebar</a>
                                </li>
                                <li>
                                    <a href="product-full-width.html">Product Full Width </a>
                                </li>
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
                                <li>
                                    <a href="blog-detail-left-sidebar.html">Detail Left Sidebar</a>
                                </li>
                                <li>
                                    <a href="blog-detail-right-sidebar.html">Detail Right Sidebar</a>
                                </li>
                                <li>
                                    <a href="blog-detail-full-width.html">Detail Full Width</a>
                                </li>
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
    </div>

    <section class="section-register padding-tb-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>Register</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="cr-register" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="form-logo">
                            <img width="71px" src="<?= BASE_URL ?>views/assets/img/logo/logo2-removebg-preview.png"
                                alt="logo">
                        </div>

                        <form class="cr-content-form" method="POST" action="<?= BASE_URL ?>?act=check-login"
                            onsubmit="return login()">
                            <div class="row">

                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" placeholder="" id="email"
                                            class="cr-form-control" value="<?php isset($email) ? $email : '' ?>">
                                        <span class="error" id="error_email">
                                            <?php if (isset($_SESSION['error_email'])): ?>
                                                <?php
                                                echo $_SESSION['error_email'];
                                                unset($_SESSION['error_email']); // Xóa thông báo sau khi hiển thị
                                                ?>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="password" name="password" id="password" placeholder=" "
                                            class="cr-form-control">
                                        <span class="error" id="error_password">
                                            <?php if (isset($_SESSION['error_password'])): ?>
                                                <?php
                                                echo $_SESSION['error_password'];
                                                unset($_SESSION['error_password']);
                                                ?>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="remember">
                                    <span class="form-group custom">
                                        <input name="remember" type="checkbox" id="html">
                                        <label for="html">Remember Me</label>
                                    </span>
                                    <a class="link" href="<?= BASE_URL ?>?act=forgot-password">Forgot Password?</a>
                                </div><br>
                                <div class="login-buttons">
                                    <button type="submit" class="cr-button">Login</button>
                                    <a href="<?= BASE_URL ?>?act=register" class="link">
                                        Signup?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function login() {
            // Lấy giá trị từ các trường
            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value;

            // Xóa thông báo lỗi cũ
            document.getElementById("error_email").innerText = "";
            document.getElementById("error_password").innerText = "";

            let valid = true;

            // Kiểm tra email
            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!email.match(emailPattern)) {
                document.getElementById("error_email").innerText = "Email không hợp lệ";
                valid = false;
            }

            // Kiểm tra mật khẩu
            if (password.length < 6) { // Thay đổi độ dài tùy theo yêu cầu
                document.getElementById("error_password").innerText = "Mật khẩu phải ít nhất 6 ký tự";
                valid = false;
            }

            return valid; // Chỉ gửi biểu mẫu nếu tất cả các kiểm tra đều hợp lệ
        }
    </script>
    <!-- Footer -->
    <?php include './views/components/footer.php' ?>


    <!-- Tab to top -->
    <a href="#Top" class="back-to-top result-placeholder">
        <i class="ri-arrow-up-line"></i>
        <div class="back-to-top-wrap">
            <svg viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </a>

    <!-- Model -->
    <div class="modal fade quickview-modal" id="quickview" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered cr-modal-dialog">
            <div class="modal-content">
                <button type="button" class="cr-close-model btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="zoom-image-hover modal-border-image">
                                <img src="views/assets/img/product/tab-1.jpg" alt="product-tab-2"
                                    class="product-image" />
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="cr-size-and-weight-contain">
                                <h2 class="heading">
                                    Peach Seeds Of Change Oraganic Quinoa, Brown fruit
                                </h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1900s,
                                </p>
                            </div>
                            <div class="cr-size-and-weight">
                                <div class="cr-review-star">
                                    <div class="cr-star">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <p>( 75 Review )</p>
                                </div>
                                <div class="cr-product-price">
                                    <span class="new-price">$120.25</span>
                                    <span class="old-price">$123.25</span>
                                </div>
                                <div class="cr-size-weight">
                                    <h5><span>Size</span>/<span>Weight</span> :</h5>
                                    <div class="cr-kg">
                                        <ul>
                                            <li class="active-color">500gm</li>
                                            <li>1kg</li>
                                            <li>2kg</li>
                                            <li>5kg</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cr-add-card">
                                    <div class="cr-qty-main">
                                        <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                            class="quantity" />
                                        <button type="button" id="add_model" class="plus">
                                            +
                                        </button>
                                        <button type="button" id="sub_model" class="minus">
                                            -
                                        </button>
                                    </div>
                                    <div class="cr-add-button">
                                        <button type="button" class="cr-button">
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                src="views/assets/img/product/4.jpg" alt="product-1" /></a>
                        <div class="cr-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Fresh Pomegranate</a>
                            <span class="cart-price"><span>$56.00</span> x 1kg</span>
                            <div class="cr-cart-qty">
                                <div class="cart-qty-plus-minus">
                                    <button type="button" class="plus">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity" />
                                    <button type="button" class="minus">-</button>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="crside_pro_img"><img
                                src="views/assets/img/product/2.jpg" alt="product-2" /></a>
                        <div class="cr-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Green Apples</a>
                            <span class="cart-price"><span>$75.00</span> x 1kg</span>
                            <div class="cr-cart-qty">
                                <div class="cart-qty-plus-minus">
                                    <button type="button" class="plus">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity" />
                                    <button type="button" class="minus">-</button>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="crside_pro_img"><img
                                src="views/assets/img/product/3.jpg" alt="product-3" /></a>
                        <div class="cr-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Watermelon - Small</a>
                            <span class="cart-price"><span>$48.00</span> x 5kg</span>
                            <div class="cr-cart-qty">
                                <div class="cart-qty-plus-minus">
                                    <button type="button" class="plus">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity" />
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
                        <li class="colors c1 active-colors"></li>
                        <li class="colors c2"></li>
                        <li class="colors c3"></li>
                        <li class="colors c4"></li>
                        <li class="colors c5"></li>
                        <li class="colors c6"></li>
                        <li class="colors c7"></li>
                        <li class="colors c8"></li>
                        <li class="colors c9"></li>
                        <li class="colors c10"></li>
                    </ul>
                </div>
                <div class="cr-tools-detail">
                    <div class="heading">
                        <h2>Dark mode</h2>
                    </div>
                    <ul class="dark-mode">
                        <li class="dark"></li>
                        <li class="white active-dark-mode"></li>
                    </ul>
                </div>
                <div class="cr-tools-detail">
                    <div class="heading">
                        <h2>RTL mode</h2>
                    </div>
                    <ul class="rtl-mode">
                        <li class="rtl">
                            <img src="views/assets/img/tool/rtl.png" alt="rtl" />
                        </li>
                        <li class="ltr active-rtl-mode">
                            <img src="views/assets/img/tool/ltr.png" alt="ltr" />
                        </li>
                    </ul>
                </div>
                <div class="cr-tools-detail">
                    <div class="heading">
                        <h2>Backgrounds</h2>
                    </div>
                    <ul class="bg-panel">
                        <li class="bg-1">
                            <img src="views/assets/img/shape/bg-shape-1.png" alt="bg-shape-1" />
                        </li>
                        <li class="bg-2">
                            <img src="views/assets/img/shape/bg-shape-2.png" alt="bg-shape-2" />
                        </li>
                        <li class="bg-3">
                            <img src="views/assets/img/shape/bg-shape-3.png" alt="bg-shape-3" />
                        </li>
                        <li class="bg-4">
                            <img src="views/assets/img/shape/bg-shape-4.png" alt="bg-shape-4" />
                        </li>
                        <li class="bg-5">
                            <img src="views/assets/img/shape/bg-shape-5.png" alt="bg-shape-5" />
                        </li>
                        <li class="bg-6 active-bg-panel">
                            <img src="views/assets/img/shape/bg-shape-6.png" alt="bg-shape-6" />
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

<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:08 GMT -->

</html>