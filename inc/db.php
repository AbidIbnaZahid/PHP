<?php
function db()
{
    return mysqli_connect("localhost", "root", "", "webdev");
}
function single_query($table_name, $id)
{
    $single_table_query = "SELECT * FROM $table_name where id = $id";
    return mysqli_fetch_assoc(mysqli_query(db(), $single_table_query));
}
function read_all_query($table_name, $limit = "all")
{
    if ($limit == "all") {
        $read_query = "SELECT * FROM $table_name ORDER BY id DESC";
    } else {
        $read_query = "SELECT * FROM $table_name ORDER BY id DESC LIMIT $limit";
    }
    return mysqli_query(db(), $read_query);
}

function settings($table_name, $settings_name)
{
    $select_query = "SELECT settings_value FROM $table_name where settings_name = '$settings_name'";
    return mysqli_fetch_assoc(mysqli_query(db(), $select_query))['settings_value'];
}
function banner()
{
    $select_query = "SELECT folder_location FROM banner where status = 'active'";
    return mysqli_fetch_assoc(mysqli_query(db(), $select_query))['folder_location'];
}
