<?php
include "../dbcon.php";
include "navbar.php";
$view_orders = mysqli_query($con, "SELECT * FROM `ORDERS` ");
// select * from order_items,orders where orders.order_id=
if (isset($_SESSION["admin"])) {
    $name = $_SESSION["admin"];
} else {
    header("location:index.php");
}
// $result = mysqli_query($con, "SELECT id FROM `student`");
// $total_student=mysqli_num_rows($result);




// echo '<script>alert("Product added successfully")</script>';
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
                                    <h6>Order</h6>
                                    <h6>#135178</h6>
                                </div>
                            </div>
                            <div class="ms-panel-body">
                                <!-- Invoice To -->
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="invoice-address">
                                            <h3>Customer: </h3>
                                            <h5>Anny Farisha</h5>
                                            <p>Anny.123@hotmail.com</p>
                                            <p class="mb-0">1642 Cambridge Drive, Phoenix, 85029 Arizona</p>
                                            <p class="mb-0">Arizona</p>
                                            <p>Phoenix</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <ul class="invoice-date">
                                            <li>Invoice Date : Saturday, April 07 2019</li>
                                            <li>Due Date : Sunday, April 19 2019</li>
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
                                                <th>Unit Cost</th>
                                                <th>total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-left">Grilled Sandwich</td>
                                                <td>1</td>
                                                <td>$30</td>
                                                <td>$30</td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4">Total Cost:</td>
                                                <td>$155</td>
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