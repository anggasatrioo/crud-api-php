<?php
$host = 'db';            // nama service di docker-compose, bukan 'localhost'
$user = 'user';          // sesuai environment docker-compose.yml
$pass = 'password';
$dbname = 'crud_db';

$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
// Optional: cek sukses
// echo "Koneksi Berhasil!";
?>