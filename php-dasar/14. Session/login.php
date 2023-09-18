<?php
require 'fungsi.php';

session_start();
if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
};

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $data = mysqli_fetch_assoc($result);

        if (password_verify($password, $data['password'])) {
            $_SESSION['login'] = true;
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/login.css">
</head>

<body>
    <div class="main-page">
        <h1>Masuk</h1>
        <form action="" method="post">
            <input type="text" name="username" id="username" placeholder="Username"><br>

            <input type="password" name="password" id="password" placeholder="Password"><br>
            <?php if (isset($error)) : ?>
                <p>Username / password salah</p>
            <?php endif; ?>
            <button type="submit" name="submit">Masuk</button><br>

            <p>Belum punya akun? <a href="daftar.php">Daftar</a></p>
        </form>
    </div>
</body>

</html>