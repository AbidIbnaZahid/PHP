<?php
include "../inc/db.php";

$update_query = "UPDATE massages SET status ='read'";
$update_result = mysqli_query(db(), $update_query);
header('location: view_massage.php');
