<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="password";
$db_database="drivewithme";

$db = new mysqli($db_hostname, $db_username, $db_password, $db_database, "3306");
if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}
?>