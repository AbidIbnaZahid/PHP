<?php
require_once "../inc/db.php";
session_start();

$job_duration = $_POST['job_duration'];
$job_name = $_POST['job_name'];
$job_title = $_POST['job_title'];
$job_desc = $_POST['job_desc'];

$flag = True;
if (!$job_duration) {
    $_SESSION['job_duration_empty'] = "Your Job Duration Field is Empty";
    $flag = False;
}

if (!$job_name) {
    $_SESSION['job_name_empty'] = "Your Job Name Field is Empty";
    $flag = False;
}

if (!$job_title) {
    $_SESSION['job_title_empty'] = "Your Job title Field is Empty";
    $flag = False;
}

if (!$job_desc) {
    $_SESSION['job_desc_empty'] = "Your Job Description Field is Empty";
    $flag = False;
}
if ($flag) {
    $insert_query = "INSERT INTO experience (job_duration,job_name,job_title,job_desc) VALUES('$job_duration','$job_name','$job_title','$job_desc')";
    mysqli_query(db(), $insert_query);
    $_SESSION['add_expricence'] = "Your Expricence added successfully";
    header('location: experience.php');
} else {
    header('location: experience.php');
}
