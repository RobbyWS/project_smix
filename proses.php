<?php
include_once "connection.php";

$nama = $_POST['nama'];
$varian = $_POST['varian'];
$jum = (int)$_POST['jumlahVarian'];

$total = (double)(25000 * $jum);

$tanggal = date("Y-m-d H:i:s");

$sql = "INSERT INTO orderan(nama_orderan, varian, jumlahVarian, totalHarga, tanggal_order) VALUES (?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssids",$nama,$varian,$jum,$total, $tanggal);
$stmt->execute();

echo "<script>
        alert('Data berhasil disimpan!');
        window.location.href='home.php';
      </script>";
exit;
?>