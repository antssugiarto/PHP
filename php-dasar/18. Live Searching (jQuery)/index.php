<?php
require 'fungsi.php';

session_start();
session('login.php');

$mahasiswa = show('SELECT * FROM mahasiswa ORDER BY id DESC');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="Style/index.css">
</head>

<body>
    <div class="navbar">
        <div class="n-manage">
            <form action="" method="post">
                <input type="text" name="kataPencarian" id="kataPencarian" placeholder="Cari kata pencarian" autofocus autocomplete="off">
            </form>
            <a href="tambah.php" id="nmb-tambah">Tambah Mahasiswa</a>
        </div>
        <a href="logout.php" id="nb-keluar">Keluar</a>
    </div>
    <div class="main">
        <h1>Daftar Mahasiswa</h1><br>
        <div id="tabel">
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>NIM</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>E-Mail</th>
                </tr>
                <?php $i = 1 ?>
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><a href="ubah.php?id=<?= $mhs['id'] ?>">Ubah</a> | <a href="hapus.php?id=<?= $mhs['id'] ?>" onclick="return confirm('Anda yakin ingin menghapus data')">Hapus</a></td>
                        <td><?= $mhs['nim'] ?></td>
                        <td><img src="Gambar/<?= $mhs['gambar'] ?>" width="100" height="100"></td>
                        <td><?= $mhs['nama'] ?></td>
                        <td><?= $mhs['jurusan'] ?></td>
                        <td><?= $mhs['email'] ?></td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <script src="Script/jquery-3.7.0.min.js"></script>
    <script src="Script/script.js"></script>
</body>

</html>