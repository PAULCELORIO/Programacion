<?php
$host = "sql312.infinityfree.com";
$user = "if0_39489251";
$pass = "CELORIO28";
$db = "if0_39489251_producto";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>