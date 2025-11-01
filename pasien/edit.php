<?php include('../config/koneksi.php'); ?>
<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id=$id");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pasien</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Edit Data Pasien</h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $d['nama']; ?>" required>

        <label>Umur:</label>
        <input type="number" name="umur" value="<?= $d['umur']; ?>" required>

        <label>Jenis Kelamin:</label>
        <select name="jenis_kelamin">
            <option <?= $d['jenis_kelamin']=='Laki-laki'?'selected':''; ?>>Laki-laki</option>
            <option <?= $d['jenis_kelamin']=='Perempuan'?'selected':''; ?>>Perempuan</option>
        </select>

        <label>Alamat:</label>
        <textarea name="alamat" required><?= $d['alamat']; ?></textarea>

        <label>Penyakit:</label>
        <input type="text" name="penyakit" value="<?= $d['penyakit']; ?>" required>

        <button type="submit" name="update">Update</button>
    </form>
    <a href="index.php" class="btn-back">← Kembali ke Data Pasien</a>
</div>

<?php
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $penyakit = $_POST['penyakit'];

    mysqli_query($koneksi, "UPDATE pasien SET nama='$nama', umur='$umur', jenis_kelamin='$jk', alamat='$alamat', penyakit='$penyakit' WHERE id=$id");
    header("Location: index.php");
}
?>
</body>
</html>
