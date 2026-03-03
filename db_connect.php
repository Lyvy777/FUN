<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "golden_whisk_db";

$db_link = new mysqli($host, $user, $pass, $dbname);

if ($db_link->connect_error) {
    die("Connection failed: " . $db_link->connect_error);
}
?>
