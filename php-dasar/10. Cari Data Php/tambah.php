<?php
require 'functions.php';

if (isset($_POST["submit"])) {

    $nim = htmlspecialchars($_POST['nim']);
    $nama = htmlspecialchars($_POST['nama']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $email = htmlspecialchars($_POST['email']);

    if (addelcha("INSERT INTO mahasiswa VALUES ('', '$nim', '$nama', '$jurusan', '$email')") > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
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
    <h1>Tambah Mahasiswa</h1>
    <form action="" method="post">
        <label for="nim">NIM :</label>
        <input type="text" name="nim" id="nim" required><br>

        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required><br>

        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" required><br>

        <label for="email">E-Mail :</label>
        <input type="text" name="email" id="email" required><br><br>

        <button type="submit" name="submit">Tambah</button>
    </form>
</body>

</html>