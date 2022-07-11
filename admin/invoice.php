<?php
include "../dbcon.php";
include "navbar.php";
// $view_orders = mysqli_query($con, "SELECT * FROM `ORDERS` ");

// select * from order_items,orders where orders.order_id=
if (isset($_SESSION["admin"])) {
    $name = $_SESSION["admin"];
} else {
    header("location:index.php");
}
$view_order_details = mysqli_query($con, "SELECT * FROM orders  WHERE order_id='" . $_GET['id'] . "'");
$row1 = mysqli_fetch_assoc($view_order_details);
$cust_name = $row1["cust_id"];
$customer_name = mysqli_query($con, "SELECT cust_fname,phone, cust_lname ,email, address FROM `customer` where cust_id=$cust_name");
$row4 = mysqli_fetch_assoc($customer_name);
$view_order_items = mysqli_query($con, "SELECT * FROM `ORDER_items`WHERE order_id='" . $_GET['id'] . "'");
// $row = mysqli_fetch_array($view_bill);



?>
<html>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
    <main class="body-content">
        <div class="ms-content-wrapper">
            <div class="ms-content-wrapper">
                <div class="row">
                    <div class="col-md-12">

                        <div class="ms-panel">
                            <div class="ms-panel-header header-mini">
                                <div class="d-flex justify-content-between">


                                    <h6>Order Details</h6>
                                    <h6>ID: #<?php echo $_GET['id'] ?></h6>
                                </div>
                            </div>
                            <div class="ms-panel-body">
                                <!-- Invoice To -->


                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="invoice-address">
                                            <h3>Customer: <?php echo $row4["cust_fname"] . " " . $row4["cust_lname"]; ?></h3>
                                            <h5></h5>
                                            <p><?php echo $row4["email"]; ?></p>
                                            <p class="mb-0">Phone No: <?php echo $row4["phone"]; ?></p>
                                            <p class="mb-0">Address:</p>
                                            <p class="mb-0"><?php echo $row4["address"]; ?></p>
                                            
                                            <p>India</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <ul class="invoice-date">
                                            <li>Bill Date : <?php echo $row1["date"]; ?> </li>
                                            <li> . </li>
                                            <li>Payment Mode: <?php
                                                                if ($row1["payment_mode"] == 1) {
                                                                    $pay_mode = "Cash On Delivery";
                                                                } else {
                                                                    $pay_mode = "Prepaid";
                                                                }
                                                                echo $pay_mode; ?></span></td>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <!-- Invoice Table -->
                                <div class="ms-invoice-table table-responsive mt-5">
                                    <table class="table table-hover text-right thead-light">
                                        <thead>
                                            <tr class="text-capitalize">
                                                <th class="text-center w-5">id</th>
                                                <th class="text-left">description</th>
                                                <th>qty</th>
                                                <th>`</th>
                                                <th>Prices</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 0;
                                            while ($row = mysqli_fetch_assoc($view_order_items)) {

                                                $item_name = $row["item_id"];
                                                $item_info = mysqli_query($con, "SELECT *  FROM `items` where item_id=$item_name");
                                                $row2 = mysqli_fetch_assoc($item_info);

                                            ?>

                                                <tr>
                                                    <td class="text-center"><?php echo $row["item_id"]; ?></td>
                                                    <td class="text-left"><?php echo $row2["item_name"]; ?></td>
                                                    <td><?php echo $row["quantity"]; ?></td>
                                                    <td></td>
                                                    <td>₹<?php echo $row2["item_price"]; ?></td>
                                                </tr>
                                            <?php
                                                $i++;
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4">Total Cost( Including Taxes):</td>
                                                <td>₹<?php echo $row1["amount"]; ?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="invoice-buttons text-right"> <a href="#" class="btn btn-primary mr-2" onclick="window.print()">Print Invoice</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>