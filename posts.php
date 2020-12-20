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
                        <h6 class="m-0 font-weight-bold text-primary">Posts</h6>
                    </div>
                    <div class="row">

                        <?php

                        $query = "SELECT * FROM posts";
                        $all_posts = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($all_posts)) {
                            echo "<div class=\"col-xl-4 col-lg-7 mx-auto\">
                                    <div class=\"mb-4\">";
                            echo "<div class=\"card\" style=\"width: 18rem;\">";
                            $category_title = $row['title'];
                            echo "<div class=\"card-body\">";
                            echo "<h5 class=\"card-title\">{$category_title}</h5>";
                            $category_content = $row['content'];

                            echo "<p class=\"card-text\">{$category_content}</p>";
                            echo "<a href=\"post.php&id={$row['id']}\" class=\"btn btn-primary \">Show Post</a>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>