<?php
include "..//dbcon.php";
include "navbar.php";
if (isset($_SESSION["admin"])) {
    $name = $_SESSION["admin"];
} else {
    header("location:index.php");
}

if (count($_POST) > 0) {
    mysqli_query($con, "UPDATE orders set `status`='" . $_POST['status'] . "' WHERE order_id='" . $_GET['id'] . "';");
    echo "<script>
                      alert('Order Status Updated Successfully');
                      window.location.href='order.php';
                      </script>";

}

$edit_status = mysqli_query($con, "SELECT * FROM category WHERE cat_id='" . $_GET['id'] . "'");
?>
<html>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
    <main class="body-content">
        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="ms-panel ms-panel-fh">
                        <div class="ms-panel-header">
                            <h6>Update Order Status</h6>
                        </div>
                        <div class="ms-panel-body">
                            <form action="" method="POST" class="needs-validation clearfix" novalidate>

                                <div class="form-row">






                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom22">Select Status</label>
                                        <div class="input-group">
                                            <select class="form-control" id="validationCustom22" name="status" id="status" required>

                                                <option value="1">Preparing Order</option>';
                                                <option value="2">Order Receive</option>';
                                                <option value="3">Delivery Boy Pick Order</option>';
                                                <option value="4">Delivered</option>';
                                                <option value="5">Cancel</option>';
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a Catagory.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-panel-header new">
                                    <button class="btn btn-secondary d-block" type="submit" value="Register" name="submit">Save</button>
                                </div>




                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

</body>

</html>