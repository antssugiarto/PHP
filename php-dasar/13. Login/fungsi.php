<?php
$connection = mysqli_connect('localhost', 'root', '', 'universitas');

function show($query)
{
    global $connection;
    $result = mysqli_query($connection, $query);
    $array = [];
    while ($element = mysqli_fetch_assoc($result)) {
        $array[] = $element;
    };
    return $array;
}

function addchadel($query)
{
    global $connection;
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}

function upload()
{
    $fileName = $_FILES['gambar']['name'];
    $fileSize = $_FILES['gambar']['size'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    $validation = ['jpg', 'jpeg', 'png'];
    $imgExtentions = strtolower(end(explode('.', $fileName)));
    $imgName = uniqid() . "." . "$imgExtentions";

    if (!in_array($imgExtentions, $validation)) {
        echo "
            <script>
                alert('Format gambar tidak didukung');
                document.location.href = 'tambah.php';
            </script>
        ";
        return false;
    }

    if ($fileSize > 1000000) {
        echo "
            <script>
                alert('Ukuran gambar terlalu besar');
                document.location.href = 'tambah.php';
            </script>
        ";
        return false;
    }

    move_uploaded_file($tmpName, "Gambar/$imgName");
    return $imgName;
}

function register()
{
    global $connection;

    $username = strtolower(stripslashes($_POST['username']));
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $password2 = mysqli_real_escape_string($connection, $_POST['password2']);

    $result = mysqli_query($connection, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('Username sudah terdaftarkan'); 
            </script>";
        return false;
    }

    if ($password !== $password2) {
        echo "
            <script>
                alert('Konfirmasi password tidak sesuai'); 
            </script>";
        return false;
    };

    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($connection, "INSERT INTO user VALUES ('', '$username', '$password')");
    return mysqli_affected_rows($connection);
}
