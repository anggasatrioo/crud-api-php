<?php
header("Content-Type: application/json");
include '../db.php';

$data = json_decode(file_get_contents("php://input"));

$id = isset($data->id) ? intval($data->id) : 0;
$nama = isset($data->nama) ? trim($data->nama) : '';
$nim = isset($data->nim) ? trim($data->nim) : '';
$prodi = isset($data->prodi) ? trim($data->prodi) : '';

if ($id <= 0 || $nama === '' || $nim === '' || $prodi === '') {
    echo json_encode(["message" => "Data tidak lengkap. Semua field wajib diisi."]);
    exit;
}

$sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', prodi='$prodi' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Data berhasil diupdate"]);
} else {
    echo json_encode(["message" => "Gagal update: " . $conn->error]);
}
?>


