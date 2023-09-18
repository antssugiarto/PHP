<?php
$mahasiswa = [["Antonius Sugiarto", "002510004", "Teknik Informatika", "anton@gmail.com"], ["Silvanus Kukuh", "002001003", "Teknik Informatika", "ivan@gmail.com"]];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 align="center">Daftar Mahasiswa</h1><br>
    <table border="1" cellpadding="10" cellspacing="0" align="center">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>E-Mail</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <?php foreach ($mhs as $m) : ?>
                    <td><?php echo $m; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>