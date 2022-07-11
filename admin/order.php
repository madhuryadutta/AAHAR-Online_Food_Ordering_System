<?php
include "../dbcon.php";
include "navbar.php";
$view_orders = mysqli_query($con, "SELECT * FROM `ORDERS` order by date DESC");
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

                        <div class="col-12">
                            <div class="ms-panel">
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


    </main>




    <!-- MODALS -->









</body>

</html>