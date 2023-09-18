<?php
if (!isset($_GET["NIM"]) || !isset($_GET["Nama"]) || !isset($_GET["Jurusan"]) || !isset($_GET["E-Mail"])) {
    header("Location: get1.php");
    exit;
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tbhead {
            background-color: navy;
            color: white;
            border-color: white;
        }
    </style>
</head>

<body align="center">
    <h1>Detil Mahasiswa</h1><br>
    <table border="1" cellpadding="10" cellspacing="0" align="center">
        <tr class="tbhead">
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>E-Mail</th>
        </tr>
        <tr>
            <td><?= $_GET["NIM"]; ?></td>
            <td><?= $_GET["Nama"]; ?></td>
            <td><?= $_GET["Jurusan"]; ?></td>
            <td><?= $_GET["E-Mail"]; ?></td>
        </tr>
    </table><br>
    <a href="get1.php">Kembali ke Daftar Mahasiswa</a>
</body>

</html>