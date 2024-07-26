<?php 

// Membuat array assosiative
$barang = [
    ["namabarang" => "Pensil", "jenisbarang" => "Alat Tulis", "harga" => 3000, "jumlahbarang" => 4],
    ["namabarang" => "Laptop", "jenisbarang" => "Alat Elektronik", "harga" => 6000000, "jumlahbarang" => 2],
    ["namabarang" => "Mouse", "jenisbarang" => "Alat elektronik", "harga" => 150000, "jumlahbarang" => 3],
];
// Array sudah dibuat

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menampilkan Barang</title>
</head>
<body>
    <table border="1" cellpadding="5">
        <tr>
            <th>Nama Barang</th>
            <th>jenis Barang</th>
            <th>Harga</th>
            <th>Jumlah Barang</th>
        </tr>

        <?php  
        foreach ($barang as $brng) {
            echo "<tr>";
            echo "<td>" . $brng['namabarang'] . "</td>";
            echo "<td>" . $brng['jenisbarang'] . "</td>";
            echo "<td>" . $brng['harga'] . "</td>";
            echo "<td>" . $brng['jumlahbarang'] . "</td>";
            echo "</tr>";
        }       
        ?>

    </table>
</body>
</html>
