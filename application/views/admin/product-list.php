  <?php
// print_r($dataProduct);
// die();
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
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
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
                  <h2 class="pageheader-title">Concept - Bootstrap 4 Admin Dashboard Template </h2>
                  <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                  <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">E-coommerce</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Concept - Bootstrap 4 Admin Dashboard Template</li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
              <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="row" id="product-list">
                  <!-- // start list product -->
                  <?php foreach ($dataProduct as $key) {
	?>
                   <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="product-thumbnail">
                      <div class="product-img-head">
                        <div class="product-img">
                          <img src="<?php echo base_url() . $key['product_image'] ?>" alt="" class="img-fluid"></div>
                          <!-- <div class="ribbons"><div class="ribbons-text"><?php echo $key['product_point'] ?></div></div> -->
                        </div>
                        <div class="product-content">
                          <div class="product-content-head">
                            <h3 class="product-title">
                              <?php echo $key['product_name'] ?>
                            </h3>
                            <div class="product-rating d-inline-block">
                              <?php
for ($i = 0; $i < $key['product_vote']; $i++) {
		echo "<i class='fa fa-fw fa-star'></i>";
	}
	?>

                            </div>
                            <?php
for ($i = 5; $i > $key['product_vote']; $i--) {
		echo "<i class='fa fa-fw fa-star'></i>";
	}
	?>
                            <div class="product-price">$
                              <?php echo $key['product_price'] ?>
                            </div>
                          </div>
                          <div class="product-btn">
                            <a href="#" class="btn btn-outline-light">Details</a>
                            <a href="#" class="btn btn-outline-light"><i class="fas fa-exchange-alt"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php }?>
                  <!-- // end list product -->
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link " href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="product-sidebar">
                  <div class="product-sidebar-widget">
                    <h4 class="mb-0">E-Commerce Filter</h4>
                  </div>
                  <div class="product-sidebar-widget">
                    <h4 class="product-sidebar-widget-title">Size</h4>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="checkbox-filter custom-control-input" id="size-1">
                      <label class="custom-control-label" for="size-1">Small</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="checkbox-filter custom-control-input" id="size-2">
                      <label class="custom-control-label" for="size-2">Medium</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="checkbox-filter custom-control-input" id="size-3">
                      <label class="custom-control-label" for="size-3">Large</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="checkbox-filter custom-control-input" id="size-4">
                      <label class="custom-control-label" for="size-4">Extra Large</label>
                    </div>
                  </div>
                  <div class="product-sidebar-widget">
                    <h4 class="product-sidebar-widget-title">Price</h4>
                    <div class="custom-control custom-checkbox">
                      <input type="radio" name="price-radio" class="checkbox-filter custom-control-input" id="price-1">
                      <label class="custom-control-label" for="price-1">$$ (up to 100$)</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="radio" name="price-radio" class="checkbox-filter custom-control-input" id="price-2">
                      <label class="custom-control-label" for="price-2">$$$ (up to 1000$)</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="radio" name="price-radio" class="checkbox-filter custom-control-input" id="price-3">
                      <label class="custom-control-label" for="price-3">$$$$ (up to 1000$)</label>
                    </div>
                  </div>
                  <div class="product-sidebar-widget">
                    <h4 class="product-sidebar-widget-title">Vote</h4>
                    <div class="custom-control custom-checkbox">
                      <input type="radio" name="vote-radio" class="checkbox-filter custom-control-input" id="vote-1">
                      <label class="custom-control-label" for="vote-1"><i class='fa fa-fw fa-star'></i><i class='fa fa-fw fa-star'></i></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="radio" name="vote-radio" class="checkbox-filter custom-control-input" id="vote-2">
                      <label class="custom-control-label" for="vote-2"><i class='fa fa-fw fa-star'></i><i class='fa fa-fw fa-star'></i><i class='fa fa-fw fa-star'></i></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="radio" name="vote-radio" class="checkbox-filter custom-control-input" id="vote-3">
                      <label class="custom-control-label" for="vote-3"><i class='fa fa-fw fa-star'></i><i class='fa fa-fw fa-star'></i><i class='fa fa-fw fa-star'></i><i class='fa fa-fw fa-star'></i><i class='fa fa-fw fa-star'></i></label>
                    </div>
                  </div>

                  <div class="product-sidebar-widget d-flex flex-nowrap flex-row justify-content-center align-items-center">
                    <a  class="btn btn-outline-light" id="reset-filter">Reset Filter</a>
                    <a  class="btn btn-outline-light" id="apply-filter">Apply Filter</a>
                  </div>
                </div>
              </div>
            </div>
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
      $("#reset-filter").on("click", function(){
        $(".checkbox-filter").prop('checked', false);
      });

      let size = [], vote = [], price = [];
      // ajax apply fillter and connect tho database => return database after fetch data
      $("#apply-filter").click(function () {
        // get value of checkboxs
       size = [], vote = [], price = [];

        $("input.checkbox-filter:checked").map((index, elem) => {
          // console.log(elem.id);
          if(elem.id.includes('size')){
            size.push(Number(elem.id[elem.id.length - 1]));
          }
          if(elem.id.includes('price')){
            price.push(Number(elem.id[elem.id.length - 1]));
          }
          if(elem.id.includes('vote')){
            vote.push(Number(elem.id[elem.id.length - 1]));
          }
        });
        // console.log(size, vote, price );
        $.ajax({
          url: 'http://localhost:6677/codeigniter/index.php/admin/getProduct',
          type: 'POST',
          dataType: 'json',
          data: {"filter": {"size" : size, "vote" : vote, "price" : price }},
        })
        .done(function() {
          console.log("success ajax");
        })
        .fail(function() {
          console.log("error ajax");
        })
        .always(function() {
          console.log("complete ajax");
        });

      })
    </script>
  </body>

  </html>
