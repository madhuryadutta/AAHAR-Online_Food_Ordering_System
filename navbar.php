<?php
include "dbcon.php";
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin= true;
    $cust_id = $_SESSION['cust_id'];
    $username = $_SESSION['username'];
  }
// session_start();
// if (isset($_SESSION["admin"])) {
//     $name = $_SESSION["admin"];
// } else {
//     header("location:index.php");
// }

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
    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="admin/assets/css/jquery-ui.min.css" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="admin/assets/css/slick.css" rel="stylesheet">
    <link href="admin/assets/css/datatables.min.css" rel="stylesheet">
    <!-- Costic styles -->
    <link href="admin/assets/css/style.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
    <!-- Preloader -->
    <!-- <div id="preloader-wrap">
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
    </div> -->



    <!-- Main Content -->
    <!-- <main class="body-content"> -->
    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">

        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.php"><img src="admin/assets/img/name.jpg" height="110px" width="50px" alt="logo"> </a>

        <span class="ms-toggler-bar bg-primary"></span>
        </div>


        <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
            <li class="ms-nav-item ms-search-form pb-0 py-0">
                <form class="ms-form1" method="POST" action="search.php">
                    <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                        <input type="search" class="ms-form-input" name="search" placeholder="Search here..." value=""> <i class="flaticon-search text-disabled"></i>
                        <button type="submit" value="submit" name="submit">Search</button>
                    </div>

                </form>
            </li>
            <li class="ms-nav-item ms-nav-user dropdown">
                <a href="profile.php" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="ms-user-img ms-img-round float-right" src="admin/assets/img/people/admin.png" >
                </a>
                <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
                    <li class="dropdown-menu-footer">
                        <a class="media fs-14 p-2" href="logout.php"> <span ><i class="flaticon-shut-down mr-2"></i> Logout</span>
                        </a>
                        <a class="media fs-14 p-2" href="logout.php"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

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
    <!-- Costic core JavaScript -->
    <script src="assets/js/framework.js"></script>
    <!-- Settings -->
    <script src="assets/js/settings.js"></script>
</body>

</html>