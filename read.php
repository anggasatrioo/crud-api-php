<?php
header("Content-Type: application/json");
include '../db.php';

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

echo json_encode($data);
?>