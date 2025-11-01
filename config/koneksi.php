<?php
$host = "localhost";
$user = "root"; // nanti di hosting akan diganti
$pass = "";
$db   = "db_rumahsakit";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
