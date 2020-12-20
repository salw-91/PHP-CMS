<?php include('DB/db.php'); ?>
<?php include('functions.php'); ?>
<?php include("includes/header.php"); ?>
<?php
if (isset($_POST['submit'])) {
    create_category();
}
?>

<div id="wrapper">

    <!-- Sidebar -->
    <?php
    include "includes/sidebar.php";
    // echo $_SERVER['DOCUMENT_ROOT'];
    ?>

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php include "includes/nav.php" ?>
            <div class="col-lg-12 mb-4">
                <!-- Approach -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Create Category</h6>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="mb-4">
                                <form action="category.php" method="POST">
                                    <div class="card-body">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" name="category_title" placeholder="Category Title" require>
                                        </div>
                                        <br>
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Create Category</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div>
                            <?php
                            $query = "SELECT * FROM category";
                            $all_categories = mysqli_query($conn,$query);
                            echo "List of all categories";
                            echo "<ol>";
                            while($row = mysqli_fetch_assoc($all_categories)){
                                $category_title = $row['title'];
                                
                                echo "<li>{$category_title}</li>";
                            
                            }
                            echo "</ol>";
                            ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- End of Sidebar -->

</div>
<?php include "includes/footer.php"; ?>