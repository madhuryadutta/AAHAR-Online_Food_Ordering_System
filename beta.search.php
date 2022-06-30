<?php
include "navbar.php";
include "dbcon.php";
$search = $_POST['search'];
// $sql = " SELECT * FROM items where item_name like '%$search%'";
$show_items = mysqli_query($con, "SELECT * FROM `items` where item_name like '%$search%'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .wrapper {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
  grid-auto-rows: 100px 200px;
}
.item{
  border: 2px solid red;
  border-radius: 10%;
}

</style>
<body>
<?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($show_items)) {

                        ?>
  <div class="wrapper">
    <div class="item"><?php echo $row["item_name"]; ?></div>
    <?php
                            $i++;
                        }
                        ?>   
  </div>
</body>
</html>
