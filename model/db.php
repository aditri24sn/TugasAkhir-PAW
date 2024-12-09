<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tugas2";

$conn = new mysqli('localhost', 'root', '', 'tugas2');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>