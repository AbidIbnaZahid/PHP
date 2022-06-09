<?php
include "inc/db.php";

$update_query = "UPDATE massage SET status ='read'";
$update_result = mysqli_query($db, $update_query);
header('location: massage.php');
