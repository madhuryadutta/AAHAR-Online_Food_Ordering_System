<?php
include "..//dbcon.php";
include "navbar.php";
if (isset($_SESSION["admin"])) {
    $name = $_SESSION["admin"];
} else {
    header("location:index.php");
}
if (count($_POST) > 0) {
    mysqli_query($con, "UPDATE category set cat_id='" . $_POST['cat_id'] . "',cat_name='" . $_POST['cat_name'] . "',cat_description='" . $_POST['cat_description'] . "' WHERE cat_id='" . $_POST['cat_id'] . "';");
    $message = "Record Modified Successfully";
}
$edit_category = mysqli_query($con, "SELECT * FROM category WHERE cat_id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($edit_category);
?>
<!DOCTYPE html>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
    <main class="body-content">
        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper">
            <div class="row">


                <!-- <div class="alert alert-success" role="alert">
            <strong>Well done!</strong> You successfully read this important alert message.
          </div>
        </div> -->



                <div class="col-xl-6 col-md-12">
                    <div class="ms-panel ms-panel-fh">
                        <div class="ms-panel-header">
                            <h6>Add Category Form</h6>
                        </div>
                        <div class="ms-panel-body">
                            <form action="" method="POST" class="needs-validation clearfix" novalidate>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom18">Category Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom18" value="<?php echo $row["cat_name"]; ?>" required type="text" id="cat_name" name="cat_name">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom24">Category ID</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom24" required type="text" id="cat_id" name="cat_id" value="<?php echo $row["cat_id"]; ?>">
                                            <div class="invalid-feedback">
                                                Quantity
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom12">Description</label>
                                        <div class="input-group">
                                            <input type="text" id="validationCustom12" class="form-control" required type="text" id="cat_description" name="cat_description" value="<?php echo $row["cat_description"]; ?>">
                                            <div class="invalid-feedback">
                                                Write Something About The Category.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-12 mb-3">
                    <label for="validationCustom12">Product Image</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile">
                      <label class="custom-file-label" for="validatedCustomFile">Upload Images...</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div> -->
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


    </main>

</body>

</html>