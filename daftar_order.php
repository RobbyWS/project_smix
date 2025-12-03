<?php
include_once "connection.php";

$sql = "SELECT * FROM orderan ORDER BY idorder DESC";
$result = $conn->query($sql);

$sumQuery = "SELECT SUM(totalHarga) AS totalPendapatan FROM orderan";
$sumResult = $conn->query($sumQuery);
$sumRow = $sumResult->fetch_assoc();
$totalPendapatan = $sumRow['totalPendapatan'] ?? 0;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Order SMiX</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; padding: 30px; }
        .container { background: white; padding: 25px; border-radius: 10px; width: 80%; margin: auto; box-shadow: 0 2px 10px rgba(0,0,0,0.1);}
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        table, th, td { border: 1px solid #ddd; }
        th { background: #2c7be5; color: white; padding: 10px; }
        td { padding: 10px; text-align: center; }
        tr:nth-child(even) { background: #f2f2f2; }
        .btn-back { display: block; width: 200px; margin: 20px auto 0; padding: 10px; text-align: center; background: #28a745; color: white; text-decoration: none; border-radius: 6px; }
    </style>
</head>

<body>

<div class="container">
    <h2>Daftar Semua Order SMiX</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Varian</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Tanggal Order</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>{$row['idorder']}</td>
                    <td>{$row['nama_orderan']}</td>
                    <td>{$row['varian']}</td>
                    <td>{$row['jumlahVarian']}</td>
                    <td>Rp " . number_format($row['totalHarga'], 0, ',', '.') . "</td>
                    <td>{$row['tanggal_order']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Belum ada order</td></tr>";
        }
        ?>
    </table>

    <div style='margin-top:20px; padding:15px; background:#e9ffe8; border-left:5px solid #28a745; border-radius:6px; width:300px;'>
    <b>Total Pendapatan:</b><br>
    <span style='font-size:20px; color:#28a745;'>
        Rp <?= number_format($totalPendapatan, 0, ',', '.') ?>
    </span>
    </div>


    <a href="home.php" class="btn-back">Kembali ke Halaman Order</a>
    <a href="excel.php" 
        style="display:inline-block; padding:10px 15px; background:#007bff; color:white; 
        text-decoration:none; border-radius:6px; margin-bottom:15px;">
        Download Excel
    </a>

</div>

</body>
</html>
