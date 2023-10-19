<?php
$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "530211";
$db_name = "asistencia";
$tbl_name = "usuarios";
$connection = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

if ($connection->connect_error) {
 die("Connection failed " . $connection->connect_error);
}
?>