<?php
include "../inc/db.php";
foreach ($_POST['check'] as $key => $value) {
    $query = "DELETE FROM massages WHERE id = $key";
    $result = mysqli_query(db(), $query);
}
header('location: view_massage.php');
