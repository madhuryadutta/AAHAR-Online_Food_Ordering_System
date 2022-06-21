<?php
include "../dbcon.php";
include "navbar.php";
$view_items = mysqli_query($con, "SELECT * FROM `items`");
if (isset($_SESSION["admin"])) {
    $name = $_SESSION["admin"];
} else {
    header("location:index.php");
}
?>
<!DOCTYPE html>

<body>
    <main class="body-content">
        <div class="col-12">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6> Items List</h6>
                </div>
            </div>
        </div>
        <div class="ms-panel-body">

            <div class="table-responsive">
                <table class="table table-hover thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">Items ID</th>
                            <th scope="col">Items Name</th>
                            <th scope="col">Items Description</th>
                            <th scope="col">Items Price</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($view_items)) {

                        ?>
                            <tr>
                                <th scope="row"><?php echo $row["item_id"]; ?></th>
                                <td><?php echo $row["item_name"]; ?></td>
                                <td> <?php echo $row["item_desc"]; ?></td>
                                <td> <?php echo $row["item_price"]; ?></td>
                                <td><span class="badge badge-primary"><button><a href="update_process.php?id=<?php echo $row["cat_id"]; ?>"> update</a></button></span></td>

                            </tr>
                        <?php
                            $i++;
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>

</html>
<!-- Body Content Wrapper -->