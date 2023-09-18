<?php
require 'fungsi.php';

if (isset($_POST['submit'])) {

    if (register() > 0) {
        echo "
            <script>
                alert('User berhasil didaftarkan');
                document.location.href='login.php';
            </script>";
    }
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
    <h1>Daftar</h1>
    <form action="" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required><br>

        <label for="password2">Konfirmasi password :</label>
        <input type="password" name="password2" id="password2" required><br><br>

        <button type="submit" name="submit">Daftar</button>
    </form>
</body>

</html>