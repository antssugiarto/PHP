<?php
require 'fungsi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Masuk</h1>
    <form action="" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username"><br>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password"><br><br>
        <?php if (isset($error)) : ?>
            <p>Username / password salah</p>
        <?php endif; ?>
        <button type="submit" name="submit">Masuk</button>
    </form>
</body>

</html>