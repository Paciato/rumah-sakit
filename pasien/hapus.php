<?php include('../config/koneksi.php'); ?>
<?php
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM pasien WHERE id=$id");
header("Location: index.php");
?>
