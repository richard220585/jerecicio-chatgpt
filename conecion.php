<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'sistema';

$conn = new mysqli("localhost", "root", "", "sistema");

if ($conn->connect_error) {
    die('Error de coneción: ' . $conn->connect_error);
}
?>
