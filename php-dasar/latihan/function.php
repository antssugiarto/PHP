<?php

$connection = mysqli_connect("localhost", "root", "", "ut");

function show($query) {
    global $connection;

    $result = mysqli_query($connection, $query);
    $array = [];
    while ($element = mysqli_fetch_assoc($result)) {
        $array[] = $element;
    }
    return $array;
}

function addelcha($query) {
    global $connection;
    
    mysqli_query($connection,$query);
    return mysqli_affected_rows($connection);
}

function upload($action) {
    global $connection;

    $fileName = $_FILES["picture"]["name"];
    $fileSize = $_FILES["picture"]["size"];
    $tmpName = $_FILES["picture"]["tmp_name"];

    $validation = ["jpg", "jpeg", "png"];
    $imgExtention = strtolower(end(explode(".", $fileName)));
    $imgName = uniqid() . "." . $imgExtention;

    if (!in_array($imgExtention, $validation)) {
        echo "
        <script>
            alert('File format not supported');
            document.location.href = '$action.php';
        </script>
        ";
        die;
        return false;
    }

    if ($fileSize > 1500000) {
        echo "
        <script>
            alert('File too large');
            document.location.href = '$action.php';
        </script>
        ";
        die;
        return false;
    }
    
    move_uploaded_file($tmpName, "picture/$imgName");
    return $imgName;
}

function register() {
    global $connection;

    $username = stripslashes($_POST["username"]);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $password_ver = mysqli_real_escape_string($connection, $_POST["password_ver"]);

    $result = mysqli_query($connection, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('Username already taken');
            document.location.href = 'signup.php';
        </script>
        ";
        return false;
    }

    if ($password_ver !== $password) {
        echo "
        <script>
            alert('Passwords do not match');
            document.location.href = 'signup.php';
        </script>
        ";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($connection, "INSERT INTO user VALUES ('', '$username', '$password')");
    return mysqli_affected_rows($connection);
}

function session($statement, $redirect) {
    if ($statement === "!") {
        if (!isset($_SESSION["login"])) {
            header("Location: $redirect");
        }
    } else {
        if (isset($_SESSION["login"])) {
            header("Location: $redirect");
        } 
    }
}