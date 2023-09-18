<?php
require 'functions.php';

$id = $_GET['id'];
$mahasiswa = show("SELECT * FROM mahasiswa WHERE id = '$id'")[0];

if (isset($_POST["submit"])) {

    $nim = htmlspecialchars($_POST["nim"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $jurusan = htmlspecialchars($_POST["jurusan"]);
    $email = htmlspecialchars($_POST["email"]);

    if (addelcha("UPDATE mahasiswa SET nim = '$nim', nama = '$nama', jurusan = '$jurusan', email = '$email' WHERE id = '$id' ") > 0) {
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah');
            </script>
        ";
    };
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="post">
        <label for="nim">NIM :</label>
        <input type="text" name="nim" id="nim" required value="<?= $mahasiswa["nim"]; ?>"><br>

        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required value="<?= $mahasiswa["nama"]; ?>"><br>

        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" required value="<?= $mahasiswa["jurusan"]; ?>"><br>

        <label for="email">E-Mail :</label>
        <input type="text" name="email" id="email" required value="<?= $mahasiswa["email"]; ?>"><br><br>

        <button type="submit" name="submit">Ubah</button>
    </form>
</body>

</html>