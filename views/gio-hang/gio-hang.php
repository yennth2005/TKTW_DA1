<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:29 GMT -->

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
    <link rel="stylesheet" href="views/assets/css/styles.css">
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
                            <h2>Cart</h2>
                            <span> <a href="index.html">Home</a> / Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart -->
    <section class="section-cart padding-t-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>Cart</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (isset($_SESSION['user'])) { ?>
                <div class="row">
                    <div class="col-12">
                        <div class="cr-cart-content" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                            <div class="row">
                                <form action="?act=order" method="POST">
                                    <div class="cr-table-content">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td></td>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th>Phân loại</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($cartData as $item): ?>
                                                    <tr>
                                                        <input type="hidden" name="id[]" value="<?= $item['cart_item_id'] ?>">
                                                        <td>
                                                            <input type="checkbox" name="selected_products[]"
                                                                value="<?= $item['variant_id'] ?>"
                                                                onchange="toggleHiddenField(this)">
                                                            <input type="hidden" name="selected_products_data[]"
                                                                id="product_<?= $item['variant_id'] ?>"
                                                                value="<?= htmlspecialchars(json_encode($item)) ?>" disabled>
                                                        </td>

                                                        <script>
                                                            function toggleHiddenField(checkbox) {
                                                                var productId = checkbox.value;
                                                                var hiddenField = document.getElementById("product_" + productId);
                                                                hiddenField.disabled = !checkbox.checked; // Kích hoạt hoặc vô hiệu hóa trường hidden
                                                                // console.log(hiddenField);
                                                                // console.log(productId);
                                                            }

                                                        </script>
                                                        <td class="cr-cart-name">
                                                            <a href="?act=view-detail&color=<?= $item['variant_id'] ?>">
                                                                <img src="<?= $item['image'] ?>" alt="product-1"
                                                                    class="cr-cart-img">
                                                                <?= $item['product_name'] ?>
                                                            </a>
                                                        </td>
                                                        <td class="cr-cart-price">
                                                            <span class="amount"><?= number_format($item['price']) ?></span>
                                                            <input type="hidden" name="price[]" value="<?= $item['price'] ?>">
                                                        </td>
                                                        <td class="cr-cart-qty">
                                                            <div class="cart-qty-plus-minus">
                                                                <button type="button" class="plus">+</button>
                                                                <input type="number" placeholder="."
                                                                    value="<?= $item['quantity'] ?>" name="quantity[]"
                                                                    class="quantity" data-price="<?= $item['price'] ?>"
                                                                    onchange="updateTotal()">
                                                                <button type="button" class="minus">-</button>
                                                            </div>
                                                        </td>
                                                        <td class="cr-cart-color">
                                                            <!-- <select name="" id="variant">
                                                                <option value=""></option>
                                                            </select> -->
                                                            <div class="dropdown-center">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Chọn loại khác
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dropdown-item">
                                                                        <div class="variant-picker-item">
                                                                            <div class="variant-picker-label">
                                                                                Color: <span
                                                                                    class="fw-6 variant-picker-label-value value-currentColor"></span>
                                                                            </div>
                                                                            <div class="variant-picker-values"
                                                                                id="color-picker">
                                                                                <?php foreach ($allVariants as $variant): ?>
                                                                                    <input class="inputColor"
                                                                                        id="color-<?= $variant['variant_id'] ?>"
                                                                                        type="text" name="color"
                                                                                        value="<?= $variant['variant_id'] ?>"
                                                                                        data-price="<?= $variant['price'] ?>"
                                                                                        data-image="<?= $variant['image'] ?>"
                                                                                        <?= $variant['variant_id'] === $products['variant_id'] ? 'checked' : '' ?>>
                                                                                    <label class="hover-tooltip radius-60 color-btn"
                                                                                        for="color-<?= $variant['variant_id'] ?>">
                                                                                        <span class="btn-checkbox"
                                                                                            style="background-color: <?= $exchangeColor[$variant['color']] ?>"></span>
                                                                                        <span
                                                                                            class="tooltip"><?= ucfirst($variant['color']) ?></span>
                                                                                    </label>
                                                                                <?php endforeach; ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="dropdown-item">
                                                                        <div class="variant-picker-item">
                                                                            <div class="variant-picker-label">
                                                                                Size: <span
                                                                                    class="fw-6 variant-picker-label-value value-currentSize"></span>
                                                                            </div>
                                                                            <div class="variant-picker-values" id="size-picker">
                                                                                <?php foreach ($allSizes as $size): ?>
                                                                                    <input id="size-<?= $size['size_id'] ?>"
                                                                                        type="radio" name="size"
                                                                                        value="<?= $size['size_id'] ?>"
                                                                                        data-quantity="<?= $size['quantity'] ?>"
                                                                                        <?= $size['size_id'] === $products['size_id'] ? 'checked' : '' ?>>
                                                                                    <label class="style-text size-btn"
                                                                                        for="size-<?= $size['size_id'] ?>">
                                                                                        <p><?= $size['size_value'] ?></p>
                                                                                    </label>
                                                                                <?php endforeach; ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <span class="color"><?= $item['color'] ?> -
                                                                <?= $item['size_value'] ?></span>
                                                            <input type="hidden" name="size[]" value="<?= $item['size_id'] ?>">
                                                            <input type="hidden" name="product_id"
                                                                value="<?= $item['product_id'] ?>">
                                                            <input type="hidden" name="variant[]"
                                                                value="<?= $item['variant_id'] ?>">
                                                        </td>
                                                        <td class="cr-cart-subtotal">
                                                            <span
                                                                class="subtotal"><?= number_format($item['price'] * $item['quantity']) ?></span>
                                                        </td>
                                                        <td class="cr-cart-remove">
                                                            <a
                                                                href="?act=deleteProductFromCart&id=<?= $item['cart_item_id'] ?>">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="cr-cart-update-bottom">
                                                <a href="index.php" class="cr-links">Tiếp tục mua hàng</a>

                                                <div class="cart-summary">
                                                    <strong>Total: </strong>
                                                    <span id="cart-total">0 VND</span>
                                                </div>
                                                <input id="updateCartBtn" style="" type="submit" name='submit'
                                                    value="Cập nhật">
                                                <input type="submit" value="Thanh toán" name="submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.querySelector('form').addEventListener('btn_checkout', function (e) {
                        const checked = document.querySelectorAll('input[name="selected_products[]"]:checked');
                        if (checked.length === 0) {
                            e.preventDefault();
                            alert("Vui lòng chọn ít nhất một sản phẩm để thanh toán.");
                        }
                    });


                    // Hàm cập nhật tổng
                    function updateTotal() {
                        let total = 0;
                        document.querySelectorAll('tbody tr').forEach(row => {
                            const price = parseFloat(row.querySelector('.quantity').dataset.price);
                            const quantity = parseInt(row.querySelector('.quantity').value);
                            const subtotal = price * quantity;
                            row.querySelector('.subtotal').innerText = new Intl.NumberFormat().format(subtotal) + " VND";
                            total += subtotal;

                        });
                        document.getElementById('cart-total').innerText = new Intl.NumberFormat().format(total) + " VND";
                    }

                    // Đảm bảo cập nhật tổng ban đầu
                    updateTotal();
                </script>
            <?php } else { ?>
                <h3>
                    <a style="color: blue" href="?act=login">Đăng nhập ngay</a> để tiếp tục mua sắm
                </h3>
            <?php } ?>
        </div>
    </section>

    <!-- Popular products -->
    <section class="section-popular-products padding-tb-100" data-aos="fade-up" data-aos-duration="2000"
        data-aos-delay="400">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-30">
                        <div class="cr-banner">
                            <h2>Popular Products</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et viverra maecenas accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-popular-product">
                        <div class="slick-slide">
                            <div class="cr-product-card">
                                <div class="cr-product-image">
                                    <div class="cr-image-inner zoom-image-hover">
                                        <img src="views/assets/img/product/9.jpg" alt="product-1">
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
                                    <a href="product-left-sidebar.html" class="title">Best snakes with hazel nut
                                        mix pack 200gm</a>
                                    <p class="cr-price"><span class="new-price">$120.25</span> <span
                                            class="old-price">$123.25</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="cr-product-card">
                                <div class="cr-product-image">
                                    <div class="cr-image-inner zoom-image-hover">
                                        <img src="views/assets/img/product/10.jpg" alt="product-1">
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
                                    <a href="product-left-sidebar.html" class="title">Sweet snakes crunchy nut
                                        mix 250gm
                                        pack</a>
                                    <p class="cr-price"><span class="new-price">$100.00</span> <span
                                            class="old-price">$110.00</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="cr-product-card">
                                <div class="cr-product-image">
                                    <div class="cr-image-inner zoom-image-hover">
                                        <img src="views/assets/img/product/1.jpg" alt="product-1">
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
                                    <a href="product-left-sidebar.html" class="title">Best snakes with hazel nut
                                        mix pack 200gm</a>
                                    <p class="cr-price"><span class="new-price">$120.25</span> <span
                                            class="old-price">$123.25</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="cr-product-card">
                                <div class="cr-product-image">
                                    <div class="cr-image-inner zoom-image-hover">
                                        <img src="views/assets/img/product/2.jpg" alt="product-1">
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
                                    <a href="product-left-sidebar.html" class="title">Sweet snakes crunchy nut
                                        mix 250gm
                                        pack</a>
                                    <p class="cr-price"><span class="new-price">$100.00</span> <span
                                            class="old-price">$110.00</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="cr-product-card">
                                <div class="cr-product-image">
                                    <div class="cr-image-inner zoom-image-hover">
                                        <img src="views/assets/img/product/3.jpg" alt="product-1">
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
                                    <a href="product-left-sidebar.html" class="title">Sweet snakes crunchy nut
                                        mix 250gm
                                        pack</a>
                                    <p class="cr-price"><span class="new-price">$100.00</span> <span
                                            class="old-price">$110.00</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                <img src="views/assets/img/product/tab-1.jpg" alt="product-tab-2" class="product-image">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="cr-size-and-weight-contain">
                                <h2 class="heading">Peach Seeds Of Change Oraganic Quinoa, Brown fruit</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1900s,</p>
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
                                            class="quantity">
                                        <button type="button" id="add_model" class="plus">+</button>
                                        <button type="button" id="sub_model" class="minus">-</button>
                                    </div>
                                    <div class="cr-add-button">
                                        <button type="button" class="cr-button">Add to cart</button>
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

                </ul>
            </div>
            <div class="cr-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right"></td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right"></td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="?act=view-cart" class="cr-button">View Cart</a>
                    <a href="?act=checkout" class="cr-btn-secondary">Checkout</a>
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
    <script>

        document.addEventListener('DOMContentLoaded', () => {
            let inputColor = document.querySelectorAll(".inputColor");
            let BASE_URL = "http://localhost/TKTW_DA1/";
            let blockSize = document.querySelector("#size-picker");
            let colorSelect = document.querySelector("#size-id");
            let priceDisplay = document.querySelector("#price-value"); // Phần tử để hiển thị giá
            let imageDisplay = document.querySelector(".product-image");
            let selectedColor = ""; // Biến để lưu mã màu
            let selectedSize = ""; // Biến để lưu mã size

            inputColor.forEach(item => {
                item.addEventListener('click', function (event) {
                    selectedColor = event.target.value; // Lưu mã màu đã chọn
                    let selectedPrice = event.target.getAttribute('data-price'); // Lấy giá từ thuộc tính data-price
                    priceDisplay.textContent = new Intl.NumberFormat().format(selectedPrice) + "đ"; // Cập nhật giá hiển thị
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
                                input.addEventListener('change', function () {
                                    selectedSize = this.value; // Lưu mã size đã chọn
                                    document.querySelector('input[name="size_id"]').value = selectedSize; // Cập nhật giá trị size_id
                                    // console.log("Selected Size ID:", selectedSize);
                                    const quantityTotal = this.getAttribute('data-quantity');
                                    document.querySelector('.totalQuantity').innerHTML = quantityTotal
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
</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:29 GMT -->

</html>