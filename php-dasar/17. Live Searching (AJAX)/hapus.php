<?php
require 'fungsi.php';

session_start();
session('login.php');

$id = $_GET['id'];

if (addchadel("DELETE FROM mahasiswa WHERE id = '$id'") > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href='index.php';
        </script>
    ";
};
