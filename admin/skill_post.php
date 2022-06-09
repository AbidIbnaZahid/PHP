<?php
require_once "../inc/db.php";
session_start();


$title = $_POST['title'];
$parentage = $_POST['parentage'];
$flag = TRUE;


if (!$title) {
    $_SESSION['title_empty'] = "Your Title Field is Empty";
    $flag = False;
}


if ($flag) {

    $insert_query = "INSERT INTO about_experience (title,parentage) VALUES('$title','$parentage')";
    mysqli_query(db(), $insert_query);
    $_SESSION['add_experience_progressbar'] = "Your Skill added successfully";
    header('location: skill.php');
} else {
    header('location: skill.php');
}
