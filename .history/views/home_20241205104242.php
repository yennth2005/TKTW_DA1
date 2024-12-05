<!-- ========================================================= 
    Item Name: Carrot - Multipurpose eCommerce HTML Template.
    Author: ashishmaraviya
    Version: 2.1
    Copyright 2024.
 ============================================================-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:29:37 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="ecommerce, market, shop, mart, cart, deal, multipurpose, marketplace" />
    <meta name="description" content="Baby store" />
    <meta name="author" content="ashishmaraviya" />

    <title>Baby store</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="views/assets/img/logo/logo2-removebg-preview.png" />

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

    <!-- Hero slider -->
    <section class="section-hero padding-b-100 next">
        <div class="cr-slider swiper-container">
            <div class="swiper-wrapper">
                <?php foreach($cates as $cate): ?>
                <div class="swiper-slide">
                    <div class="cr-hero-banner cr-banner-image-two" style="background-image: url('<?= $cate['image'] ?>')">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
<<<<<<< Updated upstream
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cr-hero-banner cr-banner-image-one">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
=======
                                    <div class="cr-left-side-contain slider-animation">
                                        <h5><span>100%</span> chính hãng</h5>
                                        <h1 style="font-family: 'Arial'">Hàng đẹp <br> chất lượng cao</h1>
                                        <p>
                                            <?= $cate['category_name'] ?>
                                        </p>
                                        <div class="cr-last-buttons">
                                            <a href="?act=view-category&category-id=<?= $cateP['category_id'] ?>" class="cr-button">
                                                shop now
                                            </a>
                                        </div>
                                    </div>
>>>>>>> Stashed changes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Categories -->
<<<<<<< Updated upstream

=======
    <section class="section-categories padding-b-100">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-lg-4 col-12 mb-24">
                    <div class="cr-categories">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php $cateActive = true; ?>
                            <?php foreach ($catePro as $cateP): ?>
                                <li class="nav-item" role="presentation">
                                <button class="nav-link <?= $cateActive ? 'active' : '' ?>"
                                    id="<?= $cateP['category_code'] ?>-tab" data-bs-toggle="tab"
                                    data-bs-target="#<?= $cateP['category_code'] ?>"
                                    aria-selected="<?= $cateActive ? 'true' : 'false' ?>">
                                    <?= $cateP['category_name'] ?> <span>(<?= $cateP['quantity'] ?> items)</span>
                                </button></li>
                                <?php $cateActive = false; ?>
                            <?php endforeach; ?>

                            <li class="nav-item" role="presentation">
                                <a class="center-categories-inner cr-view-more" href="#">
                                    View More
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-12 mb-24">
                    <div class="tab-content" id="myTabContent">
                        <?php foreach ($cates as $cate) {
                            $cateActive = 1;
                            ?>
                            <div class="tab-pane fade <?= $cate['category_id'] == $cateActive ? 'active show' : '' ?>"
                                id="<?= $cate['category_code'] ?>" role="tabpanel"
                                aria-labelledby="<?= $cate['category_code'] ?>-tab">
                                <div class="row mb-minus-24">
                                    <div class="col-12 cr-categories-box mb-24">
                                        <div class="cr-side-categories">
                                            <div class="categories-inner">
                                                <h4>
                                                    50
                                                    <span>
                                                        <small>%</small>
                                                        <small>Off</small>
                                                    </span>
                                                </h4>
                                            </div>
                                            <div class="categories-contain">
                                                <div class="categories-text">
                                                    <h5><?= $cate['category_name'] ?></h5>
                                                </div>
                                                <div class="categories-button">
                                                    <a href="?act=view-category&category-id=<?= $cate['category_id'] ?> "
                                                        class="cr-button">shop now</a>
                                                </div>
                                            </div>
                                            <img src="<?= $cate['image'] ?>" style="height: 450px" alt="categories-3" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
>>>>>>> Stashed changes

    <!-- Popular product -->
    <section class="section-popular-product-shape padding-b-100">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-30">
                        <div class="cr-banner">
                            <h2>Popular Products</h2>
                        </div>
<<<<<<< Updated upstream
                        <div class="cr-banner-sub-title">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore lacus vel facilisis. </p>
                        </div>
=======
                        <!-- <div class="cr-banner-sub-title">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore lacus vel facilisis.
                            </p>
                        </div> -->
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
            <div class="product-content row mb-minus-24" id="MixItUpDA2FB7">
                <div class="col-xl-3 col-lg-4 col-12 mb-24">
                    <div class="row mb-minus-24 sticky">
                        <div class="col-lg-12 col-sm-6 col-6 cr-product-box mb-24">
<<<<<<< Updated upstream
=======
                            <div class="cr-product-tabs">
                                <ul>
                                    <li class="active" data-filter="all">All</li>
                                    <?php foreach ($cates as $cate) { ?>
                                        <li data-filter=".<?= $cate['category_code'] ?>"><?= $cate['category_name'] ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
>>>>>>> Stashed changes
                        </div>
                        <div class="col-lg-12 col-sm-6 col-6 cr-product-box banner-480 mb-24">
                            <div class="cr-ice-cubes">
                                <img src="views/assets/img/product/product-banner.jpg" alt="product banner">
                                <div class="cr-ice-cubes-contain">
                                    <h4 class="title">Juicy </h4>
                                    <h5 class="sub-title">Fruits</h5>
                                    <span>100% Natural</span>
                                    <a href="shop-left-sidebar.html" class="cr-button">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-12 mb-24">
                    <div class="row mb-minus-24">
<<<<<<< Updated upstream
                        <?php foreach ($idProducts as $product): ?>
                            <?php
                            $baseUrl = 'http://localhost:81/TKTW_DA1/';
                            $imagePath = $baseUrl . str_replace('../', '', $product['image']);
                            ?>
                            <div class="mix snack col-xxl-3 col-xl-4 col-6 cr-product-box mb-24">
                                <div class="cr-product-card">
                                    <!-- Product Image -->
                                    <div class="cr-product-image">
                                        <div class="cr-image-inner zoom-image-hover">
                                            <img src="<?= htmlspecialchars($imagePath) ?>"
                                                alt="<?= htmlspecialchars($product['product_name']) ?>">
                                        </div>
                                        <div class="cr-side-view">
                                            <a href="javascript:void(0)" class="wishlist">
=======
                        <?php foreach ($products as $pro) { ?>
                            <div class="mix <?= $pro['category_code'] ?> col-xxl-3 col-xl-4 col-6 cr-product-box mb-24">
                                <div class="cr-product-card">
                                    <div class="cr-product-image">
                                        <div class="cr-image-inner zoom-image-hover">
                                            <img src="<?= $pro['image'] ?>" alt="product-1" />
                                        </div>
                                        <div class="cr-side-view">
                                            <a href="#" class="wishlist">
>>>>>>> Stashed changes
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                                                role="button">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                        <a class="cr-shopping-bag" href="javascript:void(0)">
                                            <i class="ri-shopping-bag-line"></i>
                                        </a>
                                    </div>
<<<<<<< Updated upstream
                                    <!-- Product Details -->
                                    <div class="cr-product-details">
                                        <div class="cr-brand">
                                            <a href="shop-left-sidebar.html">Snacks</a>
=======
                                    <div class="cr-product-details">
                                        <div class="cr-brand">
>>>>>>> Stashed changes
                                            <div class="cr-star">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
<<<<<<< Updated upstream
                                                <i class="ri-star-fill"></i>
                                                <p>(5.0)</p>
                                            </div>
                                        </div>
                                        <a href="product-left-sidebar.html"
                                            class="title"><?= htmlspecialchars($product['product_name']) ?></a>
                                        <p class="cr-price">
                                            <span class="new-price"><?= number_format($product['price'], 3, ',', '.') ?>
                                                VND</span>
=======
                                                <i class="ri-star-line"></i>
                                                <p>(4.5)</p>
                                            </div>
                                        </div>
                                        <a href="?act=view-detail&color=<?= $pro['color_id'] ?>"
                                            class="title"><?= $pro['product_name'] ?></a>
                                        <p class="cr-price">
                                            <span class="new-price"><?= number_format($pro['new_price']) ?> đ</span>
                                            <span class="old-price"><?= number_format($pro['sale_price']) ?> đ</span>
>>>>>>> Stashed changes
                                        </p>
                                    </div>
                                </div>
                            </div>
<<<<<<< Updated upstream
                        <?php endforeach; ?>
=======
                        <?php } ?>
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Product banner -->
    <section class="section-product-banner padding-b-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-banner-slider swiper-container">
                        <div class="swiper-wrapper">
                        <?php foreach ($cates as $cate):?>
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                <div class="cr-product-banner-image">
                                    <img src="<?= $cate['image'] ?>" alt="product-banner" />
                                    <div class="cr-product-banner-contain">
                                        <h5>
                                        <?= $cate['category_name'] ?>
                                        </h5>
                                        <p>
                                            <span class="percent">30%</span> Off
                                            <span class="text">on first order</span>
                                        </p>
                                        <div class="cr-product-banner-buttons">
                                            <a href="?act=view-category&category-id=<?= $cateP['category_id'] ?>" class="cr-button">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section-services padding-b-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-services-border" data-aos="fade-up" data-aos-duration="2000">
                        <div class="cr-service-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="cr-services">
                                        <div class="cr-services-image">
                                            <i class="ri-red-packet-line"></i>
                                        </div>
                                        <div class="cr-services-contain">
                                            <h4>Product Packing</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cr-services">
                                        <div class="cr-services-image">
                                            <i class="ri-customer-service-2-line"></i>
                                        </div>
                                        <div class="cr-services-contain">
                                            <h4>24X7 Support</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cr-services">
                                        <div class="cr-services-image">
                                            <i class="ri-truck-line"></i>
                                        </div>
                                        <div class="cr-services-contain">
                                            <h4>Delivery in 5 Days</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cr-services">
                                        <div class="cr-services-image">
                                            <i class="ri-money-dollar-box-line"></i>
                                        </div>
                                        <div class="cr-services-contain">
                                            <h4>Payment Secure</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Deal -->
    <section class="section-deal padding-b-100">
        <div class="bg-banner-deal">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cr-deal-rightside">
                            <div class="cr-deal-content" data-aos="fade-up" data-aos-duration="2000">
                                <span><code>35%</code> OFF</span>
                                <h4 class="cr-deal-title">Great deal on organic food.</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do maecenas accumsan lacus vel facilisis.
                                </p>
                                <div id="timer" class="cr-counter">
                                    <div class="cr-counter-inner">
                                        <h4>
                                            <span id="days"></span>
                                            Days
                                        </h4>
                                        <h4>
                                            <span id="hours"></span>
                                            Hrs
                                        </h4>
                                        <h4>
                                            <span id="minutes"></span>
                                            Min
                                        </h4>
                                        <h4>
                                            <span id="seconds"></span>
                                            Sec
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular product -->
    <section class="section-popular margin-b-100">
        <div class="container">
            <div class="row">
                <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12" data-aos="fade-up" data-aos-duration="2000">
                    <div class="cr-twocolumns-product">
                        <div class="slick-slide">
                            <div class="cr-product-card">
                                <div class="cr-product-image">
                                    <div class="cr-image-inner zoom-image-hover">
                                        <img src="views/assets/img/product/9.jpg" alt="product-1" />
                                    </div>
                                    <div class="cr-side-view">
                                        <a href="javascript:void(0)" class="wishlist">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                                            role="button">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                    </div>
                                    <a class="cr-shopping-bag" href="javascript:void(0)">
                                        <i class="ri-shopping-bag-line"></i>
                                    </a>
                                </div>
                                <div class="cr-product-details">
                                    <div class="cr-brand">
                                        <a href="shop-left-sidebar.html">Snacks</a>
                                        <div class="cr-star">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-line"></i>
                                            <p>(4.5)</p>
                                        </div>
                                    </div>
                                    <a href="product-left-sidebar.html" class="title">Best snakes with hazel nut mix
                                        pack 200gm</a>
                                    <p class="cr-price">
                                        <span class="new-price">$120.25</span>
                                        <span class="old-price">$123.25</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="cr-product-card">
                                <div class="cr-product-image">
                                    <div class="cr-image-inner zoom-image-hover">
                                        <img src="views/assets/img/product/10.jpg" alt="product-1" />
                                    </div>
                                    <div class="cr-side-view">
                                        <a href="javascript:void(0)" class="wishlist">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                                            role="button">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                    </div>
                                    <a class="cr-shopping-bag" href="javascript:void(0)">
                                        <i class="ri-shopping-bag-line"></i>
                                    </a>
                                </div>
                                <div class="cr-product-details">
                                    <div class="cr-brand">
                                        <a href="shop-left-sidebar.html">Snacks</a>
                                        <div class="cr-star">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <p>(5.0)</p>
                                        </div>
                                    </div>
                                    <a href="product-left-sidebar.html" class="title">Sweet snakes crunchy nut mix 250gm
                                        pack</a>
                                    <p class="cr-price">
                                        <span class="new-price">$100.00</span>
                                        <span class="old-price">$110.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="cr-product-card">
                                <div class="cr-product-image">
                                    <div class="cr-image-inner zoom-image-hover">
                                        <img src="views/assets/img/product/1.jpg" alt="product-1" />
                                    </div>
                                    <div class="cr-side-view">
                                        <a href="javascript:void(0)" class="wishlist">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                                            role="button">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                    </div>
                                    <a class="cr-shopping-bag" href="javascript:void(0)">
                                        <i class="ri-shopping-bag-line"></i>
                                    </a>
                                </div>
                                <div class="cr-product-details">
                                    <div class="cr-brand">
                                        <a href="shop-left-sidebar.html">Snacks</a>
                                        <div class="cr-star">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-line"></i>
                                            <p>(4.5)</p>
                                        </div>
                                    </div>
                                    <a href="product-left-sidebar.html" class="title">Best snakes with hazel nut mix
                                        pack 200gm</a>
                                    <p class="cr-price">
                                        <span class="new-price">$120.25</span>
                                        <span class="old-price">$123.25</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="cr-product-card">
                                <div class="cr-product-image">
                                    <div class="cr-image-inner zoom-image-hover">
                                        <img src="views/assets/img/product/2.jpg" alt="product-1" />
                                    </div>
                                    <div class="cr-side-view">
                                        <a href="javascript:void(0)" class="wishlist">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                                            role="button">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                    </div>
                                    <a class="cr-shopping-bag" href="javascript:void(0)">
                                        <i class="ri-shopping-bag-line"></i>
                                    </a>
                                </div>
                                <div class="cr-product-details">
                                    <div class="cr-brand">
                                        <a href="shop-left-sidebar.html">Snacks</a>
                                        <div class="cr-star">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <p>(5.0)</p>
                                        </div>
                                    </div>
                                    <a href="product-left-sidebar.html" class="title">Sweet snakes crunchy nut mix 250gm
                                        pack</a>
                                    <p class="cr-price">
                                        <span class="new-price">$100.00</span>
                                        <span class="old-price">$110.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="cr-product-card">
                                <div class="cr-product-image">
                                    <div class="cr-image-inner zoom-image-hover">
                                        <img src="views/assets/img/product/3.jpg" alt="product-1" />
                                    </div>
                                    <div class="cr-side-view">
                                        <a href="javascript:void(0)" class="wishlist">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                                            role="button">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                    </div>
                                    <a class="cr-shopping-bag" href="javascript:void(0)">
                                        <i class="ri-shopping-bag-line"></i>
                                    </a>
                                </div>
                                <div class="cr-product-details">
                                    <div class="cr-brand">
                                        <a href="shop-left-sidebar.html">Snacks</a>
                                        <div class="cr-star">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <p>(5.0)</p>
                                        </div>
                                    </div>
                                    <a href="product-left-sidebar.html" class="title">Sweet snakes crunchy nut mix 250gm
                                        pack</a>
                                    <p class="cr-price">
                                        <span class="new-price">$100.00</span>
                                        <span class="old-price">$110.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12" data-aos="fade-up" data-aos-duration="2000">
                    <div class="cr-products-rightbar">
                        <img src="views/assets/img/product/products-rightview.jpg" alt="products-rightview" />
                        <div class="cr-products-rightbar-content">
                            <h4>
                                Organic & Healthy <br />
                                Vegetables
                            </h4>
                            <div class="cr-off">
                                <span>25% <code>OFF</code></span>
                            </div>
                            <div class="rightbar-buttons">
                                <a href="shop-left-sidebar.html" class="cr-button">
                                    shop now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



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