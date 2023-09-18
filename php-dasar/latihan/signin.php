<?php

require "function.php";

session_start();
session("", "index.php");

if (isset($_COOKIE['key'])) {
    $num = $_COOKIE['num'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($connection, "SELECT username FROM user WHERE id = $num");
    $data = mysqli_fetch_assoc($result);

    if ($key === hash('sha256', $data['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;

            if (isset($_POST['remember'])) {
                setcookie('num', $data['id'], time() + 60);
                setcookie('key', hash('sha256', $data['username']), time() + 60);
            }

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
    <title>Sign In</title>
</head>
<body>
    <h1>Sign In</h1>
    <form action="" method="post">
        <label for="username">Username :</label><br>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password :</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <label for="remember">Remember me</label>
        <input type="checkbox" name="remember" id="remember">
        <?php if (isset($error)) : ?>
            <p>Username / password salah</p>
        <?php endif; ?>

        <a href="signup.php">Sign Up</a>
        <button type="submit" name="submit">Sign In</button>
    </form>
</body>
</html>