<?php
// Variabel untuk koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "universitas");

// Fungsi untuk mengambil dan menampilkan data dari database
function query($query)
{
    global $connection;
    $result = mysqli_query($connection, $query);
    $data_set = [];
    while ($data = mysqli_fetch_assoc($result)) {
        $data_set[] = $data;
    };
    return $data_set;
};
