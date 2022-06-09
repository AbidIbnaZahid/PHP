<?php
require_once "../inc/db.php";
session_start();

$icon = $_POST['icon'];
$link = $_POST['link'];

$flag = True;

if (!$icon) {
    $_SESSION['icon_empty'] = "Your Icon Field Field is Empty";
    $flag = False;
}

if (!$link) {
    $_SESSION['link_empty'] = "Your Link Field Field is Empty";
    $flag = False;
}

if ($flag) {
    $icon_check_query = "SELECT COUNT(*) AS icon FROM icons WHERE icon = '$icon'";
    if (mysqli_fetch_assoc(mysqli_query(db(), $icon_check_query))['icon'] == 0) {
        $insert_query = "INSERT INTO icons (icon,link) VALUES('$icon','$link')";
        $result = mysqli_query(db(), $insert_query);
        if ($result) {
            $_SESSION['add_icon'] = "Your Icon added successfully";
            header('location: icon.php');
        }
    } else {
        $_SESSION['icon_error'] = "Already store in database";
        header('location: icon.php');
    }
} else {
    header('location: icon.php');
}
