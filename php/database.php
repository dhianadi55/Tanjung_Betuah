<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "data_bantuan";

$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>