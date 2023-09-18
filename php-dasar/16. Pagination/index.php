<?php
require 'fungsi.php';

session_start();
session('!', 'login.php');

// round() (Membulatkan nilai 4 kebawah, nilai 5 keatas)
// floor() (Membulatkan nilai selalu ke bawah)
// ceil() (Membulatkan nilai selalu ke atas)
$displayedData = 3;
$dataTotal = count(show("SELECT * FROM mahasiswa"));
$pageTotal = ceil($dataTotal / $displayedData);
$activePage = (isset($_GET['page'])) ? $_GET['page'] : 1;
$firstData = ($displayedData * $activePage) - $displayedData;

$mahasiswa = show("SELECT * FROM mahasiswa ORDER BY id DESC LIMIT $firstData, $displayedData ");

if (isset($_POST['submit'])) {
    $kataPencarian = $_POST['kataPencarian'];
    $mahasiswa = show("SELECT * FROM mahasiswa WHERE nim LIKE '%$kataPencarian%' OR nama LIKE '%$kataPencarian%' OR jurusan LIKE '%$kataPencarian%' OR email LIKE '%$kataPencarian%' ORDER BY id DESC");
}
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
                <input type="text" name="kataPencarian" placeholder="Cari kata pencarian" autofocus autocomplete="off">
                <button type="submit" name="submit">Cari</button><br><br>
            </form>
            <a href="tambah.php" id="nmb-tambah">Tambah Mahasiswa</a>
        </div>
        <a href="logout.php" id="nb-keluar">Keluar</a>
    </div>
    <div class="main">
        <h1>Daftar Mahasiswa</h1><br>
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
        <?php for ($i = 1; $i <= $pageTotal; $i++) : ?>
            <?php if ($i == $activePage) : ?>
                <a href="?page=<?= $i ?>" style="font-weight: bold;"><?= $i ?></a>
            <?php else : ?>
                <a href="?page=<?= $i ?>"><?= $i ?></a>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
</body>

</html>