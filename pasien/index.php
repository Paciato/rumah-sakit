<?php include('../config/koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien</title>
</head>
<body>
<h2>Data Pasien Rumah Sakit</h2>
<a href="tambah.php">+ Tambah Pasien</a>
<table border="1" cellpadding="8">
    <tr>
        <th>No</th><th>Nama</th><th>Umur</th><th>JK</th><th>Alamat</th><th>Penyakit</th><th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * FROM pasien");
    while ($row = mysqli_fetch_array($data)) {
        echo "<tr>
            <td>$no</td>
            <td>{$row['nama']}</td>
            <td>{$row['umur']}</td>
            <td>{$row['jenis_kelamin']}</td>
            <td>{$row['alamat']}</td>
            <td>{$row['penyakit']}</td>
            <td>
                <a href='edit.php?id={$row['id']}'>Edit</a> |
                <a href='hapus.php?id={$row['id']}'>Hapus</a>
            </td>
        </tr>";
        $no++;
    }
    ?>
</table>
</body>
</html>
