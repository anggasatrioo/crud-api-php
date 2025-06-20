<?php
header("Content-Type: application/json");
include '../db.php';

$data = json_decode(file_get_contents("php://input"));
$id = isset($data->id) ? intval($data->id) : 0;

if ($id <= 0) {
  echo json_encode(["message" => "ID tidak valid"]);
  exit;
}

$sql = "DELETE FROM mahasiswa WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo json_encode(["message" => "Data berhasil dihapus"]);
} else {
  echo json_encode(["message" => "Gagal hapus: " . $conn->error]);
}
?>
