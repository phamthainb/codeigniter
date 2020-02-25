<?php
// if (!isset($_COOKIE['admin_login'])) {
//  header('Location: login.php');
// }
?>
<?php

// if (isset($_POST['submit'])) {
// 	// if (gettype($results) !== 'string') {
// 	echo '<script>alert("hiiii"); document.getElementById("myForm").reset();</script>';
// 	// header('Location: http://localhost:6677/codeigniter/index.php/admin/loadPages/product-add');
// 	// }
// }

?>
<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
        <link href="<?php echo base_url(); ?>assets/admin/vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/libs/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/fonts/fontawesome/css/fontawesome-all.css">
        <title>add product</title>
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- main wrapper -->
        <!-- ============================================================== -->
        <div class="dashboard-main-wrapper">
            <!-- ============================================================== -->
            <!-- navbar -->
            <!-- ============================================================== -->
            <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <a class="navbar-brand" href="index.php">Concept</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-right-top">
                            <li class="nav-item">
                                <div id="custom-search" class="top-search-bar">
                                    <input class="form-control" type="text" placeholder="Search..">
                                </div>
                            </li>
                            <li class="nav-item dropdown notification">
                                <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                    <li>
                                        <div class="notification-title"> Notification</div>
                                        <div class="notification-list">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action active">
                                                    <div class="notification-info">
                                                        <div class="notification-list-user-img"><img src="<?php echo base_url(); ?>assets/admin/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                        <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                            <div class="notification-date">2 min ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="notification-info">
                                                        <div class="notification-list-user-img"><img src="<?php echo base_url(); ?>assets/admin/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                        <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                            <div class="notification-date">2 days ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="notification-info">
                                                        <div class="notification-list-user-img"><img src="<?php echo base_url(); ?>assets/admin/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                        <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                            <div class="notification-date">2 min ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="notification-info">
                                                        <div class="notification-list-user-img"><img src="<?php echo base_url(); ?>assets/admin/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                        <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                            <div class="notification-date">2 min ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-footer"> <a href="#">View all notifications</a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown connection">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                    <li class="connection-list">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a href="#" class="connection-item"><img src="<?php echo base_url(); ?>assets/admin/images/github.png" alt=""> <span>Github</span></a>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a href="#" class="connection-item"><img src="<?php echo base_url(); ?>assets/admin/images/dribbble.png" alt=""> <span>Dribbble</span></a>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a href="#" class="connection-item"><img src="<?php echo base_url(); ?>assets/admin/images/dropbox.png" alt=""> <span>Dropbox</span></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a href="#" class="connection-item"><img src="<?php echo base_url(); ?>assets/admin/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a href="#" class="connection-item"><img src="<?php echo base_url(); ?>assets/admin/images/mail_chimp.png" alt=""><span>Mail chimp</span></a>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a href="#" class="connection-item"><img src="<?php echo base_url(); ?>assets/admin/images/slack.png" alt=""> <span>Slack</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="conntection-footer"><a href="#">More</a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown nav-user">
                                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>assets/admin/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                    <div class="nav-user-info">
                                        <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                        <span class="status"></span><span class="ml-2">Available</span>
                                    </div>
                                    <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- ============================================================== -->
            <!-- end navbar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- left sidebar -->
            <!-- ============================================================== -->
            <div class="nav-left-sidebar sidebar-dark">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-divider">
                                    Menu
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                    <div id="submenu-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="../admin/index.php">E Commerce Dashboard</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../admin/ecommerce-product.php">Product List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../admin/ecommerce-product-single.php">Product Single</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../admin/ecommerce-product-checkout.php">Product Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                                    <div id="submenu-5" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="./pages/general-table.php">General Tables</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="./pages/data-tables.php">Data Tables</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-divider">
                                    Features
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i>Pages</a>
                                    <div id="submenu-6" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="invoice.php">Invoice</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="blank-page.php">Blank Page</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="blank-page-header.php">Blank Page Header</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="login.php">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="404-page.php">404 page</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="sign-up.php">Sign up Page</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="forgot-password.php">Forgot Password</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
                                    <div id="submenu-7" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="inbox.php">Inbox</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="email-details.php">Email Detail</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="email-compose.php">Email Compose</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="message-chat.php">Message Chat</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end left sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- wrapper  -->
            <!-- ============================================================== -->
            <div class="dashboard-wrapper">
                <div class="dashboard-ecommerce">
                    <div class="container-fluid dashboard-content ">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header">
                                    <h2 class="pageheader-title">E-commerce Product Single </h2>
                                    <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">E-coommerce</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">E-Commerce Product Single</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->
                        <!-- //form add product to database -->
                        <form id="form-add-product" action="<?php echo (htmlspecialchars(base_url() . "index.php/admin/addProduct")) ?>" method="POST" enctype="multipart/form-data" >
                            <div class="row">
                                <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                                            <div class="product-slider">
                                                <div id="productslider-1" class="product-carousel carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <!-- <img class="d-block" src="<?php echo base_url(); ?>assets/admin/images/eco-slider-img-1.png" alt="First slide"> -->
                                                            <img id="product_image" src="<?php echo base_url(); ?>assets/admin/images/eco-slider-img-1.png" alt="your image" style="max-width: 285px; object-fit: cover;" />
                                                            <input accept="image/*" name="product_image" type='file' onchange="readURL(this);" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                                            <div class="product-details">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="mb-3">1. Name <br> <input type="text" name="product_name" id=""></div>
                                                    <div class="mb-3">2. Price <br> <input type="text" name="product_price" id=""></div>
                                                    <div class="mb-3">3. Discount <br> <input type="text" name="product_discount" id=""></div>
                                                    <div class="mb-3">4. Point <br> <input type="text" name="product_point" id=""></div>
                                                    <div class="mb-3">5. Inventory <br> <input type="text" name="product_inventory" id=""></div>
                                                    <div class="mb-3">6. Size <br>
                                                        <select name="product_size">
                                                            <option value="1" default>s</option>
                                                            <option value="2">m</option>
                                                            <option value="3">l</option>
                                                            <option value="4">xl</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-b-60">
                                            <div class="simple-card">
                                                <ul class="nav nav-tabs" id="myTab5" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active border-left-0" id="product-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="product-tab-1" aria-selected="true">Detail</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent5">
                                                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="product-tab-1">
                                                        <textarea name="product_detail" style="width: 100%; min-height: 75px; padding: 10px"></textarea>
                                                    </div>
                                                </div>
                                                <input name="submit" type="submit" class="btn btn-submit" value="submit" style="width: 100%; color: red; font-size: 24px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ============================================================== -->
                    <div class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="text-md-right footer-links d-none d-sm-block">
                                        <a href="javascript: void(0);">About</a>
                                        <a href="javascript: void(0);">Support</a>
                                        <a href="javascript: void(0);">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end footer -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end wrapper  -->
                <!-- ============================================================== -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1 -->
        <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery-3.3.1.min.js"></script>
        <!-- bootstap bundle js -->
        <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- slimscroll js -->
        <script src="<?php echo base_url(); ?>assets/admin/vendor/slimscroll/jquery.slimscroll.js"></script>
        <!-- main js -->
        <script src="<?php echo base_url(); ?>assets/admin/libs/js/main-js.js"></script>
        <script>
        //prev view upload image product
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#product_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        </script>
        <script>
        // $(document).ready(function () {
        //   alert("hi");
        //   console.log("hi");
        // })

        </script>
    </body>

</html>
