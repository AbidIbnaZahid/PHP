<?php
include "inc/db.php";
session_start();


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$falg = TRUE;
if (!$name) {
    $_SESSION['name'] = "Your name field is empty";
    $falg = FALSE;
} else if (!$email) {
    $_SESSION['email'] = "Your email field is empty";
    $falg = FALSE;
} else if (!$message) {
    $_SESSION['message'] = "Your message field is empty";
    $falg = FALSE;
}

if ($falg) {
    $insert_quary = "INSERT INTO massage(name, email, massage)VALUES('$name','$email','$message')";
    $quary = mysqli_query($db, $insert_quary);
    $_SESSION['massage'] = "$name, Your massage sent successfully";
    if ($quary) {
        header('location: contact.php');
    }
} else {
    header('location: contact.php');
}
