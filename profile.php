<?php include('DB/db.php'); ?>
<?php include('functions.php'); ?>
<?php include("includes/header.php"); ?>
<?php
if (isset($_POST['submit'])) {
    create_user();
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
                        <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                    </div>
                    <div class="card o-hidden border-0 shadow-lg ">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Edit Profile!</h1>
                                        </div>
                                        <form class="user" action="creat_user.php" method="POST">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user" name="first_name" value="<?php echo $_SESSION['user_first_name'] ?>" id="exampleFirstName" placeholder="First Name" require>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control form-control-user" name="last_name" value="<?php echo $_SESSION['user_last_name'] ?>" id="exampleLastName" placeholder="Last Name" require>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" name="email" value="<?php echo $_SESSION['user_email'] ?>" id="exampleInputEmail" placeholder="Email Address" require>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" name="password" value="<?php echo $_SESSION['user_password'] ?>" id="exampleInputPassword" placeholder="Password" require>
                                            </div>


                                            <?php
                                            $query = "SELECT * FROM user_role";
                                            $all_users = mysqli_query($conn, $query);
                                            echo "Selact user role";
                                            while ($row = mysqli_fetch_assoc($all_users)) {
                                                $user_id = $row['id'];
                                                $user_role = $row['role'];
                                            ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="user_role" value="$role_id" <?php if ($user_id === $_SESSION['user_role']) { echo "checked";}  ?>>
                                                    <label class="form-check-label">
                                                        <?php echo $user_role;



                                                        ?>
                                                    </label>
                                                </div>
                                            <?php } ?>
                                            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                                            <hr>
                                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                                <i class="fab fa-google fa-fw"></i> Register with Google
                                            </a>
                                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                            </a>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="login.php">Already have an account? Login!</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 d-none d-lg-block ">


                                </div>
                            </div>
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