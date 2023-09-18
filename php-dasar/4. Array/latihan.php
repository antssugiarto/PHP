<?php
    $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
    $count = count($hari);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <?php echo "<td colspan='$count' align='center'>Hari</td>"?>
        </tr>
        <tr>
            <!-- <?php
                for ($i = 0; $i < $count; $i++) {
                    echo "<td>$hari[$i]</td>";
                };
            ?> -->

            <?php
                foreach ($hari as $h) {
                    echo "<td>$h</td>";
                };
            ?>
        </tr>
    </table>
</body>
</html>