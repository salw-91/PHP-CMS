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
                        <h6 class="m-0 font-weight-bold text-primary">Blank</h6>
                    </div>
                    <div class="row">

                    
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- End of Sidebar -->

        </div>
        <?php include "includes/footer.php"; ?>