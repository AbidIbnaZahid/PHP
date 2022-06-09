<?php
include "../inc/db.php";
$id = $_GET['id'];
$query = "DELETE FROM massages WHERE id = $id";
$result = mysqli_query(db(), $query);
header('location: view_massage.php');
