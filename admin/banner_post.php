<?php
require_once "../inc/db.php";
session_start();


$upload_image_name = $_FILES['banner_img']['name'];
$temp_image_location = $_FILES['banner_img']['tmp_name'];
$after_expload = explode('.', $upload_image_name);
$extension = (end($after_expload));

$image_name = time() . "-" . rand(100000, 9000000) . "." . $extension;
$folder_location = "img/banner/" . $image_name;

$new_location = $_SERVER['DOCUMENT_ROOT'] . "/webdev/" . $folder_location;
move_uploaded_file($temp_image_location, $new_location);

$flag = TRUE;

if (!$upload_image_name) {
    $_SESSION['img_error'] = "Please upload image first.";
    $flag = false;
}


if ($flag) {
    $insert_query = "INSERT INTO banner (folder_location) VALUES('$folder_location')";
    mysqli_query(db(), $insert_query);
    $_SESSION['add_banner'] = "Your Banner added successfully";
    header('location: banner.php');
} else {
    header('location: banner.php');
}
