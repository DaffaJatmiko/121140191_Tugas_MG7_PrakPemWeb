<?php
$koneksi = mysqli_connect("localhost:3308", "root", "", "mahasiswa");

$nim_edit = $_POST['nim_edit'];
$nama_edit = $_POST['nama_edit'];
$kode_edit = $_POST['kode_edit'];

$query_edit = "UPDATE maha SET nama='$nama_edit', kode='$kode_edit' WHERE nim='$nim_edit'";
$result_edit = mysqli_query($koneksi, $query_edit);

header("Location: mahasiswa.php");

mysqli_close($koneksi);
?>
