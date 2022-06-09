<?php
require_once "../inc/db.php";
session_start();

$upload_image_name = $_FILES['partnar_logo']['name'];
$temp_image_location = $_FILES['partnar_logo']['tmp_name'];
$after_explode = explode('.', $upload_image_name);
$extension = (end($after_explode));
$image_name = time() . "-" . rand(1000000, 9000000) . "." . $extension;

$folder_location = "img/partners/" . $image_name;
$new_location = $_SERVER['DOCUMENT_ROOT'] . "/webdev/" . $folder_location;


move_uploaded_file($temp_image_location, $new_location);

$flag = true;

if (!$upload_image_name) {
    $_SESSION['img_error'] = "Please upload image first.";
    $flag = false;
}

if ($flag) {
    $insert_query = "INSERT INTO partnar (partnar_logo) VALUES('$folder_location')";
    mysqli_query(db(), $insert_query);
    $_SESSION['add_partnar'] = "Your Partnar added successfully";
    header('location: partnar.php');
} else {
    header('location: partnar.php');
}
