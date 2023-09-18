<?php

require "function.php";

session_start();
session("!", "signin.php");

if (isset($_POST["submit"])) {
    $name = htmlspecialchars($_POST["name"]);
    $department = htmlspecialchars($_POST["department"]);
    $email = htmlspecialchars($_POST["email"]);
    $picture = upload("add");

    if (addelcha("INSERT INTO student VALUES ('', '$name', '$department', '$email', '$picture')") > 0) {
        echo "
            <script>
                alert('Student data added successfully');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Student data failed to add');
                document.location.href = 'index.php';
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
    <title>Add Student Data</title>
</head>
<body>
    <h1>Add Student Data</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name :</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="department">Department :</label><br>
        <input type="text" name="department" id="department" required><br><br>

        <label for="email">Email :</label><br>
        <input type="text" name="email" id="email" required><br><br>

        <label for="picture">Picture :</label><br>
        <input type="file" name="picture" id="picture" required><br><br>

        <a href="index.php">Back</a>
        <button type="submit" name="submit">Add</button>
    </form>
</body>
</html>