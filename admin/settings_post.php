<?php
require_once "../inc/db.php";
session_start();
foreach ($_POST as $Settings_name => $Settings_value) {
    $update_query = "UPDATE settings SET settings_value = '$Settings_value' WHERE settings_name='$Settings_name'";
    mysqli_query(db(), $update_query);
}
$_SESSION['edit_settings'] = "Your Settings Edit Successfully";
header('location: settings.php');
