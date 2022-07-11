<?php
include "..//dbcon.php";
include "navbar.php";
if (isset($_SESSION["admin"])) {
    $name = $_SESSION["admin"];
} else {
    header("location:index.php");
}
$sql = "UPDATE `items` SET `availability`='0' WHERE item_id='" . $_GET['id'] . "'";

if (mysqli_query($con, $sql)) {
    echo "<script>
    alert('Item Deleted Successfully');
    window.location.href='view_item.php';
    </script>";
} else {
    echo "<script>
    alert('Error deleting record:') ;
    window.location.href='view_item.php';
    </script>";
  
}