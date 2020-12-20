<?php include('DB/db.php'); ?>
<?php include('functions.php'); ?>
<?php include("includes/header.php");
session_start();
?>
<?php
if (isset($_POST['submit'])) {
    login();
}

if (isset($_GET['logout'])) {
    logout();
}

if (isset($_SESSION['user_first_name'])) { ?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include "includes/sidebar.php" ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php include "includes/nav.php" ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>

                <!-- Content Row -->
                <?php include "includes/monthly_card.php" ?>

                <!-- Content Row -->

                <div class="row">

                    <!-- Area Chart -->
                    <?php include "includes/area_chart.php" ?>


                    <!-- Pie Chart -->
                    <?php include "includes/pie_chart.php" ?>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">

                        <!-- Project Card Example -->
                        <?php include "includes/project.php" ?>

                        <!-- Color System -->
                        <?php include "includes/color_system.php" ?>

                    </div>

                    <div class="col-lg-6 mb-4">

                        <!-- Illustrations -->
                        <?php include "includes/Illustrations.php" ?>

                        <!-- Approach -->
                        <?php include "includes/approach.php" ?>

                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="index.php?logout">Logout</a>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>

<?php } else { ?>

    <div id="content">

<!-- Topbar -->
<?php include "includes/nav.php" ?>

 <?php } ?>
