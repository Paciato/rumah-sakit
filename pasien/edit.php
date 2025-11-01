<?php include('../config/koneksi.php'); ?>
<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id=$id");
$d = mysqli_fetch_array($data);
?>

<h2>Edit Data Pasien</h2>
<form method="post">
    Nama: <input type="text" name="nama" value="<?= $d['nama']; ?>"><br>
    Umur: <input type="number" name="umur" value="<?= $d['umur']; ?>"><br>
    Jenis Kelamin:
    <select name="jenis_kelamin">
        <option <?= $d['jenis_kelamin']=='Laki-laki'?'selected':''; ?>>Laki-laki</option>
        <option <?= $d['jenis_kelamin']=='Perempuan'?'selected':''; ?>>Perempuan</option>
    </select><br>
    Alamat: <textarea name="alamat"><?= $d['alamat']; ?></textarea><br>
    Penyakit: <input type="text" name="penyakit" value="<?= $d['penyakit']; ?>"><br>
    <button type="submit" name="update">Update</button>
</form>

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
