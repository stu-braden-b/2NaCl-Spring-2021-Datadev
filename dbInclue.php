<?php
$servername = "localhost:3306";
$username = "lhs_kedens";
$password = "tigers";
$dbname = "lhs_kedens";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: {$conn->connect_error}");
}
?>
