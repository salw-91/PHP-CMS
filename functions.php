<?php
include('DB/db.php');

function count_all($name)
{
    global $conn;

    $query = "SELECT COUNT(*) FROM $name";
    $all_item = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($all_item)) {
        echo $row['COUNT(*)'];
    }
}

function create_user()
{
    global $conn;

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($_POST['user_role'] == null) {
        $user_role = 1 ;
    } else {
        $user_role = $_POST['user_role'];
    };

    $first_name = mysqli_real_escape_string($conn, $first_name);
    $last_name = mysqli_real_escape_string($conn, $last_name);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $user_role = mysqli_real_escape_string($conn, $user_role);

    // PASSWORD HASH
    // $hashFormat = "$2y$10$";
    // $salt = "820287AE37587F262CD10410E501A9523448A575";
    // $hashF_and_salt = $hashFormat . $salt;
    // $password = crypt($password, $hashF_and_salt);

    $query = "INSERT INTO users(first_name , last_name , email , password , user_role)";
    $query .= "VALUES ('$first_name', '$last_name', '$email', '$password', '$user_role')";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Query FAILED');
    }
}
function create_category()
{
    global $conn;

    $category_title = $_POST['category_title'];

    $category_title = mysqli_real_escape_string($conn, $category_title);

    $query = "INSERT INTO category(title)";
    $query .= "VALUES ('$category_title')";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Query FAILED');
    }
}

function login()
{
    global $conn;
    session_start();
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM users where email = '{$email}' ";
    $select_user = mysqli_query($conn, $query);

    if (!$select_user) {
        die("Query Failed" . mysqli_errno($conn));
    }

    while ($row = mysqli_fetch_array($select_user)) {
        $user_id = $row['id'];
        $user_first_name = $row['first_name'];
        $user_last_name = $row['last_name'];
        $user_email = $row['email'];
        $user_password = $row['password'];
        $user_role = $row['user_role'];
        echo $user_email;
        echo $user_password;
    }

    if ($email === $user_email || $password === $user_password) {
        $_SESSION['user_id']            = $user_id;
        $_SESSION['user_first_name']    = $user_first_name;
        $_SESSION['user_last_name']     = $user_last_name;
        $_SESSION['user_email']         = $user_email;
        $_SESSION['user_password']      = $user_password;
        $_SESSION['user_role']          = $user_role;
        header("Location: index.php");
    } else {
        header("Location: login.php");
    }
}

function logout()
{
    $_SESSION['user_id']            = null;
    $_SESSION['user_first_name']    = null;
    $_SESSION['user_last_name']     = null;
    $_SESSION['user_email']         = null;
    $_SESSION['user_password']      = null;
    $_SESSION['user_role']          = null;
}

function update()
{
    global $conn;
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $hashFormat = "$2y$10$";
    $salt = "820287AE37587F262CD10410E501A9523448A575";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hashF_and_salt);

    $query = "UPDATE users SET ";
    $query .= "username = '$username',";
    $query .= "password = '$password'";
    $query .= "WHERE id = $id";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('Query FAILED' . mysqli_error($conn));
    }
}

function delete()
{
    global $conn;
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('Query FAILED' . mysqli_error($conn));
    }
}
