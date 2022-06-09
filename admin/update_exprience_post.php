<?php
require_once "../inc/db.php";
session_start();

$exprience_id = $_POST['exprience_id'];
$job_duration = $_POST['job_duration'];
$job_name = $_POST['job_name'];
$job_title = $_POST['job_title'];
$job_desc = $_POST['job_desc'];

$update_query = "UPDATE experience SET job_duration='$job_duration',job_name='$job_name',job_title='$job_title',job_desc='$job_desc' where id = $exprience_id ";
mysqli_query(db(), $update_query);
header('location: view_experience.php');
