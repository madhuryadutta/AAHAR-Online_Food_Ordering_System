<?php
include "..//dbcon.php";
session_start();
if (isset($_SESSION["admin"])) {
    $name = $_SESSION["admin"];
} else {
    header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">


<!-- Start -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Panel</title>
    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
    <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins.css">
    <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/datatables.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
    <!-- Preloader -->
    <div id="preloader-wrap">
        <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
        </div>
    </div>
    <!-- Overlays -->
    <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
    <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
    <!-- Sidebar Navigation Left -->
    <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
        <!-- Logo -->
        <div class="logo-sn ms-d-block-lg">
            <a class="pl-0 ml-0 text-center" href="../index.php">
                <img src="assets/img/name.jpg" height="60px" width="80px" alt="logo">
            </a>
        </div>
        <!-- Navigation -->
        <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
            <!-- Dashboard -->
            <li class="menu-item">
                <a href="../admin/dashboard.php"> <span><i class="fas fa-clipboard-list fs-16"></i>Dashboard</span>
                </a>
            </li>
            <!-- /Dashboard -->
            <!-- Category -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="product"> <span><i class="fa fa-archive fs-16"></i>Category </span>
                </a>
                <ul id="product" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion">
                    <li> <a href="add_category.php">Add Category</a>
                    </li>
                    <li> <a href="view_category.php">View Category</a>
                    </li>


                </ul>
            </li>
            <!-- Category end -->
            <!-- Items -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#product1" aria-expanded="false" aria-controls="product"> <span><i class="fa fa-archive fs-16"></i>Items </span>
                </a>
                <ul id="product1" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion">
                    <li> <a href="add_item.php">Add Items</a>
                    </li>
                    <li> <a href="view_item.php">View Items</a>
                    </li>


                </ul>
            </li>
            <!-- Items end -->
            <!-- orders -->
            <li class="menu-item">
                <a href="order.php"> <span><i class="fas fa-clipboard-list fs-16"></i>Orders</span>
                </a>
            </li>
            <!-- orders end -->

            <!-- Invoice -->
            <li class="menu-item">
                <a href="invoice.php"> <span><i class="fas fa-file-invoice fs-16"></i>invoices </span>
                </a>

            </li>
            <!-- Invoice end -->
            <!-- customers-->
            <li class="menu-item">
                <a href="view_customer.php"> <span><i class="fas fa-user-friends fs-16"></i>Customers </span>
                </a>

            </li>
            <!-- Customers  end -->
            <li>
                <a class="media fs-14 p-4" href="../logout.php"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <!-- <main class="body-content"> -->
    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">
        <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft"> <span class="ms-toggler-bar bg-primary"></span>
            <span class="ms-toggler-bar bg-primary"></span>
            <span class="ms-toggler-bar bg-primary"></span>
        </div>
        <h3>Welcome To AssameseMeals <a href="../index.php"> Click Here For Customer View </a></h3>
        <div class="logo-sn logo-sm ms-d-block-sm">
            <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.php"><img src="assets/img/name.jpg" alt="logo"> </a>
        </div>
        <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
            <li class="ms-nav-item ms-search-form pb-0 py-0">
                <form class="ms-form" method="post" action="../search.php">
                    <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                        <input type="search" class="ms-form-input" name="search" placeholder="Search here..." value=""> <i class="flaticon-search text-disabled"></i>

                    </div>
                </form>
            </li>
            <li class="ms-nav-item ms-nav-user dropdown">
                <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="ms-user-img ms-img-round float-right" src="assets/img/people/admin.png" alt="people">
                </a>
                <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
                    <li class="dropdown-menu-footer">
                        <a class="media fs-14 p-2" href="../logout.php"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options"> <span class="ms-toggler-bar bg-primary"></span>
            <span class="ms-toggler-bar bg-primary"></span>
            <span class="ms-toggler-bar bg-primary"></span>
        </div>
    </nav>

    <!-- </main> -->
    <!-- MODALS -->
    </div>
    </aside>
    <!-- SCRIPTS -->
    <!-- Global Required Scripts Start -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/perfect-scrollbar.js">
    </script>
    <script src="assets/js/jquery-ui.min.js">
    </script>
    <!-- Global Required Scripts End -->
    <!-- Page Specific Scripts Start -->

    <script src="assets/js/Chart.bundle.min.js">
    </script>
    <script src="assets/js/widgets.js"> </script>
    <script src="assets/js/clients.js"> </script>
    <script src="assets/js/Chart.Financial.js"> </script>
    <script src="assets/js/d3.v3.min.js">
    </script>
    <script src="assets/js/topojson.v1.min.js">
    </script>
    <script src="assets/js/datatables.min.js">
    </script>
    <script src="assets/js/data-tables.js">
    </script>
    <!-- Page Specific Scripts Finish -->
    <!-- core JavaScript -->
    <script src="assets/js/framework.js"></script>
    <!-- Settings -->
    <script src="assets/js/settings.js"></script>
</body>

</html>