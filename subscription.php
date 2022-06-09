<?php
require_once "inc/db.php";

$email = $_POST['email'];
print_r($email);

$insert_query = "INSERT INTO subscriptions(email) VALUES('$email')";
mysqli_query(db(), $insert_query);
$_SESSION['subscriptions_done'] = "Congratulation";
header('location: index.php');
