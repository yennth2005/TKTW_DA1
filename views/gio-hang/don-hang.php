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
    <style>
        .review-section {
  font-family: Arial, sans-serif;
  margin: 20px;
}
.rating {
  cursor: pointer;
  color: grey;
  font-size: 30px;
}
.star {
  transition: color 0.2s;
}
.star.filled {
  color: gold; /* Màu cho sao đã được đánh giá */
}
.rating-text {
  margin-left: 10px;
  font-size: 16px;
  color: #666;
}
    </style>
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
            <div class="cr-paking-delivery">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tatca-tab" data-bs-toggle="tab" data-bs-target="#tatca"
                            type="button" role="tab" aria-controls="tatca" aria-selected="true">Tất cả đơn hàng</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="dangxuly-tab" data-bs-toggle="tab" data-bs-target="#dangxuly"
                            type="button" role="tab" aria-controls="dangxuly" aria-selected="false">Đang xử lý</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="daxacnhan-tab" data-bs-toggle="tab" data-bs-target="#daxacnhan"
                            type="button" role="tab" aria-controls="daxacnhan" aria-selected="false">Đã xác
                            nhận</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="danggiaohang-tab" data-bs-toggle="tab"
                            data-bs-target="#danggiaohang" type="button" role="tab" aria-controls="danggiaohang"
                            aria-selected="false">Đang giao hàng</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="thanhcong-tab" data-bs-toggle="tab" data-bs-target="#thanhcong"
                            type="button" role="tab" aria-controls="thanhcong" aria-selected="false">Đã hoàn
                            thành</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="dabihuy-tab" data-bs-toggle="tab" data-bs-target="#dabihuy"
                            type="button" role="tab" aria-controls="dabihuy" aria-selected="false">Đã bị huỷ</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- tất cả đơn hàng -->
                    <div class="tab-pane fade show active" id="tatca" role="tabpanel" aria-labelledby="tatca-tab">
                        <?php foreach ($orderItems as $item): ?>
                            <div class="container mt-5">
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
                                                    <h5 class="card-title"><?= $item['product_name'] ?>
                                                    </h5>
                                                    <span class="badge bg-primary"><?= $item['state_name'];
                                                     ?></span>
                                                </div>
                                                <p class="card-text">Giá: <span
                                                        class="text-danger fw-bold"><?= number_format($item['price']) . "đ" ?></span>
                                                </p>
                                                <p class="card-text">Thời gian đặt hàng: <span
                                                        class="text-default fw-bold"><?= $item['order_date'] ?></span>
                                                </p>

                                                <div class="d-flex justify-content-between align-items-center mt-4">
                                                    <span class="fw-bold">Tổng tiền: <span
                                                            class="text-success"><?= number_format($item['total_amount']) . "đ" ?></span></span>
                                                    <div class="d-flex gap-2">
                                                        <?php if ($item['state_id'] >= 3) { ?>
                                                            <a href="?act=view-detail-order&order-id=<?= $item['order_id'] ?>">
                                                                <button class="btn btn-primary btn-lg">Xem chi tiết</button>
                                                            </a>
                                                            
                                                        <?php } else { ?>
                                                            <a href="?act=view-detail-order&order-id=<?= $item['order_id'] ?>">
                                                                <button class="btn btn-primary btn-lg">Xem chi tiết</button>
                                                            </a>
                                                            
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $item['order_id'] ?>" data-bs-whatever="@getbootstrap">Huỷ đơn hàng</button>

                                                            <div class="modal fade" id="exampleModal<?= $item['order_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lý do huỷ đơn hàng</h1>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form method="POST" action="?act=cancel-order&order-id=<?= $item['order_id'] ?>">
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Message:</label>
                                                                                <textarea class="form-control" id="message-text" name="message"></textarea>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                                                                                <button type="submit" name="submit_cancel" class="btn btn-primary">Gửi yêu cầu</button>
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- đang xử lý -->
                    <div class="tab-pane fade" id="dangxuly" role="tabpanel" aria-labelledby="dangxuly-tab">
                        <?php $validItemCount = 0;
                        foreach ($orderItems as $item):
                            if ($item['state_id'] == 1):
                                $validItemCount++;
                                ?>
                                <div class="container mt-5">
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
                                                    <h5 class="card-title"><?= $item['product_name'] ?>
                                                    </h5>
                                                    <span class="badge bg-primary"><?= $item['state_name'];
                                                     ?></span>
                                                </div>
                                                <p class="card-text">Giá: <span
                                                        class="text-danger fw-bold"><?= number_format($item['price']) . "đ" ?></span>
                                                </p>
                                                <p class="card-text">Thời gian đặt hàng: <span
                                                        class="text-default fw-bold"><?= $item['order_date'] ?></span>
                                                </p>

                                                <div class="d-flex justify-content-between align-items-center mt-4">
                                                    <span class="fw-bold">Tổng tiền: <span
                                                            class="text-success"><?= number_format($item['total_amount']) . "đ" ?></span></span>
                                                    <div class="d-flex gap-2">
                                                        
                                                            <a href="?act=view-detail-order&order-id=<?= $item['order_id'] ?>">
                                                                <button class="btn btn-primary btn-lg">Xem chi tiết</button>
                                                            </a>
                                                            
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#xulyModal<?= $item['order_id'];$item['state_id'] ?>" data-bs-whatever="xuly">Huỷ đơn hàng</button>

                                                            <div class="modal fade" id="xulyModal<?= $item['order_id'];$item['state_id'] ?>" tabindex="-1" aria-labelledby="xulyModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5" id="xulyModalLabel">Lý do huỷ đơn hàng</h1>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form method="POST" action="?act=cancel-order&order-id=<?= $item['order_id'] ?>">
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Message:</label>
                                                                                <textarea class="form-control" id="message-text" name="message"></textarea>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                                                                                <button type="submit" name="submit_cancel" class="btn btn-primary">Gửi yêu cầu</button>
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php
                            endif;
                        endforeach;
                        //nếu ko có
                        if ($validItemCount == 0): ?>
                            <div class="container mt-5">
                                <h2>Không có sản phẩm nào</h2>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- đã xác nhận -->
                    <div class="tab-pane fade" id="daxacnhan" role="tabpanel" aria-labelledby="daxacnhan-tab">
                        <?php $validItemCount = 0;
                        foreach ($orderItems as $item):
                            if ($item['state_id'] == 2):
                                $validItemCount++;
                                ?>
                                <div class="container mt-5">
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
                                                    <h5 class="card-title"><?= $item['product_name'] ?>
                                                    </h5>
                                                    <span class="badge bg-primary"><?= $item['state_name'];
                                                     ?></span>
                                                </div>
                                                <p class="card-text">Giá: <span
                                                        class="text-danger fw-bold"><?= number_format($item['price']) . "đ" ?></span>
                                                </p>
                                                <p class="card-text">Thời gian đặt hàng: <span
                                                        class="text-default fw-bold"><?= $item['order_date'] ?></span>
                                                </p>

                                                <div class="d-flex justify-content-between align-items-center mt-4">
                                                    <span class="fw-bold">Tổng tiền: <span
                                                            class="text-success"><?= number_format($item['total_amount']) . "đ" ?></span></span>
                                                    <div class="d-flex gap-2">
                                                        
                                                            <a href="?act=view-detail-order&order-id=<?= $item['order_id'] ?>">
                                                                <button class="btn btn-primary btn-lg">Xem chi tiết</button>
                                                            </a>
                                                            
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#xacnhanModal<?= $item['order_id'] ?>" data-bs-whatever="@getbootstrap">Huỷ đơn hàng</button>

                                                            <div class="modal fade" id="xacnhanModal<?= $item['order_id'] ?>" tabindex="-1" aria-labelledby="xacnhanModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5" id="xacnhanModalLabel">Lý do huỷ đơn hàng</h1>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="?act=cancel-order&order-id=<?= $item['order_id'] ?>">
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Message:</label>
                                                                                <textarea class="form-control" id="message-text" name="message"></textarea>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                                                                                <button type="submit" name="submit_cancel" class="btn btn-primary">Gửi yêu cầu</button>
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php
                            endif;
                        endforeach;
                        //nếu ko có
                        if ($validItemCount == 0): ?>
                            <div class="container mt-5">
                                <h2>Không có sản phẩm nào</h2>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- đang vận chuyển -->
                    <div class="tab-pane fade" id="danggiaohang" role="tabpanel" aria-labelledby="danggiaohang-tab">
                        <?php $validItemCount = 0;
                        foreach ($orderItems as $item):
                            if ($item['state_id'] == 3):
                                $validItemCount++;
                                ?>
                                <div class="container mt-5">
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
                                                    <h5 class="card-title"><?= $item['product_name'] ?>
                                                    </h5>
                                                    <span class="badge bg-primary"><?= $item['state_name'];
                                                     ?></span>
                                                </div>
                                                <p class="card-text">Giá: <span
                                                        class="text-danger fw-bold"><?= number_format($item['price']) . "đ" ?></span>
                                                </p>
                                                <p class="card-text">Thời gian đặt hàng: <span
                                                        class="text-default fw-bold"><?= $item['order_date'] ?></span>
                                                </p>

                                                <div class="d-flex justify-content-between align-items-center mt-4">
                                                    <span class="fw-bold">Tổng tiền: <span
                                                            class="text-success"><?= number_format($item['total_amount']) . "đ" ?></span></span>
                                                    <div class="d-flex gap-2">
                                                        
                                                            <a href="?act=view-detail-order&order-id=<?= $item['order_id'] ?>">
                                                                <button class="btn btn-primary btn-lg">Xem chi tiết</button>
                                                            </a>
                                                                                        
                                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal<?= $item['order_id'] ?>"
                                                            data-id="<?= $item['order_id'] ?>">
                                                            Xác nhận
                                                        </button>

                                                        <div class="modal fade"
                                                            id="deleteModal<?= $item['order_id'] ?>"
                                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="staticBackdropLabel">Xác
                                                                            nhận đơn hàng</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Xác nhận đã nhận hàng thành công?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Hủy</button>
                                                                        <a href="index.php?act=confirm-order-done&order-id=<?= $item['order_id'] ?>"
                                                                            class="btn btn-danger">Xác nhận</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                           
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php
                            endif;
                        endforeach;
                        //nếu ko có
                        if ($validItemCount == 0): ?>
                            <div class="container mt-5">
                                <h2>Không có sản phẩm nào</h2>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- giao hàng thành công -->
                    <div class="tab-pane fade" id="thanhcong" role="tabpanel" aria-labelledby="thanhcong-tab">
                        <?php $validItemCount = 0;
                        foreach ($orderItems as $item):
                            if ($item['state_id'] == 4):
                                $validItemCount++;
                                ?>
                                <div class="container mt-5">
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
                                                    <h5 class="card-title"><?= $item['product_name'] ?>
                                                    </h5>
                                                    <span class="badge bg-primary"><?= $item['state_name'];
                                                     ?></span>
                                                </div>
                                                <p class="card-text">Giá: <span
                                                        class="text-danger fw-bold"><?= number_format($item['price']) . "đ" ?></span>
                                                </p>
                                                <p class="card-text">Thời gian đặt hàng: <span
                                                        class="text-default fw-bold"><?= $item['order_date'] ?></span>
                                                </p>

                                                <div class="d-flex justify-content-between align-items-center mt-4">
                                                    <span class="fw-bold">Tổng tiền: <span
                                                            class="text-success"><?= number_format($item['total_amount']) . "đ" ?></span></span>
                                                    <div class="d-flex gap-2">
                                                        <a href="?act=view-detail-order&order-id=<?= $item['order_id'] ?>">
                                                            <button class="btn btn-primary btn-lg">Xem chi tiết</button>
                                                        </a>
                                                        <?php  if($item['order_id'] !=$viewComment['order_id']){ ?>
                                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $item['order_id'] ?>" data-bs-whatever="@getbootstrap">Đánh giá</button>
                                                        <?php }else{ ?>
                                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal<?= $item['order_id'] ?>" data-bs-whatever="@getbootstrap">Xem đánh giá</button>
                                                        <?php }?>
                                                        <div class="modal fade" id="exampleModal<?= $item['order_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Đánh giá sản phẩm</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form id="ratingForm" action="?act=add-comment" method="POST">
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name" class="col-form-label">Tiêu đề:</label>
                                                                        <input type="text" class="form-control" name="title" id="recipient-name" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name" class="col-form-label">Nội dung:</label>
                                                                        <input type="text" class="form-control" name="content" id="recipient-name" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <div class="review-section">
                                                                            <h3>Về Dịch Vụ</h3>
                                                                            <div class="rating">
                                                                                <span class="star" data-value="1">★</span>
                                                                                <span class="star" data-value="2">★</span>
                                                                                <span class="star" data-value="3">★</span>
                                                                                <span class="star" data-value="4">★</span>
                                                                                <span class="star" data-value="5">★</span>
                                                                            </div>
                                                                            <span class="rating-text">Bình thường</span>
                                                                            <input type="hidden" name="rating" id="rating" value="">
                                                                            <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                                                                            <input type="hidden" name="order_id" value="<?= $item['order_id'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                                                                    <button type="submit" class="btn btn-primary">Gửi Đánh Giá</button>
                                                                </div>
                                                            </form>

                                                            <script>
                                                                const stars = document.querySelectorAll('.star');
                                                                const ratingText = document.querySelector('.rating-text');
                                                                const ratingInput = document.getElementById('rating');
                                                                const form = document.getElementById('ratingForm');

                                                                stars.forEach(star => {
                                                                    star.addEventListener('click', function() {
                                                                        const ratingValue = this.getAttribute('data-value');

                                                                        // Cập nhật sao đã chọn
                                                                        stars.forEach(s => {
                                                                            s.classList.remove('filled');
                                                                        });
                                                                        for (let i = 0; i < ratingValue; i++) {
                                                                            stars[i].classList.add('filled');
                                                                        }

                                                                        // Cập nhật văn bản đánh giá
                                                                        ratingInput.value = ratingValue;
                                                                        ratingText.textContent = ratingValue <= 2 ? 'Kém' : ratingValue <= 4 ? 'Bình thường' : 'Tuyệt vời';
                                                                    });
                                                                });

                                                                // Gửi dữ liệu khi form được gửi
                                                                form.addEventListener('submit', function(event) {
                                                                    event.preventDefault(); // Ngăn không cho trang tải lại

                                                                    const formData = new FormData(form); // Lấy tất cả dữ liệu từ form

                                                                    // Gửi dữ liệu bằng AJAX
                                                                    fetch('index.php?act=add-comment', {
                                                                        method: 'POST',
                                                                        body: formData
                                                                    })
                                                                    .then(response => response.text())
                                                                    .then(data => {
                                                                        // Xử lý dữ liệu trả về từ máy chủ
                                                                        console.log(data);
                                                                    })
                                                                    .catch(error => console.error('Error:', error));
                                                                });
                                                            </script>
                                                            </div>
                                                        </div>
                                                        </div>

                                                        <div class="modal fade" id="updateModal<?= $item['order_id'] ?>" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="updateModalLabel">Sửa đánh giá sản phẩm</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form id="ratingForm" action="?act=add-comment" method="POST">
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name" class="col-form-label">Tiêu đề:</label>
                                                                        <input type="text" class="form-control" name="title" id="recipient-name" value="<?= $viewComment['title'] ?>" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name" class="col-form-label">Nội dung:</label>
                                                                        <input type="text" class="form-control" name="content" id="recipient-name" value="<?= $viewComment['content'] ?>" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <div class="review-section">
                                                                            <h3>Về Dịch Vụ</h3>
                                                                            <div class="rating">
                                                                                <span class="star" data-value="1">★</span>
                                                                                <span class="star" data-value="2">★</span>
                                                                                <span class="star" data-value="3">★</span>
                                                                                <span class="star" data-value="4">★</span>
                                                                                <span class="star" data-value="5">★</span>
                                                                            </div>
                                                                            <span class="rating-text">Bình thường</span>
                                                                            <input type="hidden" name="rating" id="rating" value="">
                                                                            <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                                                                            <input type="hidden" name="order_id" value="<?= $item['order_id'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                                                                    <button type="submit" class="btn btn-primary">Gửi Đánh Giá</button>
                                                                </div>
                                                            </form>

                                                            <script>
                                                                const stars = document.querySelectorAll('.star');
                                                                const ratingText = document.querySelector('.rating-text');
                                                                const ratingInput = document.getElementById('rating');
                                                                const form = document.getElementById('ratingForm');

                                                                stars.forEach(star => {
                                                                    star.addEventListener('click', function() {
                                                                        const ratingValue = this.getAttribute('data-value');

                                                                        // Cập nhật sao đã chọn
                                                                        stars.forEach(s => {
                                                                            s.classList.remove('filled');
                                                                        });
                                                                        for (let i = 0; i < ratingValue; i++) {
                                                                            stars[i].classList.add('filled');
                                                                        }

                                                                        // Cập nhật văn bản đánh giá
                                                                        ratingInput.value = ratingValue;
                                                                        ratingText.textContent = ratingValue <= 2 ? 'Kém' : ratingValue <= 4 ? 'Bình thường' : 'Tuyệt vời';
                                                                    });
                                                                });

                                                                // Gửi dữ liệu khi form được gửi
                                                                form.addEventListener('submit', function(event) {
                                                                    event.preventDefault(); // Ngăn không cho trang tải lại

                                                                    const formData = new FormData(form); // Lấy tất cả dữ liệu từ form

                                                                    // Gửi dữ liệu bằng AJAX
                                                                    fetch('index.php?act=add-comment', {
                                                                        method: 'POST',
                                                                        body: formData
                                                                    })
                                                                    .then(response => response.text())
                                                                    .then(data => {
                                                                        // Xử lý dữ liệu trả về từ máy chủ
                                                                        console.log(data);
                                                                    })
                                                                    .catch(error => console.error('Error:', error));
                                                                });
                                                            </script>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php
                            endif;
                        endforeach;
                        //nếu ko có
                        if ($validItemCount == 0): ?>
                            <div class="container mt-5">
                                <h2>Không có sản phẩm nào</h2>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- đã bị huỷ -->
                    <div class="tab-pane fade" id="dabihuy" role="tabpanel" aria-labelledby="dabihuy-tab">
                        <?php $validItemCount = 0;
                        foreach ($orderItems as $item):
                            if ($item['state_id'] == 5 || $item['state_id'] == 6):
                                $validItemCount++;
                                ?>
                                <div class="container mt-5">
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
                                                    <h5 class="card-title"><?= $item['product_name'] ?>
                                                    </h5>
                                                    <span class="badge bg-primary"><?= $item['state_name'];
                                                     ?></span>
                                                </div>
                                                <p class="card-text">Giá: <span
                                                        class="text-danger fw-bold"><?= number_format($item['price']) . "đ" ?></span>
                                                </p>
                                                <p class="card-text">Thời gian đặt hàng: <span
                                                        class="text-default fw-bold"><?= $item['order_date'] ?></span>
                                                </p>

                                                <div class="d-flex justify-content-between align-items-center mt-4">
                                                    <span class="fw-bold">Tổng tiền: <span
                                                            class="text-success"><?= number_format($item['total_amount']) . "đ" ?></span></span>
                                                    <div class="d-flex gap-2">
                    
                                                            <a href="?act=view-detail-order&order-id=<?= $item['order_id'] ?>">
                                                                <button class="btn btn-primary btn-lg">Xem chi tiết</button>
                                                            </a>
                                                            <button class="btn btn-danger btn-lg">Mua Lại</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php
                            endif;
                        endforeach;
                        //nếu ko có
                        if ($validItemCount == 0): ?>
                            <div class="container mt-5">
                                <h2>Không có sản phẩm nào</h2>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
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