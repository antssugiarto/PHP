<?php

require "function.php";

session_start();
session("!", "signin.php");

$students = show("SELECT * FROM student");

if (isset($_POST["submit"])) {
    $keyword = $_POST["keyword"];
    $students = show("SELECT * FROM student WHERE name LIKE '%$keyword%' OR department LIKE '%$keyword%' OR email LIKE '%$keyword%'");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Data</title>
</head>
<body>
    <h1>Students Data</h1>
    <form action="" method="post">
        <input type="text" name="keyword" placeholder="Enter a keyword" autofocus autocomplete="off">
        <button type="submit" name="submit">Search</button><br><br>
    </form>
    <a href="add.php">Add Student Data</a><br><br>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Name</th>
            <th>Department</th>
            <th>Email</th>
            <th>Picture</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($students as $stdts) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><a href="change.php?id=<?= $stdts["id"]; ?>">Change</a> | <a href="delete.php?id=<?= $stdts["id"]; ?>" onclick="return confirm('Are you sure you want to delete data?')">Delete</a></td>
                <td><?= $stdts["name"]; ?></td>
                <td><?= $stdts["department"]; ?></td>
                <td><?= $stdts["email"]; ?></td>
                <td><img src="picture/<?= $stdts["picture"]; ?>" width="100" height="120"></td>

            </tr>
        <?php endforeach; ?>
    </table><br><br>
    <a href="signout.php">Sign Out</a>
</body>
</html>