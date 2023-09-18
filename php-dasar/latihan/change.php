<?php

require "function.php";

session_start();
session("!", "signin.php");

$id = $_GET['id'];
$student = show("SELECT * FROM student WHERE id = '$id'")[0];

if (isset($_POST["submit"])) {
    $name = htmlspecialchars($_POST["name"]);
    $department = htmlspecialchars($_POST["department"]);
    $email = htmlspecialchars($_POST["email"]);
    $oldPicture = $student["picture"];

    if ($_FILES["picture"]["error"] === 4) {
        $picture = $oldPicture;
    } else {
        $picture = upload("change");
    }

    if (addelcha("UPDATE student SET name = '$name', department = '$department', email = '$email', picture = '$picture' WHERE id = '$id'") > 0) {
        echo "
            <script>
                alert('Student data changed successfully');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Student data failed to change');
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
        <input type="text" name="name" id="name" required value="<?= $student['name']; ?>"><br><br>

        <label for="department">Department :</label><br>
        <input type="text" name="department" id="department" required value="<?= $student['department']; ?>"><br><br>

        <label for="email">Email :</label><br>
        <input type="text" name="email" id="email" required value="<?= $student['email']; ?>"><br><br>

        <label for="picture">Picture :</label><br>
        <input type="file" name="picture" id="picture" value="<?= $student['picture']; ?>"><br><br>

        <a href="index.php">Back</a>
        <button type="submit" name="submit">Change</button>
    </form>
</body>
</html>