<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parfumix";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexiunea a esuat: " . $conn->connect_error);
} 
?>
