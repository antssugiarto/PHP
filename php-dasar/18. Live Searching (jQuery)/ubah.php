<?php
require 'fungsi.php';

session_start();
session('login.php');

$id = $_GET['id'];
$mahasiswa = show("SELECT * FROM mahasiswa WHERE id = '$id'")[0];

if (isset($_POST['submit'])) {
    $nim = htmlspecialchars($_POST['nim']);
    $nama = htmlspecialchars($_POST['nama']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $email = htmlspecialchars($_POST['email']);
    $gambarLama = $mahasiswa['gambar'];

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    if (addchadel("UPDATE mahasiswa SET nim = '$nim', nama = '$nama', jurusan = '$jurusan', email = '$email', gambar = '$gambar' WHERE id = '$id'") > 0) {
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href='index.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1><br>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nim">NIM :</label>
        <input type="text" name="nim" id="nim" value="<?= $mahasiswa['nim'] ?>" required><br>

        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value="<?= $mahasiswa['nama'] ?>" required><br>

        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" value="<?= $mahasiswa['jurusan'] ?>" required><br>

        <label for="email">E-Mail :</label>
        <input type="text" name="email" id="email" value="<?= $mahasiswa['email'] ?>" required><br>

        <label for="gambar">Gambar :</label><br>
        <img src="Gambar/<?= $mahasiswa['gambar'] ?>" width="50" height="50"><br>
        <input type="file" name="gambar" id="gambar"><br><br>

        <button type="submit" name="submit">Ubah</button>
    </form>
</body>

</html>