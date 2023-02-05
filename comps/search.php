<?php
include "dbcon.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Customer Login</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href=admin/assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Costic styles -->
  <link href="admin/assets/css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
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
  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>

  </ul>
  </aside>
  <!-- Main Content -->
  <main class="body-content">

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper ms-auth">
      <div class="ms-auth-container">
        <div class="ms-auth-col">
          <div class="ms-auth-bg"></div>
        </div>
        <div class="ms-auth-col">
          <div class="ms-auth-form">
            <form action="" method="POST" class="needs-validation" novalidate="">
              <h3>Login to Account</h3>
              <p>Please enter your username and password to continue</p>
              <div class="mb-3">
                <label for="validationCustom08">Username</label>
                <div class="input-group">
                  <input type="text" class="form-control"  placeholder="username" required="" name="username" type="text" id="username">
                  <div class="invalid-feedback">Please provide username.</div>
                </div>
              </div>
              <div class="mb-2">
                <label for="validationCustom09">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control"  placeholder="Password" required="" type="password" id="password" name="password">
                  <div class="invalid-feedback">Please provide a password.</div>
                </div>
              </div>
         
              <button class="btn btn-primary mt-4 d-block w-100" type="submit" name="login" value="Log-In">Sign In</button>
              <p class="text-center mt-3 mb-0">Create a new <a href="registration.php" >account</a></p>
            </form>
            <?php
            if (isset($_POST['login'])) {
              $username = $_POST['username'];
              $password = $_POST['password'];
              $qry = "SELECT * FROM `customer` WHERE `email` = '$username' ";
              $rslt = mysqli_query($con, $qry);
              $row = mysqli_fetch_array($rslt, MYSQLI_ASSOC);
              if ($row > 0) {
                if ($row['cust_password'] == $password) {
                  $_SESSION['username']=$_POST['username'];
                  $_SESSION['name']=$row['cust_fname'];
                  $_SESSION['usr_id']=$row['cust_id'];
                  header("location:index.php");
                }
              }
            } else
              // echo '<script>alert("Wrong Password")</script>';
            ?>

            <!-- <div class="alert alert-danger font-italic">Wrong password</div> -->



          </div>
        </div>
      </div>
    </div>
    </div>

  </main>
  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/perfect-scrollbar.js">
  </script>
  <script src="assets/js/jquery-ui.min.js">
  </script>
  <!-- Global Required Scripts End -->
  <!-- Costic core JavaScript -->
  <script src="assets/js/framework.js"></script>
  <!-- Settings -->
  <script src="assets/js/settings.js"></script>
</body>



</html>