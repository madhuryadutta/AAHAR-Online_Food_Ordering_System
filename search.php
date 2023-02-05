<?php
include "dbcon.php";

$search = $_POST['search'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
</head>

<body>
    <?php 
    require 'comps/nav.php';

    ?>
  
    <div class="container my-3" id="cont">
        
        <div class="row">
        <?php
    
        $show_items = mysqli_query($con, "SELECT * FROM `items` where item_name like '%$search%'");
            while($row = mysqli_fetch_assoc($show_items)){
               
                $item_id = $row['item_id'];
                $item_name = $row['item_name'];
                $item_price = $row['item_price'];
                $item_desc = $row['item_desc'];
                $image = $row['image'];
            
                echo '<div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="card" style="width: 14rem;">
                            <img src="img/featured/'.$image.'" class="card-img-top"  width="249px" height="270px">
                            <div class="card-body">
                                <h5 class="card-title">' . substr($item_name, 0, 20). '...</h5>
                                <h6 style="color: #ff0000">Rs. '.$item_price. '/-</h6>
                                <p class="card-text">' . substr($item_desc, 0, 29). '...</p>   
                                <div class="row justify-content-center">';
                                
                            echo '</form>                            
                                <a href="viewPizza.php?pizzaid=' . $item_id . '" class="mx-2"><button class="btn btn-primary">Quick View</button></a> 
                                </div>
                            </div>
                        </div>
                    </div>';
            }?>
</body>
</html>