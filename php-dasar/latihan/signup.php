<?php

require "function.php";

if (isset($_POST["submit"])) {
    if (register() > 0) {
        echo "
            <script>
                alert('User account has been successfully registered');
                document.location.href = 'signin.php';
            </script>
        ";
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="" method="post">
        <label for="username">Username :</label><br>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password :</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <label for="password_ver">Verify Password :</label><br>
        <input type="password" name="password_ver" id="password_ver" required><br><br>

        <a href="signin.php">Sign In</a>
        <button type="submit" name="submit">Sign Up</button>
    </form>
</body>
</html>