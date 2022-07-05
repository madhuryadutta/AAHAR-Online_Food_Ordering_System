<?php
include "..//dbcon.php";
include "navbar.php";

if (isset($_SESSION["admin"])) {
    $name = $_SESSION["admin"];
} else {
    header("location:index.php");
}

if (isset($_POST['submit'])) {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $item_desc = $_POST['item_desc'];
    $category = $_POST['category'];
    // Code to Upload Image to Directory and Location to Database
    $output_dir = "../upload/";/* Path for file upload */
    $RandomNum   = time();
    $ImageName      = str_replace(' ', '-', strtolower($_FILES['image']['name'][0]));
    $ImageType      = $_FILES['image']['type'][0];

    $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt       = str_replace('.', '', $ImageExt);
    $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    $NewImageName = $ImageName . '-' . $RandomNum . '.' . $ImageExt;
    $ret[$NewImageName] = $output_dir . $NewImageName;
    /* Try to create the directory if it does not exist */
    if (!file_exists($output_dir)) {
        @mkdir($output_dir, 0777);
    }
    move_uploaded_file($_FILES["image"]["tmp_name"][0], $output_dir . "/" . $NewImageName);
    $sql = "INSERT INTO `items`(`item_name`, `item_price`, `item_desc`, `cat_id`,`image`) VALUES ('$item_name','$item_price','$item_desc','$category','$NewImageName')";

    $q = mysqli_query($con, $sql);
    if ($q > 0) {
        echo " Successful";
    } else {
        echo "Category ID Already Exist ";
    }
}
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
                            <h6>Add Items</h6>
                        </div>
                        <div class="ms-panel-body">
                            <form action="" method="POST" enctype="multipart/form-data" class="needs-validation clearfix" novalidate>

                                <div class="form-row">

                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom18">Item Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" required type="text" id="item_name" name="item_name">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom25">Price</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" required type="text" id="item_price" name="item_price">
                                                <div class="invalid-feedback">
                                                    Price
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom22">Select Catagory</label>
                                            <div class="input-group">
                                                <select class="form-control" id="validationCustom22" name="category" required>

                                                    <?php
                                                    $catsql = "SELECT * FROM `category`";
                                                    $catresult = mysqli_query($con, $catsql);
                                                    while ($row = mysqli_fetch_assoc($catresult)) {
                                                        $catId = $row['cat_id'];
                                                        $catName = $row['cat_name'];
                                                        echo '<option value="' . $catId . '">' . $catName . '</option>';
                                                    }
                                                    ?>

                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a Catagory.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom12">Description</label>
                                            <div class="input-group">
                                                <input class="form-control" required type="text" id="item_desc" name="item_desc">
                                                <div class="invalid-feedback">
                                                    Please provide item Description
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom12">Item Image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="image[]">
                                                <label class="custom-file-label" for="validatedCustomFile">Upload Images...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-panel-header new">
                                    <button class="btn btn-secondary d-block" type="submit" value="Register" name="submit">Save</button>
                                </div>
                        </div>




                        </form>

                    </div>
                </div>

            </div>


        </div>
        </div>
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