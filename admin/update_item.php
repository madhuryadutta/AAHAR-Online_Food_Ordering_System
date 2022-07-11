<?php
include "..//dbcon.php";
include "navbar.php";
if (isset($_SESSION["admin"])) {
  $name = $_SESSION["admin"];
} else {
  header("location:index.php");
}


if (count($_POST) > 0) {
  mysqli_query($con, "UPDATE `items` SET `item_id`='" . $_POST['item_id'] . "',`item_name`='" . $_POST['item_name'] . "',`item_price`='" . $_POST['item_price'] . "',`item_desc`='" . $_POST['item_desc'] . "' WHERE item_id='" . $_POST['item_id'] . "';");
  echo "<script>
  alert('Item Data Successfully Updated');
  window.location.href='view_item.php';
  </script>";
}
$edit_item = mysqli_query($con, "SELECT * FROM items WHERE item_id='" . $_GET['id'] . "'");
$row1 = mysqli_fetch_array($edit_item);
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
              <h6>Update Item</h6>
            </div>
            <div class="ms-panel-body">
              <form action="" method="POST" class="needs-validation clearfix" novalidate>


                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom18" hidden>Item ID</label>
                    <div class="input-group">
                      <input type="text" class="form-control" hidden required type="text" id="item_id" name="item_id" value="<?php echo $row1["item_id"]; ?>">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom18">Item Name</label>
                      <div class="input-group">
                        <input type="text" class="form-control" required type="text" id="item_name" name="item_name" value="<?php echo $row1["item_name"]; ?>">
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom25">Price</label>
                      <div class="input-group">
                        <input type="text" class="form-control" required type="text" id="item_price" name="item_price" value="<?php echo $row1["item_price"]; ?>">
                        <div class="invalid-feedback">
                          Price
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom12">Description</label>
                      <div class="input-group">
                        <input class="form-control" required type="text" id="item_desc" name="item_desc" value="<?php echo $row1["item_desc"]; ?>">
                        <div class="invalid-feedback">
                          Please provide item Description
                        </div>
                      </div>
                    </div>


                    <div class="ms-panel-header new">
                      <button class="btn btn-secondary d-block" type="submit" value="Register" name="submit">Save</button>
                    </div>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
     



    <div class="col-xl-6 col-md-12">
      <div class="row">
        <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Product </h6>
            </div>
            <div class="ms-panel-body">
              <div id="imagesSlider" class="ms-image-slider carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img width="250" height="250" src="../upload/<?php echo $row1['image']; ?>">
                  </div>

                </div>
              </div>

            </div>
          </div>


        </div>
      </div>
    </div>



  </main>

</html>