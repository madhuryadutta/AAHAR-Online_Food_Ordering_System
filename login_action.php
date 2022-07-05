<?php
include "dbcon.php";
            if (isset($_POST['login'])) {
              $username = $_POST['username'];
              $password = $_POST['password'];
              $qry = "SELECT * FROM `customer` WHERE `email` = '$username' ";
              $result = mysqli_query($con, $qry);
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
              if ($row > 0) {
                $cust_id = $row['cust_id'];
                if ($row['cust_password'] == $password) {
                  session_start();
                  $_SESSION['loggedin'] = true;
                  $_SESSION['username'] = $username;
                  $_SESSION['cust_id'] = $cust_id;
               
                  header("location:profile.php");
                }
                else{
              header("location:login.php");
                }
              }
            } else
              header("location:login.php");
            ?>

            <!-- <div class="alert alert-danger font-italic">Wrong password</div> -->

