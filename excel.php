<?php
include_once "connection.php";

$sql = "SELECT * FROM orderan ORDER BY idorder DESC";
$result = $conn->query($sql);

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=daftar_order_smix.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<table border='1'>";
echo "
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Varian</th>
    <th>Jumlah</th>
    <th>Total Harga</th>
    <th>Tanggal Order</th>
</tr>
";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['idorder']."</td>";
    echo "<td>".$row['nama_orderan']."</td>";
    echo "<td>".$row['varian']."</td>";
    echo "<td>".$row['jumlahVarian']."</td>";
    echo "<td>Rp ".number_format($row['totalHarga'],0,',','.')."</td>";
    echo "<td>".$row['tanggal_order']."</td>";
    echo "</tr>";
}

echo "</table>";
exit();
?>
