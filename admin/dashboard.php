<?php
include "../dbcon.php";
include "navbar.php";

if (isset($_SESSION["admin"])) {
  $name = $_SESSION["admin"];
} else {
  header("location:index.php");
}
// $result = mysqli_query($con, "SELECT id FROM `student`");
// $total_student=mysqli_num_rows($result);




// echo '<script>alert("Product added successfully")</script>';
?>

<html>
<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
<main  class="body-content">
<div class="ms-content-wrapper">
    <h1>Welcome <?php echo $name ?> </h1>
</div>
      </main>

</body>
</html>
