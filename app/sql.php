<?php 

$servername = "HOST";
$username = "USERNAME";
$password = "PASSWORD";
$dbname = "DATABASE";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>