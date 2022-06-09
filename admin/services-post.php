<?php
require_once "../inc/db.php";
session_start();

$service_name = $_POST['service_name'];
$service_desc = $_POST['service_desc'];
$service_icon = $_POST['service_icon'];

$flag = True;
if (!$service_name) {
    $_SESSION['service_name_empty'] = "Your Service Name Field is Empty";
    $flag = False;
}

if (!$service_desc) {
    $_SESSION['service_desc_empty'] = "Your Service Description Field is Empty";
    $flag = False;
}
if (!$service_icon) {
    $_SESSION['service_icon_empty'] = "Your Service Icon Field is Empty";
    $flag = False;
}

if ($flag) {
    $insert_query = "INSERT INTO services (service_name,service_desc,service_icon) VALUES('$service_name','$service_desc','$service_icon')";
    mysqli_query(db(), $insert_query);
    $_SESSION['add_expricence'] = "Your Expricence added successfully";
    header('location: services.php');
} else {
    header('location: services.php');
}
