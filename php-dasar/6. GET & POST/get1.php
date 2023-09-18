<?php
$mahasiswa = [
    [
        "Nama" => "Antonius Sugiarto",
        "NIM" => "002510004",
        "Jurusan" => "Teknik Informatika",
        "E-Mail" => "anton@gmail.com"
    ],

    [
        "Nama" => "Silvanus Kukuh",
        "NIM" => "002001003",
        "Jurusan" => "Teknik Informatika",
        "E-Mail" => "ivan@gmail.com"
    ]
];
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
    <h1>Daftar Mahasiswa</h1><br>
    <table border="1" cellpadding="10" cellspacing="0" align="center">
        <tr class="tbhead">
            <th>NIM</th>
            <th>Nama</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $mhs["NIM"] ?></td>
                <td><a href="get2.php?NIM=<?= $mhs["NIM"] ?>&Nama=<?= $mhs["Nama"] ?>&Jurusan=<?= $mhs["Jurusan"] ?>&E-Mail=<?= $mhs["E-Mail"] ?>"><?= $mhs["Nama"] ?></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>