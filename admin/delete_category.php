<?php

include '..//dbcon.php';
include 'navbar.php';
if (isset($_SESSION['admin'])) {
    $name = $_SESSION['admin'];
} else {
    header('location:index.php');
}
$edit_category = mysqli_query($con, "SELECT * FROM category WHERE cat_id='".$_GET['id']."'");
$sql = "DELETE FROM category WHERE cat_id='".$_GET['id']."'";

if (mysqli_query($con, $sql)) {
    echo "<script>
    alert('Category Deleted Successfully');
    window.location.href='view_category.php';
    </script>";
} else {
    echo "<script>
    alert('Error deleting record:') ;
    window.location.href='view_category.php';
    </script>";
}
