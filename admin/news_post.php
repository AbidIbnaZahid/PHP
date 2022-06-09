<?php
require_once "../inc/db.php";
session_start();
date_default_timezone_set('Asia/Dhaka');

$insert_date = date('Y-m-d H:i:s');
$news_title = $_POST['news_title'];
$news_desc = $_POST['news_desc'];

$image_file_name = $_FILES['news_img']['name'];
$temp_loc = $_FILES['news_img']['tmp_name'];

$after_explode = explode(".", $image_file_name);
$extension = end($after_explode);

$image_name = time() . "-" . rand(1, 999999999) . "." . $extension;

$folder_location = "/webdev/img/news/" . $image_name;
$new_location = $_SERVER['DOCUMENT_ROOT'] . $folder_location;
move_uploaded_file($temp_loc, $new_location);

$flag = true;

if (!$news_title) {
    $_SESSION['news_title_empty'] = "Your news title Field is Empty";
    $flag = False;
}
if (!$news_desc) {
    $_SESSION['news_desc_empty'] = "Your News description Field is Empty";
    $flag = False;
}
if (!$image_file_name) {
    $_SESSION['image_file_name_empty'] = "Please insert image first";
    $flag = False;
}

if ($logotext) {
    $insert_query = "INSERT INTO logo (logotext) VALUES('$logotext')";
} else {
    $insert_query = "INSERT INTO logo (image_location) VALUES('$image_location')";
}
if (!$image_name) {
    $_SESSION['img_error'] = "Please upload image first.";
    $flag = false;
}

if ($flag) {
    $insert_quary = "INSERT INTO news(news_title,news_desc,folder_location,insert_date) VALUES('$news_title','$news_desc','$folder_location','$insert_date')";
    mysqli_query(db(), $insert_quary);
    $_SESSION['add_news'] = "Your news Added Successfully";
    header('location: news.php');
} else {
    header('location: news.php');
}
