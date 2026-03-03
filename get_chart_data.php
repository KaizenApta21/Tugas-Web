<?php
require_once 'koneksi.php';
global $conn;

$sql = "SELECT * FROM grafik_desain";
$result = $conn->query($sql);

$labels = array();
$data = array();
$colors = array();

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $labels[] = $row["kategori"]; // Nama gaya (Minimalis, Modern, dst)
        $data[] = $row["nilai"];      // Angkanya
        $colors[] = $row["warna"];    // Kode warnanya
    }
}

// Format menjadi JSON
header('Content-Type: application/json');
echo json_encode(array("labels" => $labels, "data" => $data, "colors" => $colors));
?>