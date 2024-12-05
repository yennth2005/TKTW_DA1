<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/product-full-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:28 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ecommerce, market, shop, mart, cart, deal, multipurpose, marketplace">
    <meta name="description" content="Carrot - Multipurpose eCommerce HTML Template.">
    <meta name="author" content="ashishmaraviya">

    <title>Carrot - Multipurpose eCommerce HTML Template</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= BASE_URL_VIEW ?>assets/img/logo/favicon.png">

    <!-- Icon CSS -->
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/vendor/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/vendor/remixicon.css">

    <!-- Vendor -->
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/vendor/animate.css">
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/vendor/aos.min.css">
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/vendor/range-slider.css">
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/vendor/jquery.slick.css">
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/vendor/slick-theme.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/style.css">
    <!-- font -->
    <!-- <link rel="stylesheet" href="fonts/fonts.css"> -->
    <!-- Icons -->
    <!-- <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/fonts/font-icons.css"> -->
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/drift-basic.min.css">
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/photoswipe.css">
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= BASE_URL_VIEW ?>assets/css/animate.css">
    <link rel="stylesheet " type="text/css" href="<?= BASE_URL_VIEW ?>assets/css/styles.css" />
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
    <?php include 'views/components/header.php' ?>



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
                            <h2>Product</h2>
                            <span> <a href="index.html">Home</a> - product</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- product detail -->
    <section class="flat-spacing-4 pt_0">
        <div class="tf-main-product section-image-zoom">
            <div class="container">
                <?php 
                     
                    if(isset($_GET['color'])){$variant=$_GET['color'];} ?>
                <form action="?act=add-to-cart" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="vehicle-detail-banner banner-content clearfix">
                                <div class="banner-slider">
                                    <div class="slider slider-for">
                                        <!-- slider -->
                                        <?php $count = 0;
                                        foreach ($allVariants as $image): ?>
                                            <div class="slider-banner-image">
                                                <div class="zoom-image-hover">
                                                    <img src="<?= $image['image'] ?>" alt="product-tab-<?= ++$count; ?>"
                                                        class="product-image">
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="slider slider-nav thumb-image">
                                        <?php foreach ($allVariants as $image): ?>
                                            <div class="thumbnail-image">
                                                <div class="thumbImg">
                                                    <img src="<?= $image['image'] ?>" alt="product-tab-1">
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tf-product-info-wrap position-relative">
                                <div class="tf-zoom-main"></div>
                                <div class="tf-product-info-list other-image-zoom">
                                    <div class="tf-product-info-title">
                                        <h5><?= htmlspecialchars($productDetail['product_name'] ?? "Tên sản phẩm không tồn tại", ENT_QUOTES, 'UTF-8') ?>
                                        </h5>
                                    </div>
                                    <div class="tf-product-info-badges">
                                        <div class="badges">Best seller</div>
                                        <div class="product-status-content">
                                            <i class="icon-lightning"></i>
                                            <p class="fw-6"></p>
                                        </div>
                                    </div>
                                    <input type="hidden" name="variant_id" value="<?=  $variant  ?>">
                                    <input type="hidden" name="size_id" value="<?= isset($_GET['size']) ? $_GET['size'] : ""?>">
                                    <input type="hidden" name="price" value="<?= $productDetail['price'] ?>">
                                    <div class="tf-product-info-price">
                                        <div class="price-on-sale" id="price-display">Giá: <span id="price-value"><?= number_format($productDetail['price']) ."đ"?></span></div>
                                        <div class="compare-at-price"><?= number_format($productDetail['price'])."đ"?></div>
                                        <div class="badges-on-sale"><span>20</span>% OFF</div>
                                    </div>

                                    <div class="tf-product-info-variant-picker">
                                        <!-- color -->
                                        <div class="variant-picker-item">
                                            <div class="variant-picker-label">
                                                Color: <span
                                                    class="fw-6 variant-picker-label-value value-currentColor"></span>
                                            </div>
                                            <div class="variant-picker-values" id="color-picker">
                                                <?php foreach ($allVariants as $variant): ?>
                                                    <input class="inputColor" id="color-<?= $variant['variant_id'] ?>" type="text"
                                                        name="color" value="<?= $variant['variant_id'] ?>"
                                                        data-price="<?= $variant['price'] ?>"
                                                        data-image="<?= $variant['image'] ?>"
                                                        <?= $variant['variant_id'] === $productDetail['variant_id'] ? 'checked' : '' ?>>
                                                    <label  class="hover-tooltip radius-60 color-btn"
                                                        for="color-<?= $variant['variant_id'] ?>">
                                                        <span class="btn-checkbox"
                                                            style="background-color: <?= $exchangeColor[$variant['color']] ?>"></span>
                                                        <span class="tooltip"><?= ucfirst($variant['color']) ?></span>
                                                    </label>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>

                                        <div class="variant-picker-item">
                                            <div class="variant-picker-label">
                                                Size: <span
                                                    class="fw-6 variant-picker-label-value value-currentSize"></span>
                                            </div>
                                            <div class="variant-picker-values" id="size-picker">
                                                <?php foreach ($allSizes as $size): ?>
                                                    <input id="size-<?= $size['size_id'] ?>" type="radio" name="size"
                                                        value="<?= $size['size_id'] ?>"
                                                        data-quantity="<?= $size['quantity'] ?>"
                                                        <?= $size['size_id'] === $productDetail['size_id'] ? 'checked' : '' ?>>
                                                    <label class="style-text size-btn" for="size-<?= $size['size_id'] ?>">
                                                        <p><?= $size['size_value'] ?></p>
                                                    </label>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tf-product-info-quantity">
                                        <div class="quantity-title fw-6">Số lượng</div>
                                        <div class="wg-quantity">
                                            <span class="btn-quantity btn-decrease" onclick="decreasePro()">-</span>
                                            <input type="text" class="quantity-product"  name="quantity" value="1">
                                            <span class="btn-quantity btn-increase" onclick="increasePro()">+</span>
                                        </div>
                                    </div>
                                    <div class="tf-product-info-quantity">
                                        <div class="">Kho: <span class="totalQuantity" id="totalQuantity"></span></div>
                                        
                                    </div>
                                    <script>
                                        const quantityInput = document.querySelector('.quantity-product'); // Lấy phần tử input duy nhất
                                        const totalQuantity = document.querySelector('.totalQuantity');
                                        console.log(totalQuantity);
                                        
                                        // totalQuantity.forEach((quantity)=>{
                                        //     console.log(quantity);
                                            
                                        // })
                                        const decreasePro = () => {
                                            let currentValue = parseInt(quantityInput.value); // Lấy giá trị hiện tại
                                            if (currentValue > 1) { // Đảm bảo không giảm xuống dưới 1
                                                quantityInput.value = currentValue - 1; // Giảm số lượng
                                            }
                                        }

                                        const increasePro = () => {
                                            let currentValue = parseInt(quantityInput.value); // Lấy giá trị hiện tại
                                            // if(currenValue < ){

                                            // } // Tăng số lượng
                                        }
                                    </script>
                                    <div class="tf-product-info-buy-button">
                                        <form class="add-to-cart">
                                            <!-- add cart -->
                                            <button name="btn_submit"
                                                class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>Add
                                                    to cart </span></button>
                                            
                                            <div class="w-100">
                                                <a href="#" class="btns-full">Buy with <img
                                                        src="<?= BASE_URL_VIEW ?>assets/img/payments/paypal.png"
                                                        alt=""></a>
                                                <a href="#" class="payment-more-option">More payment options</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tf-product-info-extra-link">
                                        <a href="#compare_color" data-bs-toggle="modal" class="tf-product-extra-icon">
                                            <div class="icon">
                                                <img src="<?= BASE_URL_VIEW ?>assets/img/item/compare.svg" alt="">
                                            </div>
                                            <div class="text fw-6">Compare color</div>
                                        </a>
                                        <a href="#ask_question" data-bs-toggle="modal" class="tf-product-extra-icon">
                                            <div class="icon">
                                                <i class="icon-question"></i>
                                            </div>
                                            <div class="text fw-6">Ask a question</div>
                                        </a>
                                        <a href="#delivery_return" data-bs-toggle="modal" class="tf-product-extra-icon">
                                            <div class="icon">
                                                <svg class="d-inline-block" xmlns="http://www.w3.org/2000/svg"
                                                    width="22" height="18" viewBox="0 0 22 18" fill="currentColor">
                                                    <path
                                                        d="M21.7872 10.4724C21.7872 9.73685 21.5432 9.00864 21.1002 8.4217L18.7221 5.27043C18.2421 4.63481 17.4804 4.25532 16.684 4.25532H14.9787V2.54885C14.9787 1.14111 13.8334 0 12.4255 0H9.95745V1.69779H12.4255C12.8948 1.69779 13.2766 2.07962 13.2766 2.54885V14.5957H8.15145C7.80021 13.6052 6.85421 12.8936 5.74468 12.8936C4.63515 12.8936 3.68915 13.6052 3.33792 14.5957H2.55319C2.08396 14.5957 1.70213 14.2139 1.70213 13.7447V2.54885C1.70213 2.07962 2.08396 1.69779 2.55319 1.69779H9.95745V0H2.55319C1.14528 0 0 1.14111 0 2.54885V13.7447C0 15.1526 1.14528 16.2979 2.55319 16.2979H3.33792C3.68915 17.2884 4.63515 18 5.74468 18C6.85421 18 7.80021 17.2884 8.15145 16.2979H13.423C13.7742 17.2884 14.7202 18 15.8297 18C16.9393 18 17.8853 17.2884 18.2365 16.2979H21.7872V10.4724ZM16.684 5.95745C16.9494 5.95745 17.2034 6.08396 17.3634 6.29574L19.5166 9.14894H14.9787V5.95745H16.684ZM5.74468 16.2979C5.27545 16.2979 4.89362 15.916 4.89362 15.4468C4.89362 14.9776 5.27545 14.5957 5.74468 14.5957C6.21392 14.5957 6.59575 14.9776 6.59575 15.4468C6.59575 15.916 6.21392 16.2979 5.74468 16.2979ZM15.8298 16.2979C15.3606 16.2979 14.9787 15.916 14.9787 15.4468C14.9787 14.9776 15.3606 14.5957 15.8298 14.5957C16.299 14.5957 16.6809 14.9776 16.6809 15.4468C16.6809 15.916 16.299 16.2979 15.8298 16.2979ZM18.2366 14.5957C17.8853 13.6052 16.9393 12.8936 15.8298 12.8936C15.5398 12.8935 15.252 12.943 14.9787 13.04V10.8511H20.0851V14.5957H18.2366Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="text fw-6">Delivery & Return</div>
                                        </a>
                                        <a href="#share_social" data-bs-toggle="modal" class="tf-product-extra-icon">
                                            <div class="icon">
                                                <i class="icon-share"></i>
                                            </div>
                                            <div class="text fw-6">Share</div>
                                        </a>
                                    </div>
                                    <div class="tf-product-info-delivery-return">
                                        <div class="row">
                                            <div class="col-xl-6 col-12">
                                                <div class="tf-product-delivery">
                                                    <div class="icon">
                                                        <i class="icon-delivery-time"></i>
                                                    </div>
                                                    <p>Estimate delivery times: <span class="fw-7">12-26 days</span>
                                                        (International), <span class="fw-7">3-6 days</span> (United
                                                        States).
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-12">
                                                <div class="tf-product-delivery mb-0">
                                                    <div class="icon">
                                                        <i class="icon-return-order"></i>
                                                    </div>
                                                    <p>Return within <span class="fw-7">7 days</span> of purchase.
                                                        Duties &
                                                        taxes are non-refundable.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-product-info-trust-seal">
                                        <div class="tf-product-trust-mess">
                                            <i class="icon-safe"></i>
                                            <p class="fw-6">Guarantee Safe <br> Checkout</p>
                                        </div>
                                        <div class="tf-payment">
                                            <img src="<?= BASE_URL_VIEW ?>assets/img/payments/visa.png" alt="">
                                            <img src="<?= BASE_URL_VIEW ?>assets/img/payments/img-1.png" alt="">
                                            <img src="<?= BASE_URL_VIEW ?>assets/img/payments/img-2.png" alt="">
                                            <img src="<?= BASE_URL_VIEW ?>assets/img/payments/img-3.png" alt="">
                                            <img src="<?= BASE_URL_VIEW ?>assets/img/payments/img-4.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="cr-paking-delivery">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                    data-bs-target="#description" type="button" role="tab" aria-controls="description"
                                    aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="additional-tab" data-bs-toggle="tab"
                                    data-bs-target="#additional" type="button" role="tab" aria-controls="additional"
                                    aria-selected="false">Information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                                    type="button" role="tab" aria-controls="review"
                                    aria-selected="false">Review</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="cr-tab-content">
                                    <div class="cr-description">
                                        <p><?= $productDetail['description'] ?></p>
                                    </div>
                                    <h4 class="heading">Packaging & Delivery</h4>
                                    <div class="cr-description">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                            perferendis dolor! Quis vel consequuntur repellat distinctio rem. Corrupti
                                            ratione alias odio, error dolore temporibus consequatur, nobis veniam odit
                                            laborum dignissimos consectetur quae vero in perferendis provident quis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                                <div class="cr-tab-content">
                                    <div class="cr-description">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                            sapiente
                                            doloribus debitis corporis, eaque dicta, repellat amet, illum adipisci vel
                                            perferendis dolor! Quis vel consequuntur repellat distinctio rem. Corrupti
                                            ratione alias odio, error dolore temporibus consequatur, nobis veniam odit
                                            laborum dignissimos consectetur quae vero in perferendis provident quis.</p>
                                    </div>
                                    <div class="list">
                                        <ul>
                                            <li><label>Brand <span>:</span></label>ESTA BETTERU CO</li>
                                            <li><label>Flavour <span>:</span></label>Super Saver Pack</li>
                                            <li><label>Diet Type <span>:</span></label>Vegetarian</li>
                                            <li><label>Weight <span>:</span></label>200 Grams</li>
                                            <li><label>Speciality <span>:</span></label>Gluten Free, Sugar Free</li>
                                            <li><label>Info <span>:</span></label>Egg Free, Allergen-Free</li>
                                            <li><label>Items <span>:</span></label>1</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="cr-tab-content-from">
                                    <?php foreach($comments as $comment): ?>
                                    <div class="post">
                                        <div class="content">
                                            <img src="<?= $comment['image'] ?>" alt="review">
                                            <div class="details">
                                                <span class="date"><?= $comment['date'] ?></span>
                                                <span class="name"><?= $comment['name'] ?></span>
                                            </div>
                                            
                                        </div>

                                        <p><?= $comment['title'] ?></p>
                                        <p><?= $comment['content'] ?></p>
                                        
                                    </div>
                                    <?php endforeach;?>
                                    <?php if(isset($_SESSION['user'])){?>
                                    <h4 class="heading">Add a Review</h4>
                                    <form action="?act=add-comment" method="POST">
                                        <input type="hidden" name="product_id" value="<?= $product_id ?>">
                                        
                                        <div class="cr-ratting-input">
                                            <input name="title" placeholder="Title*" type="text" required="">
                                        </div>
                                        <div class="cr-ratting-input form-submit">
                                            <textarea name="content" placeholder="Enter Your Comment"></textarea>
                                            <button class="cr-button" type="submit" value="Submit">Submit</button>
                                        </div>
                                    </form>
                                    <?php }else{?>
                                        <h6><a href="?act=login"><button class="btn btn-primary">Đăng nhập</button></a> để viết bình luận</h6>
                                        <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>

    </section>
    <!-- end product detail -->

    <!-- Popular product -->
    <section class="section-popular-product-shape padding-b-100">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-30">
                        <div class="cr-banner">
                            <h2>Popular Products</h2>
                        </div>
                        <!-- <div class="cr-banner-sub-title">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore lacus vel facilisis.
                            </p>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="product-content row mb-minus-24" id="MixItUpDA2FB7">
                <div class="col-xl-3 col-lg-4 col-12 mb-24">
                    <div class="row mb-minus-24 sticky">
                        <div class="col-lg-12 col-sm-6 col-6 cr-product-box mb-24">
                            <div class="cr-product-tabs">
                                <ul>
                                    <li class="active" data-filter="all">All</li>
                                    <?php foreach ($cates as $cate) { ?>
                                        <li data-filter=".<?= $cate['category_code'] ?>"><?= $cate['category_name'] ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 col-6 cr-product-box banner-480 mb-24">
                            <div class="cr-ice-cubes">
                                <img src="views/assets/img/product/product-banner.jpg" alt="product banner" />
                                <div class="cr-ice-cubes-contain">
                                    <h4 class="title">Juicy</h4>
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
                        <?php foreach ($products as $pro) { ?>
                            <div class="mix <?= $pro['category_code'] ?> col-xxl-3 col-xl-4 col-6 cr-product-box mb-24">
                                <div class="cr-product-card">
                                    <div class="cr-product-image">
                                        <div class="cr-image-inner zoom-image-hover">
                                            <img src="<?= $pro['image'] ?>" alt="product-1" />
                                        </div>
                                        <div class="cr-side-view">
                                            <a href="#" class="wishlist">
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
                                            <div class="cr-star">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-line"></i>
                                                <p>(4.5)</p>
                                            </div>
                                        </div>
                                        <a href="?act=view-detail&color=<?= $pro['color_id'] ?>"
                                            class="title"><?= $pro['product_name'] ?></a>
                                        <p class="cr-price">
                                            <span class="new-price"><?= number_format($pro['new_price']) ?> đ</span>
                                            <span class="old-price"><?= number_format($pro['sale_price']) ?> đ</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
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
                                src="<?= BASE_URL_VIEW ?>assets/img/product/4.jpg" alt="product-1"></a>
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
                                src="<?= BASE_URL_VIEW ?>assets/img/product/2.jpg" alt="product-2"></a>
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
                                src="<?= BASE_URL_VIEW ?>assets/img/product/3.jpg" alt="product-3"></a>
                        <div class="cr-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Watermelon - Small</a>
                            <span class="cart-price"><span>$48.00</span> x 5kg</span>
                            <div class="cr-cart-qty">
                                <div class="cart-qty-plus-minus">
                                    <button type="button" class="plus">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity" name="quantity">
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
                    <a href="?act=view-cart" class="cr-button">View Cart</a>
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
                            <img src="<?= BASE_URL_VIEW ?>assets/img/tool/rtl.png" alt="rtl">
                        </li>
                        <li class="ltr active-rtl-mode">
                            <img src="<?= BASE_URL_VIEW ?>assets/img/tool/ltr.png" alt="ltr">
                        </li>
                    </ul>
                </div>
                <div class="cr-tools-detail">
                    <div class="heading">
                        <h2>Backgrounds</h2>
                    </div>
                    <ul class="bg-panel">
                        <li class="bg-1">
                            <img src="<?= BASE_URL_VIEW ?>assets/img/shape/bg-shape-1.png" alt="bg-shape-1">
                        </li>
                        <li class="bg-2">
                            <img src="<?= BASE_URL_VIEW ?>assets/img/shape/bg-shape-2.png" alt="bg-shape-2">
                        </li>
                        <li class="bg-3">
                            <img src="<?= BASE_URL_VIEW ?>assets/img/shape/bg-shape-3.png" alt="bg-shape-3">
                        </li>
                        <li class="bg-4">
                            <img src="<?= BASE_URL_VIEW ?>assets/img/shape/bg-shape-4.png" alt="bg-shape-4">
                        </li>
                        <li class="bg-5">
                            <img src="<?= BASE_URL_VIEW ?>assets/img/shape/bg-shape-5.png" alt="bg-shape-5">
                        </li>
                        <li class="bg-6 active-bg-panel">
                            <img src="<?= BASE_URL_VIEW ?>assets/img/shape/bg-shape-6.png" alt="bg-shape-6">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor Custom -->
    <script src="<?= BASE_URL_VIEW ?>assets/js/vendor/jquery-3.6.4.min.js"></script>
    <script src="<?= BASE_URL_VIEW ?>assets/js/vendor/jquery.zoom.min.js"></script>
    <script src="<?= BASE_URL_VIEW ?>assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL_VIEW ?>assets/js/vendor/mixitup.min.js"></script>
    <script src="<?= BASE_URL_VIEW ?>assets/js/vendor/range-slider.js"></script>
    <script src="<?= BASE_URL_VIEW ?>assets/js/vendor/aos.min.js"></script>
    <script src="<?= BASE_URL_VIEW ?>assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="<?= BASE_URL_VIEW ?>assets/js/vendor/slick.min.js"></script>

    <!-- Main Custom -->
    <script src="<?= BASE_URL_VIEW ?>assets/js/main.js"></script>
</body>

<!-- Javascript -->
<script type="text/javascript" src="<?= BASE_URL_VIEW ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL_VIEW ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL_VIEW ?>assets/js/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL_VIEW ?>assets/js/carousel.js"></script>
<script type="text/javascript" src="<?= BASE_URL_VIEW ?>assets/js/count-down.js"></script>
<script type="text/javascript" src="<?= BASE_URL_VIEW ?>assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL_VIEW ?>assets/js/lazysize.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL_VIEW ?>assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL_VIEW ?>assets/js/drift.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL_VIEW ?>assets/js/wow.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL_VIEW ?>assets/js/multiple-modal.js"></script>
<!-- <script type="text/javascript" src="<?= BASE_URL_VIEW ?>assets/js/vendor/main.js"></script> -->
<script type="module" src="<?= BASE_URL_VIEW ?>assets/js/model-viewer.min.js"></script>
<script type="module" src="<?= BASE_URL_VIEW ?>assets/js/zoom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- <script>
    document.querySelectorAll(".inputColor, #size-picker").forEach((element) => {
  element.addEventListener("click", () => {
    // Kiểm tra xem phần tử được nhấn là color hay size
    const isColor = element.classList.contains("color-option");

    // Cập nhật trạng thái 'selected' cho phần tử chọn
    const options = document.querySelectorAll(
      isColor ? ".color-option" : ".size-option"
    );
    options.forEach((el) =>
      el.classList.remove(isColor ? "selected" : "active__size")
    );
    element.classList.add(isColor ? "selected" : "active__size");

    // Lấy giá trị cần thiết
    const dataVariationId = document
      .querySelector(".color-option.selected")
      .getAttribute("data-variationId");
    const dataSizeId = document
      .querySelector(".size-option.active__size")
      .getAttribute("data-sizeId");
    const dataProductId = document
      .querySelector(".detail")
      .getAttribute("data-productId");

    // Cập nhật URL mà không tải lại trang
    const newUrl = `http://localhost/duan1/detail?product=${dataProductId}&color=${dataVariationId}&size=${dataSizeId}`;
    history.pushState(null, "", newUrl); // Cập nhật URL

    // Fetch dữ liệu mới từ server
    fetch(
      `http://localhost/duan1/Backend/controller/client/clientAjax.php?product=${dataProductId}&color=${dataVariationId}`
    )
      .then((res) => {
        if (!res.ok) {
          throw new Error(`Fetch error: ${res.status}`);
        }
        return res.json();
      })
      .then((data) => {
        console.log("Updated data:", data);

        // Cập nhật HTML dựa trên dữ liệu mới
        // Cập nhật màu sắc
        document.querySelector(".value__color").innerText = data.color;

        // Cập nhật kích thước
        document.querySelector(".value__size").innerText = data.size;

        // Cập nhật giá mới
        document.querySelector(
          ".detail__right--price--new"
        ).innerText = `${data.price} đ`;

        // Cập nhật giá cũ nếu có
        document.querySelector(".detail__right--price--old").innerText =
          data.old_price ? `${data.old_price} đ` : "";

        // Cập nhật hình ảnh sản phẩm
        document
          .querySelector(".detail__right--img img")
          .setAttribute("src", data.image);

        // Cập nhật tên và mã sản phẩm
        document.querySelector(".detail__right--name").innerText =
          data.productName;
        document.querySelector(".detail__right-code .value__color").innerText =
          data.variationCode;
        document.querySelector(".value__size").innerText = data.size;
      })
      .catch((error) => {
        console.error("Error connecting to server:", error);
      });
  });
});

</script> -->

<!-- <script>
    // let inputColor = document.querySelectorAll(".inputColor")
    // let BASE_URL = "http://localhost/TKTW_DA1/"
    // let blockSize = document.querySelector("#size-picker")
    // let imageColor = document.querySelector(".thumbImg");
    // let newPrice =document.querySelector(".price-on-sale");
    // let colorSelect = document.querySelector("#size-id");
    // inputColor.forEach(item => {
    //     item.addEventListener('click', function(event) {
    //        console.log(event.target.value);
    //        fetch(BASE_URL + '?act=get-size-by-color&variant_id=' + event.target.value)
    //         .then(response => response.json())
    //         .then(data => {
    //             console.log(data);
    //             blockSize.innerHTML = ""
    //             let UI = ``
    //             data.forEach(size => {
    //                 UI += `
    //                     <input id="size-${size.size_id}" type="radio" name="size"
    //                         value="${size.size_id}"
    //                         data-quantity="${size.quantity}">
    //                     <label class="style-text size-btn" for="size-${size.size_id}">
    //                         <p>${size.size_value}</p>
    //                     </label>
    //                 `
    //             })
                
    //             blockSize.innerHTML = UI
    //             console.log(blockSize);

    //             // Lấy ID của các size
    //             const sizeInputs = blockSize.querySelectorAll('input[type="radio"]');
    //             const sizeIds = Array.from(sizeInputs).map(input => input.value);
    //             console.log(sizeIds); // In ra danh sách ID của các size
    //             sizeIds.forEach(size_id =>{
    //                 colorSelect.addEventListener((id)=>{
    //                     console.log(id);
                        
    //                 })
                    
    //             })
    //         })
    //         .catch(error => {
    //             console.log(error);
    //         });
    //         // fetch(BASE_URL + '?act=view-detail&color=' + event.target.value +'&product-id=' +idProduct)
    //         //     .then(response=>response.json())
    //         //     .then(color =>{
    //         //         console.log(color);
                    
    //         //     })
    //     })
    // })
  
    let inputColor = document.querySelectorAll(".inputColor");
    let BASE_URL = "http://localhost/TKTW_DA1/";
    let blockSize = document.querySelector("#size-picker");
    let colorSelect = document.querySelector("#size-id");

    inputColor.forEach(item => {
        item.addEventListener('click', function(event) {
            console.log(event.target.value);
            fetch(BASE_URL + '?act=get-size-by-color&variant_id=' + event.target.value)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    blockSize.innerHTML = "";
                    let UI = ``;
                    
                    data.forEach(size => {
                        UI += `
                            <input id="size-${size.size_id}" type="radio" name="size"
                                value="${size.size_id}"
                                data-quantity="${size.quantity}">
                            <label class="style-text size-btn" for="size-${size.size_id}">
                                <p>${size.size_value}</p>
                            </label>
                        `;
                    });
                    
                    blockSize.innerHTML = UI;
                    console.log(blockSize);

                    // Lấy ID của size khi click vào
                    const sizeInputs = blockSize.querySelectorAll('input[type="radio"]');
                    sizeInputs.forEach(input => {
                        input.addEventListener('change', function() {
                            console.log("Selected Size ID:", this.value);
                            // Nếu cần, bạn có thể lưu giá trị vào colorSelect
                            colorSelect.value = this.value; // Nếu colorSelect là một input
                        });
                    });
                })
                .catch(error => {
                    console.log(error);
                });
        });
    });


</script> -->
<!-- <script>
    let inputColor = document.querySelectorAll(".inputColor");
    let BASE_URL = "http://localhost/TKTW_DA1/";
    let blockSize = document.querySelector("#size-picker");
    let colorSelect = document.querySelector("#size-id");
    let selectedColor = ""; // Biến để lưu mã màu
    let selectedSize = ""; // Biến để lưu mã size

    inputColor.forEach(item => {
        item.addEventListener('click', function(event) {
            selectedColor = event.target.value; // Lưu mã màu đã chọn
            console.log("Selected Color:", selectedColor);
            fetch(BASE_URL + '?act=get-size-by-color&variant_id=' + selectedColor)
                .then(response => response.json())
                .then(data => {
                    // console.log(data);
                    blockSize.innerHTML = "";
                    let UI = ``;
                    
                    data.forEach(size => {
                        UI += `
                            <input id="size-${size.size_id}" type="radio" name="size"
                                value="${size.size_id}"
                                data-quantity="${size.quantity}">
                            <label class="style-text size-btn" for="size-${size.size_id}">
                                <p>${size.size_value}</p>
                            </label>
                        `;
                    });
                    //lấy giá tiền khi click vào
                    // const colorDatas =document.querySelector("#color-picker");
                    // console.log(colorDatas);
                    // // const colorPrices =document.querySelectorAll('color');
                    // // console.log(colorPrices);
                    // const dataPrice =document.querySelector('data-price');
                    // console.log(dataPrice);
                    
                    
                    
                    
                    blockSize.innerHTML = UI;
                    // console.log(blockSize);

                    // Lấy ID của size khi click vào
                    const sizeInputs = blockSize.querySelectorAll('input[type="radio"]');
                    sizeInputs.forEach(input => {
                        input.addEventListener('change', function() {
                            selectedSize = this.value; // Lưu mã size đã chọn
                            console.log("Selected Size ID:", selectedSize);

                            // Tạo đường dẫn mới
                            const newPath = `${BASE_URL}?act=view-detail&color=${selectedColor}&size=${selectedSize}`;
                            console.log("New Path:", newPath);
                            
                            // Cập nhật lịch sử trình duyệt mà không tải lại trang
                            history.pushState(null, "", newPath);
                            
                            // Nếu bạn muốn điều hướng đến đường dẫn mới ngay lập tức, hãy bỏ comment dòng dưới đây:
                            // window.location.href = newPath;
                        });
                    });
                })
                .catch(error => {
                    console.log(error);
                });
        });
    });
</script> -->
<script>

    document.addEventListener('DOMContentLoaded', () => {
        let inputColor = document.querySelectorAll(".inputColor");
        let BASE_URL = "http://localhost/TKTW_DA1/";
        let blockSize = document.querySelector("#size-picker");
        let colorSelect = document.querySelector("#size-id");
        let priceDisplay = document.querySelector("#price-value"); // Phần tử để hiển thị giá
        let imageDisplay =document.querySelector(".product-image");
        let selectedColor = ""; // Biến để lưu mã màu
        let selectedSize = ""; // Biến để lưu mã size

        inputColor.forEach(item => {
            item.addEventListener('click', function(event) {
                selectedColor = event.target.value; // Lưu mã màu đã chọn
                let selectedPrice = event.target.getAttribute('data-price'); // Lấy giá từ thuộc tính data-price
                priceDisplay.textContent = new Intl.NumberFormat().format(selectedPrice)+"đ"; // Cập nhật giá hiển thị
                const selectedImage = event.target.getAttribute('data-image');
                // console.log(imageDisplay);
                imageDisplay.src = selectedImage
                // console.log("Selected Color:", selectedColor);
                
                

                fetch(BASE_URL + '?act=get-size-by-color&variant_id=' + selectedColor)
                    .then(response => response.json())
                    .then(data => {
                        blockSize.innerHTML = "";
                        let UI = ``;
                        
                        data.forEach(size => {
                            UI += `
                                <input id="size-${size.size_id}" type="radio" name="size"
                                    value="${size.size_id}"
                                    data-quantity="${size.quantity}">
                                <label class="style-text size-btn" for="size-${size.size_id}">
                                    <p>${size.size_value}</p>
                                </label>
                            `;
                        });
                        
                        blockSize.innerHTML = UI;

                        // Lấy ID của size khi click vào
                        const sizeInputs = blockSize.querySelectorAll('input[type="radio"]');
                        sizeInputs.forEach(input => {
                            input.addEventListener('change', function() {
                                selectedSize = this.value; // Lưu mã size đã chọn
                                document.querySelector('input[name="size_id"]').value = selectedSize; // Cập nhật giá trị size_id
                                // console.log("Selected Size ID:", selectedSize);
                                const quantityTotal = this.getAttribute('data-quantity');
                                document.querySelector('.totalQuantity').innerHTML =quantityTotal
                                // console.log(quantityTotal);
                                // Tạo đường dẫn mới
                                const newPath = `${BASE_URL}?act=view-detail&color=${selectedColor}&size=${selectedSize}`;
                                console.log("New Path:", newPath);
                                
                                // Cập nhật lịch sử trình duyệt mà không tải lại trang
                                history.pushState(null, "", newPath);
                                
                                // Nếu bạn muốn điều hướng đến đường dẫn mới ngay lập tức, hãy bỏ comment dòng dưới đây:
                                // window.location.href = newPath;
                            });
                        });
                    })
                    .catch(error => {
                        console.log(error);
                    });
            });
        });

        // Khởi tạo giá hiển thị với màu đã chọn mặc định
        // const checkedColor = document.querySelector('.inputColor:checked');
        // if (checkedColor) {
        //     priceDisplay.textContent = checkedColor.getAttribute('data-price');
        // }
        // const quantityInput = document.querySelector('.quantity-product'); // Lấy phần tử input duy nhất
                                        
        //                                 const decreasePro = () => {
        //                                     let currentValue = parseInt(quantityInput.value); // Lấy giá trị hiện tại
        //                                     if (currentValue > 1) { // Đảm bảo không giảm xuống dưới 1
        //                                         quantityInput.value = currentValue - 1; // Giảm số lượng
        //                                     }
        //                                 }

        //                                 const increasePro = () => {
        //                                     let currentValue = parseInt(quantityInput.value); // Lấy giá trị hiện tại
        //                                     if(currenValue < quantityTotal ){
        //                                         quantityInput.value = currentValue + 1;
        //                                     } else{
        //                                         alert("Vượt qu")
        //                                     }
        //                                 }
    });
</script>

<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/product-full-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:28 GMT -->

</html>