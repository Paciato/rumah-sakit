<?php include('../config/koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pasien</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Tambah Data Pasien</h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Umur:</label>
        <input type="number" name="umur" required>

        <label>Jenis Kelamin:</label>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label>Alamat:</label>
        <textarea name="alamat" required></textarea>

        <label>Penyakit:</label>
        <input type="text" name="penyakit" required>

        <button type="submit" name="simpan">Simpan</button>
    </form>
    <a href="index.php" class="btn-back">← Kembali ke Data Pasien</a>
</div>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $penyakit = $_POST['penyakit'];

    mysqli_query($koneksi, "INSERT INTO pasien VALUES('', '$nama', '$umur', '$jk', '$alamat', '$penyakit')");
    header("Location: index.php");
}
?>
</body>
</html>
