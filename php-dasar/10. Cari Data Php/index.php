<?php
require 'functions.php';

$mahasiswa = show("SELECT * FROM mahasiswa ORDER BY id DESC");

if (isset($_POST["submit"])) {
    $kata_pencarian = $_POST["kata_pencarian"];
    $mahasiswa = show("SELECT * FROM mahasiswa WHERE nim LIKE '%$kata_pencarian%' OR nama LIKE '%$kata_pencarian%' OR jurusan LIKE '%$kata_pencarian%' OR email LIKE '%$kata_pencarian%'");
};
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
    <a href="tambah.php">Tambah data mahasiswa</a><br>
    <form action="" method="post">
        <input type="text" name="kata_pencarian" placeholder="Masukan kata pencarian" autofocus autocomplete="off">
        <button type="submit" name="submit">Cari</button>
    </form><br>
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
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $mhs["id"]; ?>">Ubah</a> | <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data?');">Hapus</a>
                </td>
                <td><?= $mhs["nim"]; ?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>

</html>