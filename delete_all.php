<?php
include "inc/db.php";
foreach ($_POST['check'] as $key => $value) {
    $query = "DELETE FROM massage WHERE id = $key";
    $result = mysqli_query($db, $query);
}
header('location: massage.php');
