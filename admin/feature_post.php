<?php
require_once "../inc/db.php";
session_start();
date_default_timezone_set('Asia/Dhaka');

$createed_time = date('Y-m-d H:i:s');

$upload_image_name = $_FILES['feature_img']['name'];
$temp_image_location = $_FILES['feature_img']['tmp_name'];
$after_expload = explode('.', $upload_image_name);
$extension = (end($after_expload));

$image_name = time() . "-" . rand(100000, 9000000) . "." . $extension;
$folder_location = "img/portfolio/" . $image_name;

$new_location = $_SERVER['DOCUMENT_ROOT'] . "/webdev/" . $folder_location;
move_uploaded_file($temp_image_location, $new_location);

$feature_title = $_POST['feature_title'];
$clients = $_POST['clients'];
$project_type = $_POST['project_type'];
$author = $_POST['author'];
$budget = $_POST['budget'];
$flag = TRUE;




if (!$feature_title) {
    $_SESSION['feature_title_empty'] = "Your Title Field is Empty";
    $flag = False;
}
if (!$clients) {
    $_SESSION['clients_empty'] = "Your Clients Field is Empty";
    $flag = False;
}
if (!$project_type) {
    $_SESSION['project_type_empty'] = "Your Project Type Field is Empty";
    $flag = False;
}
if (!$author) {
    $_SESSION['author_empty'] = "Your Author Name Field is Empty";
    $flag = False;
}
if (!$budget) {
    $_SESSION['budget_empty'] = "Your Budget Field is Empty";
    $flag = False;
}
if (!$upload_image_name) {
    $_SESSION['img_error'] = "Please upload image first.";
    $flag = false;
}


if ($flag) {
    $insert_query = "INSERT INTO feature (feature_title,clients,project_type,author,budget,folder_location,createed_time) VALUES('$feature_title','$clients','$project_type','$author','$budget','$folder_location','$createed_time')";
    mysqli_query(db(), $insert_query);
    $_SESSION['add_feature'] = "Your Feature added successfully";
    header('location: feature.php');
} else {
    header('location: feature.php');
}
