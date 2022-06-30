<?php
include "dbcon.php";
if (isset($_POST['submit'])) {
  $cust_fname = $_POST['cust_fname'];
  $cust_lname = $_POST['cust_lname'];
  $email = $_POST['email'];
  $cust_password = $_POST['cust_password'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $qry = "INSERT INTO `customer` (`cust_fname`, `cust_lname`, `email`, `cust_password`, `phone`, `address`) VALUES ('$cust_fname','$cust_lname','$email','$cust_password','$phone','$address')";
  $run = mysqli_query($con, $qry);

  if ($run == TRUE) {
    echo 'success';
  } else {
    echo "fail";
  }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Foodwala</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../../vendors/iconic-fonts/flat-icons/flaticon.css">
    <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="admin/assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Costic styles -->
  <link href="admin/assets/css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="admin/favicon.ico">

</head>

<body class="ms-body ms-primary-theme ms-logged-out">

  

  <!-- Preloader -->
  <!-- <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div> -->


    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper ms-auth">

      <div class="ms-auth-container">
        <div class="ms-auth-col">
          <div class="ms-auth-bg"></div>
        </div>
        <div class="ms-auth-col">
          <div class="ms-auth-form">
            <form action="" method="POST" class="needs-validation" novalidate="">
              <h3>Create Account</h3>
              <p>Please enter personal information to continue</p>
              <div class="form-row">
                <div class="col-md-6 ">
                  <label for="cust_fname">First name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="cust_fname" name="cust_fname"   required="">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <label for="cust_lname">Last name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="cust_lname" name="cust_lname" required="">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 ">
                  <label for="email">Email Address</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="email" name="email"   required="">
                    <div class="invalid-feedback">
                      Please provide a valid email.
                    </div>
                  </div>
                </div>
                <div class="col-md-12 ">
                  <label for="cust_password">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="cust_password" name="cust_password"  required="">
                    <div class="invalid-feedback">
                      Please provide a password.
                    </div>
                  </div>
                </div>
                <div class="col-md-12 ">
                  <label for="phone">Phone</label>
                  <div class="input-group">
                    <input type="number" class="form-control" id="phone" name="phone" min="6000000000" max="9999999999" required="">
                    <div class="invalid-feedback">
                      Please provide Your Phone Number.
                    </div>
                  </div>
                </div>
                <div class="col-md-12 ">
                  <label for="address">Address</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="address" name="address"  required="">
                    <div class="invalid-feedback">
                      Please provide Your Address.
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check pl-0">
                  <label class="ms-checkbox-wrap">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
                    <i class="ms-checkbox-check"></i>
                  </label>
                  <span> Agree to <a href="tnc.html">terms and conditions</a> </span>
                </div>
              </div>
              <button class="btn btn-primary mt-4 d-block w-100" type="submit" value="Register" name="submit">Create Account</button>
              
              <p class="mb-0 mt-3 text-center">Already have an account? <a class="btn-link" href="login.php">Login</a> </p>
            </form>

          </div>
        </div>
      </div>

    </div>

  </main>

  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="../../assets/js/jquery-3.3.1.min.js"></script>
  <script src="../../assets/js/popper.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/perfect-scrollbar.js"> </script>
  <script src="../../assets/js/jquery-ui.min.js"> </script>
  <!-- Global Required Scripts End -->

  <!-- Costic core JavaScript -->
  <script src="../../assets/js/framework.js"></script>

  <!-- Settings -->
  <script src="../../assets/js/settings.js"></script>

</body>


<!-- Mirrored from slidesigma.com/themes/html/costic/pages/prebuilt-pages/default-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:14:06 GMT -->
</html>
