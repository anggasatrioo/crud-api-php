<?php
header("Content-Type: application/json");
include '../db.php';

// Ambil data dari JSON body
$data = json_decode(file_get_contents("php://input"));

$nama = $data->nama;
$nim = $data->nim;
$prodi = $data->prodi;

$sql = "INSERT INTO mahasiswa (nama, nim, prodi) VALUES ('$nama', '$nim', '$prodi')";

if ($conn->query($sql) === TRUE) {
  echo json_encode(["message" => "Data berhasil ditambahkan"]);
} else {
  echo json_encode(["message" => "Gagal: " . $conn->error]);
}
?>