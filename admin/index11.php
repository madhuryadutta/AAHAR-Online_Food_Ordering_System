<?php
include "../dbcon.php";
session_start();
if (isset($_SESSION["admin"])) {
    header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login -Food Ordering System</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/dogs/image3.jpg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>
                                    <form class="user" action="" method="POST">
                                        <div class="mb-3"><input class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Enter Username..." name="username" type="text" id="username"></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="password" placeholder="Password" name="password"></div>

                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small"></div>
                                        </div><button class="btn btn-primary d-block btn-user w-100" type="submit" name="login" value="Log-In">Login</button>
                                        <hr>
                                        <hr>
                                    </form>
                                    <?php
                                    if (isset($_POST['login'])) {
                                        $username = $_POST['username'];
                                        $password = $_POST['password'];
                                        $qry = "SELECT * FROM `admin` WHERE `username` = '$username' ";
                                        $rslt = mysqli_query($con, $qry);
                                        $row = mysqli_fetch_array($rslt, MYSQLI_ASSOC);
                                        if ($row > 0) {
                                            if ($row['password'] == $password) {
                                                $_SESSION["admin"] = $row['username'];
                                                header("location:dashboard.php");
                                            }
                                        }
                                    } else
                                    ?>
                                    <!-- <div class="alert alert-danger font-italic">Wrong password</div> -->



                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>