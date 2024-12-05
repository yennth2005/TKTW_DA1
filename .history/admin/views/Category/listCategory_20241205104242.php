<!-----------------------------------------------------------------------------------
    Item Name: Carrot - Multipurpose eCommerce HTML Template.
    Author: ashishmaraviya
    Version: 2.1
    Copyright 2024
----------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:02 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="admin, dashboard, ecommerce, panel" />
    <meta name="description" content="Carrot - Admin.">
    <meta name="author" content="ashishmaraviya">

    <title>Carrot - Admin.</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= BASE_URL_ADMIN_VIEW ?>assets/img/favicon/favicon.ico">

    <!-- Icon CSS -->
    <link href="<?= BASE_URL_ADMIN_VIEW ?>assets/css/vendor/materialdesignicons.min.css" rel="stylesheet">
    <link href="<?= BASE_URL_ADMIN_VIEW ?>assets/css/vendor/remixicon.css" rel="stylesheet">
    <link href="<?= BASE_URL_ADMIN_VIEW ?>assets/css/vendor/owl.carousel.min.css" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href='<?= BASE_URL_ADMIN_VIEW ?>assets/css/vendor/datatables.bootstrap5.min.css' rel='stylesheet'>
    <link href='<?= BASE_URL_ADMIN_VIEW ?>assets/css/vendor/responsive.datatables.min.css' rel='stylesheet'>
    <link href='<?= BASE_URL_ADMIN_VIEW ?>assets/css/vendor/daterangepicker.css' rel='stylesheet'>
    <link href="<?= BASE_URL_ADMIN_VIEW ?>assets/css/vendor/simplebar.css" rel="stylesheet">
    <link href="<?= BASE_URL_ADMIN_VIEW ?>assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL_ADMIN_VIEW ?>assets/css/vendor/apexcharts.css" rel="stylesheet">
    <link href="<?= BASE_URL_ADMIN_VIEW ?>assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet">

    <!-- Main CSS -->
    <link id="main-css" href="<?= BASE_URL_ADMIN_VIEW ?>assets/css/style.css" rel="stylesheet">

</head>

<body>
    <main class="wrapper sb-default ecom">
        <!-- Loader -->
        <div id="cr-overlay">
            <div class="loader"></div>
        </div>

        <!-- Header -->
        <?php include './views/components/header.php' ?>

        <!-- sidebar -->
        <?php include './views/components/sidebar.php' ?>

        <!-- Notify sidebar -->
        <div class="cr-notify-bar-overlay"></div>
        <div class="cr-notify-bar">
            <div class="cr-bar-title">
                <h6>Notifications<span class="label">12</span></h6>
                <a href="javascript:void(0)" class="close-notify"><i class="ri-close-line"></i></a>
            </div>
            <div class="cr-bar-content">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="alert-tab" data-bs-toggle="tab" data-bs-target="#alert"
                            type="button" role="tab" aria-controls="alert" aria-selected="true">Alert</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
                            type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log" type="button"
                            role="tab" aria-controls="log" aria-selected="false">Log</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="alert" role="tabpanel" aria-labelledby="alert-tab">
                        <div class="cr-alert-list">
                            <ul>
                                <li>
                                    <div class="icon cr-alert">
                                        <i class="ri-alarm-warning-line"></i>
                                    </div>
                                    <div class="detail">
                                        <div class="title">Your final report is overdue</div>
                                        <p class="time">Just now</p>
                                        <p class="message">Please submit your quarterly report before - June 15.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon cr-warn">
                                        <i class="ri-error-warning-line"></i>
                                    </div>
                                    <div class="detail">
                                        <div class="title">Your product campaign is stop!</div>
                                        <p class="time">5:45AM - 25/05/2023</p>
                                        <p class="message">Please submit your quarterly report before Jun 15.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon cr-success">
                                        <i class="ri-check-double-line"></i>
                                    </div>
                                    <div class="detail">
                                        <div class="title">Your payment is successfully processed</div>
                                        <p class="time">9:20PM - 19/06/2023</p>
                                        <p class="message">Check your account wallet. if there is any issue, create
                                            support ticket.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon cr-warn">
                                        <i class="ri-error-warning-line"></i>
                                    </div>
                                    <div class="detail">
                                        <div class="title">Budget threshold exceeded!</div>
                                        <p class="time">4:15AM - 01/04/2023</p>
                                        <p class="message">Budget threshold was exceeded for project "Carrot" B612
                                            elements.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon cr-warn">
                                        <i class="ri-close-line"></i>
                                    </div>
                                    <div class="detail">
                                        <div class="title">Project submission was decline!</div>
                                        <p class="time">4:15AM - 01/04/2023</p>
                                        <p class="message">Your project "B126" is declined by Theresa Mayeras.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon cr-success">
                                        <i class="ri-check-double-line"></i>
                                    </div>
                                    <div class="detail">
                                        <div class="title">Your payment is successfully processed</div>
                                        <p class="time">9:20PM - 19/06/2023</p>
                                        <p class="message">Check your account wallet. if there is any issue, create
                                            support ticket.</p>
                                    </div>
                                </li>
                                <li class="check"><a class="cr-primary-btn" href="chatapp.html">View all</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                        <div class="cr-message-list">
                            <ul>
                                <li>
                                    <a href="chatapp.html" class="reply">Reply</a>
                                    <div class="user">
                                        <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/user/9.jpg" alt="user">
                                        <span class="label online"></span>
                                    </div>
                                    <div class="detail">
                                        <a href="chatapp.html" class="name">Boris Whisli</a>
                                        <p class="time">5:30AM, Today</p>
                                        <p class="message">Hello, I am sending some file. Please use this in landing
                                            page. And make sure this all files are comppress.</p>
                                        <span class="download-files">
                                            <span class="download">
                                                <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/other/1.jpg" alt="image">
                                                <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                            </span>
                                            <span class="download">
                                                <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/other/2.jpg" alt="image">
                                                <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                            </span>
                                            <span class="download">
                                                <span class="file">
                                                    <i class="ri-file-ppt-line"></i>
                                                </span>
                                                <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <a href="chatapp.html" class="reply">Reply</a>
                                    <div class="user">
                                        <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/user/8.jpg" alt="user">
                                        <span class="label offline"></span>
                                    </div>
                                    <div class="detail">
                                        <a href="chatapp.html" class="name">Frank N. Stein</a>
                                        <p class="time">8:30PM, 05/12/2023</p>
                                        <p class="message">Please take a look on landing page. There is some bus to open
                                            popup model. and save form data.</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="chatapp.html" class="reply">Reply</a>
                                    <div class="user">
                                        <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/user/7.jpg" alt="user">
                                        <span class="label busy"></span>
                                    </div>
                                    <div class="detail">
                                        <a href="chatapp.html" class="name">Frank N. Stein</a>
                                        <p class="time">8:30PM, 05/12/2023</p>
                                        <p class="message">Please take a look on landing page. There is some bus to open
                                            popup model. and save form data.</p>
                                        <span class="download-files">
                                            <span class="download">
                                                <span class="file">
                                                    <i class="ri-file-zip-line"></i>
                                                </span>
                                                <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                            </span>
                                            <span class="download">
                                                <span class="file">
                                                    <i class="ri-file-text-line"></i>
                                                </span>
                                                <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                            </span>
                                            <span class="download">
                                                <span class="file">
                                                    <i class="ri-file-ppt-line"></i>
                                                </span>
                                                <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <a href="chatapp.html" class="reply">Reply</a>
                                    <div class="user">
                                        <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/user/6.jpg" alt="user">
                                        <span class="label busy"></span>
                                    </div>
                                    <div class="detail">
                                        <a href="chatapp.html" class="name">Paige Turner</a>
                                        <p class="time">4:30PM, 12/12/2023</p>
                                        <p class="message">Landing page issues are done. and now i am working on admin
                                            user module.</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="chatapp.html" class="reply">Reply</a>
                                    <div class="user">
                                        <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/user/5.jpg" alt="user">
                                        <span class="label busy"></span>
                                    </div>
                                    <div class="detail">
                                        <a href="chatapp.html" class="name">Allie Grater</a>
                                        <p class="time">8:30PM, 05/12/2023</p>
                                        <p class="message">Take marketing module task.</p>
                                    </div>
                                </li>
                                <li class="check"><a class="cr-primary-btn" href="chatapp.html">View all</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="log" role="tabpanel" aria-labelledby="log-tab">
                        <div class="cr-activity-list activity-list">
                            <ul>
                                <li>
                                    <span class="date-time">8 Thu<span class="time">11:30 AM - 05:10 PM
                                        </span></span>
                                    <p class="title">Project Submitted from Smith</p>
                                    <p class="detail">Lorem Ipsum is simply dummy text of the printing and
                                        lorem is typesetting industry.</p>
                                    <span class="download-files">
                                        <span class="download">
                                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/other/1.jpg" alt="image">
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                        <span class="download">
                                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/other/2.jpg" alt="image">
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                        <span class="download">
                                            <span class="file">
                                                <i class="ri-file-ppt-line"></i>
                                            </span>
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="date-time warn">7 Wed<span class="time">1:30 PM - 02:30 PM
                                        </span></span>
                                    <p class="title">Morgus pvt - project due</p>
                                    <p class="detail">Project modul delay for some bugs.</p>
                                    <span class="download-files">
                                        <span class="download">
                                            <span class="file">
                                                <i class="ri-file-zip-line"></i>
                                            </span>
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                        <span class="download">
                                            <span class="file">
                                                <i class="ri-file-text-line"></i>
                                            </span>
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                        <span class="download">
                                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/other/3.jpg" alt="image">
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="date-time">6 Tue<span class="time">9:30 AM - 11:00 AM
                                        </span></span>
                                    <p class="title">Interview for management dept.</p>
                                    <p class="detail">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form,
                                        by injected humour.</p>
                                    <span class="download-files">
                                        <span class="download">
                                            <span class="file">
                                                <i class="ri-file-zip-line"></i>
                                            </span>
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                        <span class="download">
                                            <span class="file">
                                                <i class="ri-file-text-line"></i>
                                            </span>
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                        <span class="download">
                                            <span class="file">
                                                <i class="ri-file-ppt-line"></i>
                                            </span>
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="date-time">5 Mon<span class="time">3:30 AM - 4:00 PM
                                        </span></span>
                                    <p class="title">Meeting with mr. Ken doe</p>
                                    <p class="detail">The majority have suffered alteration in some form,
                                        by injected humour.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="cr-main-content">
            <div class="container-fluid">
                <div class="cr-page-title cr-page-title-2">
                    <div class="cr-breadcrumb">
                        <h5>Product Category</h5>
                        <ul>
                            <li><a href="index.html">Carrot</a></li>
                            <li>Product Category</li>
                        </ul>
                    </div>
                </div>
                <!-- Page title & breadcrumb -->
                <!-- <form action="?act=search-user">
        <input type="text" name="search">
        <input type="submit" name="btn_search" value="Search">
    </form> -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="cr-card card-default product-list">
                            <div class="cr-card-content ">
                                <div class="table-responsive">
                                    <center><a href="?act=add-category" class="btn btn-warning">Create Category</a>
                                    </center>

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>User_ID</td>
                                                <td>Fullname</td>
                                                <td>Thao tác</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($categories as $category) {
                                                ?>
                                                <tr>

                                                    <td><?= $category['category_id'] ?></td>
                                                    <td><?= $category['category_name'] ?></td>
<<<<<<< Updated upstream
=======
                                                    <td><img src="<?= BASE_URL.$category['image'] ?>" width="100px" alt=""></td>
>>>>>>> Stashed changes
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <button type="button"
                                                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false" data-display="static">
                                                                <span class="sr-only"><i
                                                                        class="ri-settings-3-line"></i></span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item"
                                                                    href="index.php?act=update-category&id=<?= $category['category_id'] ?>">Edit</a>
                                                                <a class="dropdown-item"
                                                                    href="index.php?act=delete-category&id=<?= $category['category_id'] ?>">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include './views/components/footer.php' ?>

        <!-- Feature tools -->
        <div class="cr-tools-sidebar-overlay"></div>
        <div class="cr-tools-sidebar">
            <a href="javascript:void(0)" class="cr-tools-sidebar-toggle in-out">
                <i class="ri-settings-4-line"></i>
            </a>
            <div class="cr-bar-title">
                <h6>Tools</h6>
                <a href="javascript:void(0)" class="close-tools"><i class="ri-close-line"></i></a>
            </div>
            <div class="cr-tools-detail">
                <div class="cr-tools-block">
                    <h3>Sidebar</h3>
                    <div class="cr-tools-info">
                        <div class="cr-tools-item sidebar active" data-sidebar-mode-tool="light">
                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/tools/side-light.png" alt="light">
                            <p>light</p>
                        </div>
                        <div class="cr-tools-item sidebar" data-sidebar-mode-tool="dark">
                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/tools/side-dark.png" alt="dark">
                            <p>dark</p>
                        </div>
                        <div class="cr-tools-item sidebar" data-sidebar-mode-tool="bg-1">
                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/tools/side-bg-1.png" alt="background">
                            <p>Bg-1</p>
                        </div>
                        <div class="cr-tools-item sidebar" data-sidebar-mode-tool="bg-2">
                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/tools/side-bg-2.png" alt="background">
                            <p>Bg-2</p>
                        </div>
                        <div class="cr-tools-item sidebar" data-sidebar-mode-tool="bg-3">
                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/tools/side-bg-3.png" alt="background">
                            <p>Bg-3</p>
                        </div>
                        <div class="cr-tools-item sidebar" data-sidebar-mode-tool="bg-4">
                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/tools/side-bg-4.png" alt="background">
                            <p>Bg-4</p>
                        </div>
                    </div>
                </div>
                <div class="cr-tools-block">
                    <h3>Header</h3>
                    <div class="cr-tools-info">
                        <div class="cr-tools-item header active" data-header-mode="light">
                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/tools/header-light.png" alt="light">
                            <p>light</p>
                        </div>
                        <div class="cr-tools-item header" data-header-mode="dark">
                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/tools/header-dark.png" alt="dark">
                            <p>dark</p>
                        </div>
                    </div>
                </div>
                <div class="cr-tools-block">
                    <h3>Backgrounds</h3>
                    <div class="cr-tools-info">
                        <div class="cr-tools-item bg active" data-bg-mode="default">
                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/tools/bg-0.png" alt="default">
                            <p>Default</p>
                        </div>
                        <div class="cr-tools-item bg" data-bg-mode="bg-1">
                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/tools/bg-1.png" alt="bg-1">
                            <p>Bg-1</p>
                        </div>
                        <div class="cr-tools-item bg" data-bg-mode="bg-2">
                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/tools/bg-2.png" alt="bg-2">
                            <p>Bg-2</p>
                        </div>
                        <div class="cr-tools-item bg" data-bg-mode="bg-3">
                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/tools/bg-3.png" alt="bg-3">
                            <p>Bg-3</p>
                        </div>
                        <div class="cr-tools-item bg" data-bg-mode="bg-4">
                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/tools/bg-4.png" alt="bg-4">
                            <p>Bg-4</p>
                        </div>
                        <div class="cr-tools-item bg" data-bg-mode="bg-5">
                            <img src="<?= BASE_URL_ADMIN_VIEW ?>assets/img/tools/bg-5.png" alt="bg-5">
                            <p>Bg-5</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Vendor Custom -->
    <script src="<?= BASE_URL_ADMIN_VIEW ?>assets/js/vendor/jquery-3.6.4.min.js"></script>
    <script src="<?= BASE_URL_ADMIN_VIEW ?>assets/js/vendor/simplebar.min.js"></script>
    <script src="<?= BASE_URL_ADMIN_VIEW ?>assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL_ADMIN_VIEW ?>assets/js/vendor/apexcharts.min.js"></script>
    <script src="<?= BASE_URL_ADMIN_VIEW ?>assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= BASE_URL_ADMIN_VIEW ?>assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= BASE_URL_ADMIN_VIEW ?>assets/js/vendor/owl.carousel.min.js"></script>
    <!-- Data Tables -->
    <script src='<?= BASE_URL_ADMIN_VIEW ?>assets/js/vendor/jquery.datatables.min.js'></script>
    <script src='<?= BASE_URL_ADMIN_VIEW ?>assets/js/vendor/datatables.bootstrap5.min.js'></script>
    <script src='<?= BASE_URL_ADMIN_VIEW ?>assets/js/vendor/datatables.responsive.min.js'></script>
    <!-- Caleddar -->
    <script src="<?= BASE_URL_ADMIN_VIEW ?>assets/js/vendor/jquery.simple-calendar.js"></script>
    <!-- Date Range Picker -->
    <script src="<?= BASE_URL_ADMIN_VIEW ?>assets/js/vendor/moment.min.js"></script>
    <script src="<?= BASE_URL_ADMIN_VIEW ?>assets/js/vendor/daterangepicker.js"></script>
    <script src="<?= BASE_URL_ADMIN_VIEW ?>assets/js/vendor/date-range.js"></script>

    <!-- Main Custom -->
    <script src="<?= BASE_URL_ADMIN_VIEW ?>assets/js/main.js"></script>
    <script src="<?= BASE_URL_ADMIN_VIEW ?>assets/js/data/ecommerce-chart-data.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:34 GMT -->

</html>