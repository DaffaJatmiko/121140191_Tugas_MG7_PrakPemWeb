<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian Mahasiswa</title>
    <link rel="stylesheet" href="tugas6.css">
</head>
<body>
    <h2>Pencarian Mahasiswa</h2>
    
    <?php
        $koneksi = mysqli_connect("localhost:3308", "root", "", "mahasiswa");

        $prodi_cari = $_GET['prodi'];

        $query_cari = "SELECT nim, nama, kode FROM maha WHERE prodi = '$prodi_cari'";
        $result_cari = mysqli_query($koneksi, $query_cari);

        echo "<table border='1'>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kode Prodi</th>
                </tr>";

        while ($row_cari = mysqli_fetch_assoc($result_cari)) {
            echo "<tr>
                    <td>{$row_cari['nim']}</td>
                    <td>{$row_cari['nama']}</td>
                    <td>{$row_cari['kode']}</td>
                </tr>";
        }

        echo "</table>";

        echo "<br><a href='mahasiswa.php'>Kembali ke Halaman Utama</a>";

        mysqli_close($koneksi);
    ?>
</body>
</html>
