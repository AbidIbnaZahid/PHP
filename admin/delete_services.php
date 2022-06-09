<?php
require_once "../inc/db.php";

$id = $_GET['id'];

$delete_query = "DELETE FROM services WHERE id = $id";
mysqli_query(db(), $delete_query);
$_SESSION['Delete_service'] = "Your service delete successfully";
header('location: view_services.php');
