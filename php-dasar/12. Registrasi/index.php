<?php
require 'fungsi.php';

$mahasiswa = show('SELECT * FROM mahasiswa ORDER BY id DESC');

if (isset($_POST['submit'])) {
    $kataPencarian = $_POST['kataPencarian'];
    $mahasiswa = show("SELECT * FROM mahasiswa WHERE nim LIKE '%$kataPencarian%' OR nama LIKE '%$kataPencarian%' OR jurusan LIKE '%$kataPencarian%' OR email LIKE '%$kataPencarian%'");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1><br>
    <a href="tambah.php">Tambah Mahasiswa</a><br><br>
    <form action="" method="post">
        <input type="text" name="kataPencarian" placeholder="Cari kata pencarian" autofocus autocomplete="off">
        <button type="submit" name="submit">Cari</button><br><br>
    </form>
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
</body>

</html>