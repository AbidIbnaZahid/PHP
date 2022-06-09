<?php
include "inc/db.php";
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$falg = TRUE;
if (!$name) {
    $_SESSION['name_empty'] = "Your name field is empty";
    $falg = FALSE;
} else if (!$email) {
    $_SESSION['email_empty'] = "Your email field is empty";
    $falg = FALSE;
} else if (!$message) {
    $_SESSION['message_empty'] = "Your message field is empty";
    $falg = FALSE;
}

if ($falg) {
    $insert_quary = "INSERT INTO massages(name, email, massage)VALUES('$name','$email','$message')";
    $quary = mysqli_query(db(), $insert_quary);
    $_SESSION['send_massage'] = "Your message is successfully sent...";
    if ($quary) {
        header('location: index.php');
    }
} else {
    header('location: index.php');
}
