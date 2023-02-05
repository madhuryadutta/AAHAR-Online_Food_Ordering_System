<?php
include("dbcon.php");
include('comps/nav.php');  
$view_orders = mysqli_query($con, "SELECT * FROM `ORDERS` where cust_id=");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

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


    <!-- Model include -->

    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="js/script.js"></script>


</head>
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-6">
            <div class="ms-panel ms-dark-theme-panel">
                <div class="ms-panel-header">
                    <h6>About Me</h6>
                </div>
                <div class="ms-panel-body">
                    <h1>Heading 1</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <h2>Heading 2</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <h3>Heading 3</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <h4>Heading 4</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <h5>Heading 5</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <h6>Heading 6</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Order history</h6>
                </div>
                <div class="ms-panel-body">
                <div class="ms-panel-header">
                                    <h6> Order</h6>
                                </div>
                                <div class="ms-panel-body">

                                    <div class="table-responsive">
                                        <table class="table table-hover thead-primary">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Order ID</th>
                                                    <!-- <th scope="col">Order Name</th> -->
                                                    <th scope="col">Customer Name</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Order Status</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Payment Mode</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">View Bill</th>
                                                    <th scope="col">Change Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 0;
                                                while ($row = mysqli_fetch_assoc($view_orders)) {
                                                    $cust_name = $row["cust_id"];
                                                    $customer_name = mysqli_query($con, "SELECT cust_fname, cust_lname , address FROM `customer` where cust_id=$cust_name");
                                                    $row1 = mysqli_fetch_assoc($customer_name);

                                                    
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $row["order_id"]; ?></th>
                                                        <!-- <td>French Fries</td> -->
                                                        <td><?php echo $row1["cust_fname"] . " " . $row1["cust_lname"]; ?></td>
                                                        <td><?php echo substr($row1["address"], 0, 25); ?></td>
                                                        <td><span class="badge badge-success">
                                                                <?php
                                                                if ($row["status"] == 1) {
                                                                    $status = "Preparing Order";
                                                                }
                                                                if ($row["status"] == 2) {
                                                                    $status = "Order Receive";
                                                                }
                                                                if ($row["status"] == 3) {
                                                                    $status = "Delivery Boy Pick Order ";
                                                                }
                                                                if ($row["status"] == 4) {
                                                                    $status = "Delivered";
                                                                }
                                                                if ($row["status"] == 5) {
                                                                    $status = "Cancel";
                                                                }
                                                                echo $status; ?></span>
                                                        </td>
                                                        <td><?php echo $row["date"]; ?></td>
                                                        <td><span class="badge badge-success"><?php
                                                        if ($row["payment_mode"] == 1) {
                                                            $pay_mode = "Cash On Delivery";
                                                        } else {
                                                            $pay_mode = "Prepaid";
                                                        }
                                                            echo $pay_mode; ?></span></td>
                                                        <td><?php echo $row["amount"]; ?></td>
                                                        <td><span class="badge badge-primary"><button><a href="invoice.php?id=<?php echo $row["order_id"]; ?>"> View Bill</a></button></span></td>
                                                        <td><span class="badge badge-secondary"><button><a href="order_status.php?id=<?php echo $row["order_id"]; ?>"> Change Status</a></button></span></td>

                                                    <?php
                                                    $i++;
                                                }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>



    </div>
</div>

</main>