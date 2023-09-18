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
    $imgExtentions = explode('.', $fileName);
    $imgExtentions = strtolower(end($imgExtentions));

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

    $imgName = uniqid() . "." . "$imgExtentions";
    move_uploaded_file($tmpName, "Gambar/$imgName");
    return $imgName;
}
