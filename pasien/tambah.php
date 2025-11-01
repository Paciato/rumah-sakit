<?php include('../config/koneksi.php'); ?>

<h2>Tambah Data Pasien</h2>
<form method="post">
    Nama: <input type="text" name="nama"><br>
    Umur: <input type="number" name="umur"><br>
    Jenis Kelamin:
    <select name="jenis_kelamin">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>
    Alamat: <textarea name="alamat"></textarea><br>
    Penyakit: <input type="text" name="penyakit"><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

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
