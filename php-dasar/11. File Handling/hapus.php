<?php
require 'fungsi.php';

$id = $_GET['id'];

if (addchadel("DELETE FROM mahasiswa WHERE id = '$id'") > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href='index.php';
        </script>
    ";
};
