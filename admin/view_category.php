<?php
include "../dbcon.php";
include "navbar.php";
$view_category = mysqli_query($con, "SELECT * FROM `category`");
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
                    <h6> Category List</h6>
                </div>
            </div>
        </div>
        <div class="ms-panel-body">

            <div class="table-responsive">
                <table class="table table-hover thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">Category ID</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Category Description</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($view_category)) {

                        ?>
                            <tr>
                                <th scope="row"><?php echo $row["cat_id"]; ?></th>
                                <td><?php echo $row["cat_name"]; ?></td>
                                <td> <?php echo $row["cat_description"]; ?></td>
                                <td><span class="badge badge-primary"><button><a href="update_category.php?id=<?php echo $row["cat_id"]; ?>"> update</a></button></span></td>

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