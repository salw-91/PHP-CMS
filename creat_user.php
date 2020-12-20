<?php include('DB/db.php'); ?>
<?php include('functions.php'); ?>
<?php include("includes/header.php");
session_start();
?>
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
                        <h6 class="m-0 font-weight-bold text-primary">Create User</h6>
                    </div>
                                        <div class="card o-hidden border-0 shadow-lg ">
                                            <div class="card-body p-0">
                                                <!-- Nested Row within Card Body -->
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <div class="p-5">
                                                            <div class="text-center">
                                                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                                            </div>
                                                            <form class="user" action="creat_user.php" method="POST">
                                                                <div class="form-group row">
                                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                                        <input type="text" class="form-control form-control-user" name="first_name" id="exampleFirstName" placeholder="First Name" require>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control form-control-user" name="last_name" id="exampleLastName" placeholder="Last Name" require>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email Address" require>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password" require>
                                                                </div>


                                                                <?php
                                                                $query = "SELECT * FROM user_role";
                                                                $all_users = mysqli_query($conn, $query);
                                                                echo "Selact user role";
                                                                while ($row = mysqli_fetch_assoc($all_users)) {
                                                                    $user_id = $row['id'];
                                                                    $user_role = $row['role'];
                                                                    // echo "<li>{$category_title}</li>";
                                                                    echo "<div class=\"form-check\">
                                                                            <input class=\"form-check-input\" type=\"radio\" name=\"user_role\" value=\"$user_id\">
                                                                            <label class=\"form-check-label\">
                                                                                {$user_role}
                                                                            </label>
                                                                         </div>";
                                                                }
                                                                ?>
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

                                                        <?php
                                                        $query = "SELECT * FROM users";
                                                        $all_users = mysqli_query($conn, $query);
                                                        while ($row = mysqli_fetch_assoc($all_users)) {
                                                            $user_first_name = $row['first_name'];
                                                            $user_last_name = $row['last_name'];
                                                            $user_email = $row['email'];
                                                            // echo "<li>{$category_title}</li>";
                                                        ?>
                                                            <!-- <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    <div class="font-weight-bold">
                                                                        <div class="text-truncate"><p>First name <?php echo $user_first_name; ?> </p></div>
                                                                        <div class="text-truncate"> <?php echo $user_last_name; ?> </div>
                                                                        <div class="text-truncate"> <?php echo $user_email; ?> </div>
                                                                        <hr>
                                                                        <div class="small text-gray-500"></div>
                                                                    </div>
                                                                </a> -->
                                                            <br><br>
                                                            <div class="container-fluid well span6">
                                                                <div class="row-fluid">
                                                                    <div class="card shadow" style="width: 18rem;">
                                                                        <div class="span8">
                                                                            <h3><?php echo $user_first_name; ?> <?php echo $user_last_name; ?></h3>
                                                                            <h6>Email: <?php echo $user_email; ?>
                                                                                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                                                                                    Action
                                                                                    <span class="icon-cog icon-white"></span><span class="caret"></span>
                                                                                </a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a href="#"><span class="icon-wrench"></span> Modify</a></li>
                                                                                    <li><a href="#"><span class="icon-trash"></span> Delete</a></li>
                                                                                </ul>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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