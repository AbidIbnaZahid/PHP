<?php
require_once "../inc/db.php";
session_start();

$id = $_GET['id'];
$update_query1 = "UPDATE banner SET status='deactive'";
$update_query2 = "UPDATE banner SET status='active' where id = '$id'";
mysqli_query(db(), $update_query1);
mysqli_query(db(), $update_query2);
$_SESSION['banner_update'] = "Your banner image added Successfully";
header('location: banner.php');
