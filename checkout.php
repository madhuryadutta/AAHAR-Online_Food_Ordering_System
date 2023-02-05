<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>

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

   
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php require 'comps/nav.php    ' ?>
    <!-- Humberger Begin -->
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="manage_cart.php" method="POST">
                    <div class="row align-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul><?php 
                                foreach($_SESSION['cart'] as $key =>$value)
                                {
                                    $item_total=$value['Quantity']*$value['Price'];
                                    echo '<li>'.$value['Item_Name'].' (x'.$value['Quantity'].')<span>Rs.'.$item_total.'</span></li>';

                                }
                                    ?>  
                                </ul>
                                
                                
                                <?php 
                                    
                                    $gst = $_SESSION['cart_total']*0.05;
                                    $subtotal =$gst+$_SESSION['cart_total'];
                                    echo '<div class="checkout__order__subtotal">Cart Total <span>Rs.'.$_SESSION['cart_total'].'</span></div>
                                    <div class="checkout__order__subtotal">GST(5%) <span>Rs.'.$gst.'</span></div>
                                    <div class="checkout__order__total">Subotal <span>Rs.'.$subtotal.'</span></div>
                                            <div class="form-check">
                                            <input class="form-check-input green" type="radio" name="Payment" value="cod" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Cash On Delivery
                                            </label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Payment" value="paypal" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Pay pal
                                            </label>
                                            </div>
                                    <button type="submit" name="Place_Order" class="site-btn">PLACE ODER</button>
                                    <input type="hidden" name="subtotal" value="'.$subtotal.'">
                                    ';
                                    ?>
                                    <!-- <div class="checkout__input__checkbox">
                                        <label for="paypal">
                                            Paypal
                                            <input type="checkbox" id="paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="cod">
                                            Cash On Delivery
                                            <input type="checkbox" id="cod">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div> -->
                                    

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
  <?php require 'footer.php' ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

 

</body>

</html>