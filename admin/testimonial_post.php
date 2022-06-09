<?php
require_once "../inc/db.php";
session_start();

$test_desc = $_POST['test_desc'];
$name = $_POST['name'];
$company = $_POST['company'];

$flag = True;
if (!$test_desc) {
    $_SESSION['test_desc_empty'] = "Your Description Field is Empty";
    $flag = False;
}

if (!$name) {
    $_SESSION['name_empty'] = "Your Name Field is Empty";
    $flag = False;
}

if (!$company) {
    $_SESSION['company_empty'] = "Your Company Name Field is Empty";
    $flag = False;
}


if ($flag) {
    $insert_query = "INSERT INTO testimonials (test_desc,name,company) VALUES('$test_desc','$name','$company')";
    mysqli_query(db(), $insert_query);
    $_SESSION['add_testimonial'] = "Your testimonial added successfully";
    header('location: testimonial.php');
} else {
    header('location: testimonial.php');
}
