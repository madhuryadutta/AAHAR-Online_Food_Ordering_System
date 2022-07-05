<?php session_start();

// session_destroy();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AssameseMeals</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/product_st.css" type="text/css">
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

<body>
    <!-- Header Section Begin -->
    <header class="header">

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="admin/assets/img/name.jpg" height="90" width="100" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                <div class="hero__search__form">
                    <form action="search.php" method="POST">
                        <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                        <input type="text" placeholder="What do yo u need?" name="search">
                        <button type="submit" class="site-btn">SEARCH</button>
                    </form>
                </div>
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                    <li><a href="logout.php">Log out</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Alpha</a></li>
                            <li><a href="./contact.php">Beta</a></li>
                        </ul>
                    </nav>
                </div>
            
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="shoping-cart.php"><i class="fa fa-shopping-bag"></i></a></li>
                        </ul>
                        <div class="header__top__right__auth">
                            <?php
                            if (isset($_SESSION['name'])) {

                                echo $_SESSION['name'];
                            } else {

                                echo '<a href="login.php"><i class="fa fa-user"></i>Login</a>';
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

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