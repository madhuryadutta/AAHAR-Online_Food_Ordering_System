<?php
include("dbcon.php");
include("navbar.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    
   if($loggedin){
        $cust_id = $_SESSION['cust_id'];?>
        <h1> <?php echo $cust_id?>;</h1>
    <?php 
    } 
     ?>
     
</body>

</html>