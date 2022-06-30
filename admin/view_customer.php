<?php
include "../dbcon.php";
include "navbar.php";
$view_customer = mysqli_query($con, "SELECT * FROM `customer`");
if (isset($_SESSION["admin"])) {
    $name = $_SESSION["admin"];
} else {
    header("location:index.php");
}
?>
<!DOCTYPE html>

<body>
    <main class="body-content">
        <div class="col-12">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6> customers</h6>
                </div>
            </div>
        </div>
        <div class="ms-panel-body">

            <div class="table-responsive">
                <table class="table table-hover thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">customer ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($view_customer)) {

                        ?>
                            <tr>
                                <th scope="row"><?php echo $row["cust_id"]; ?></th>
                                <td><?php echo $row["cust_fname"]; ?></td>
                                <td><?php echo $row["cust_lname"]; ?></td>
                                <td> <?php echo $row["phone"]; ?></td>
                                <td> <?php echo $row["email"]; ?></td>
                                <td> <?php echo $row["address"]; ?></td>




                            </tr>
                        <?php
                            $i++;
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>

</html>
<!-- Body Content Wrapper -->