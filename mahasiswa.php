<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tugas6.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>

    <section class="card">
        <form action="caridata.php" method="get">
            <label for="prodi">Pilih Prodi:</label>
            <select name="prodi" id="prodi">
                <option value=""></option>
                <?php
                    $koneksi = mysqli_connect("localhost:3308", "root", "", "mahasiswa");

                    $query_prodi = "SELECT DISTINCT prodi FROM maha";
                    $result_prodi = mysqli_query($koneksi, $query_prodi);

                    while ($row_prodi = mysqli_fetch_assoc($result_prodi)) {
                        echo "<option value='{$row_prodi['prodi']}'>{$row_prodi['prodi']}</option>";
                    }
                    
                    mysqli_close($koneksi);
                ?>
            </select>

            <input type="submit" value="Cari">
        </form>
    </section>

    <?php
        $koneksi = mysqli_connect("localhost:3308", "root", "", "mahasiswa");

        $query = "SELECT * FROM maha";
        $result = mysqli_query($koneksi, $query);

        echo "<table border='1'>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kode Prodi</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['nim']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['kode']}</td>
                </tr>";
        }

        echo "</table>";

        mysqli_close($koneksi);
    ?>

    <section class="card">
        <h2>Tambah Data</h2>
        <form action="tambahdata.php" method="post">
            <label for="nim">NIM:</label>
            <input type="text" name="nim" required>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>
            <label for="prodi">Prodi:</label>
            <input type="text" name="prodi" required>
            <label for="kode">Kode Prodi:</label>
            <input type="text" name="kode" required>

            <input type="submit" value="Tambahkan">
        </form>
    </section>

    <section class="card">
        <h2>Edit Data Berdasarkan NIM</h2>
        <form action="editdata.php" method="post">
            <label for="nim_edit">NIM:</label>
            <input type="text" name="nim_edit" required>
            <label for="nama_edit">Nama:</label>
            <input type="text" name="nama_edit" required>
            <label for="kode_edit">Kode Prodi:</label>
            <input type="text" name="kode_edit" required>

            <input type="submit" value="Edit">
        </form>
    </section>

    <section class="card">
        <h2>Hapus Data Berdasarkan NIM</h2>
        <form action="hapusdata.php" method="get">
            <label for="del">Masukkan NIM :</label>
            <input type="text" name="del" required>

            <input type="submit" value="Hapus">
        </form>
    </section>

</body>
</html>
