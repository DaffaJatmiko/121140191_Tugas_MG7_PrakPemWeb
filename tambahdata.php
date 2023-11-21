<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost:3308", "root", "", "mahasiswa");

// Tangkap data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$kode = $_POST['kode'];

// Query untuk menambahkan data ke dalam tabel
$query_tambah = "INSERT INTO maha (nim, nama, prodi, kode) VALUES ('$nim', '$nama', '$prodi', '$kode')";
$result_tambah = mysqli_query($koneksi, $query_tambah);

// Redirect kembali ke halaman utama setelah menambahkan data
header("Location: mahasiswa.php");

// Tutup koneksi
mysqli_close($koneksi);
?>
