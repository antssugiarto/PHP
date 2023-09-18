<?php
// Koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "universitas");

// Mengambil data dari tabel di dalam database
$query = mysqli_query($connection, "SELECT * FROM mahasiswa");

// Menampilan hasil isi data
// mysqli_fetch_row()       : Mengembalikan array numerik 
// mysqli_fetch_assoc()     : Mengembalikan array asosiatif
// mysqli_fetch_array()     : Mengembalikan array numerik dan asosiatif
// mysqli_fetch_object()    : Mengembalikan array objek
/* Contoh :
// while ($data = mysqli_fetch_assoc($query)) {
//     var_dump($data);
} */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>E-Mail</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ($data = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> | <a href="">Hapus</a>
                </td>
                <td><?= $data["nim"]; ?></td>
                <td><?= $data["nama"]; ?></td>
                <td><?= $data["jurusan"]; ?></td>
                <td><?= $data["email"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>

</html>