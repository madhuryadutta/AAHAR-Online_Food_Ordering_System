<?php
include "navbar.php";
include "dbcon.php";
$search = $_POST['search'];
// $sql = " SELECT * FROM items where item_name like '%$search%'";
$show_items = mysqli_query($con, "SELECT * FROM `items` where item_name like '%$search%'");

?>
<html>

<body>
	<main class="body-content">
		<div class="ms-content-wrapper">

			<div class="row">
				<div class="col-md-12">

					<div class="row">
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="ms-card">
							<?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($show_items)) {

                        ?>
								<div class="ms-card-img">
									<img src="../../assets/img/costic/food-1.jpg" alt="card_img">
								</div>
								<div class="ms-card-body">

									<div class="new">
										<h6 class="mb-0"><?php echo $row["item_name"]; ?> </h6>
										<h6 class="ms-text-primary mb-0"><?php echo $row["item_price"]; ?></h6>
									</div>
									<!-- <div class="new meta">
										<p>Qty:1467 </p>
										<span class="badge badge-success">In Stock</span>
									</div> -->
									<p><?php echo $row["item_desc"]; ?></p>
									<div class="new mb-0">
										<button type="button" class="btn grid-btn mt-0 btn-sm btn-primary">Add To Cart</button>
										
									</div>
								</div>
								<?php
                            $i++;
                        }
                        ?>
							</div>
						</div>
</body>

</html>
