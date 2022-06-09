<?php
require_once "../inc/db.php";

$id = $_GET['id'];

$delete_query = "DELETE FROM experience WHERE id = $id";
mysqli_query(db(), $delete_query);
$_SESSION['Delete_expricence'] = "Your Expricence DELETE successfully";
header('location: view_experience.php');
