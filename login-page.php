<?php
include "inc/db.php";
session_start();

$phone_or_email = $_POST['email_or_email'];
$password = md5($_POST['password']);

$flag = TRUE;

if (!$phone_or_email) {
    $_SESSION['phone_or_email_error'] = "Your Email Or Phone number field is empty";
    $flag = false;
}
if (!$password) {
    $_SESSION['$password'] = "Your Password field is empty";
    $flag = false;
}

if ($flag) {
    if (strpos($phone_or_email, "@")) {
        $select_query = "SELECT COUNT(*) AS total_count from users where email = '$phone_or_email' and password = '$password'";
        $name_query = "SELECT name from users where email = '$phone_or_email'";
    } else {
        $select_query = "SELECT COUNT(*) AS total_count from users where email = '$phone_or_email' and password = '$password'";
        $name_query = "SELECT name from users where phone = '$phone_or_email'";
    }
    $result = mysqli_query(db(), $select_query);
    if (mysqli_fetch_assoc($result)['total_count'] == 1) {
        $_SESSION['login_success'] = mysqli_fetch_assoc(mysqli_query(db(), $name_query))['name'];
        $_SESSION['verification'] = TRUE;
        header('location: admin/dashboard.php');
    } else {
        $_SESSION['passwod_error'] = "Your email or password is worng";
        header('location: login.php');
    }
} else {
    header('location: login.php');
}
