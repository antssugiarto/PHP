<?php
require 'functions.php';

$id = $_GET['id'];

if (addelcha("DELETE FROM mahasiswa WHERE id = '$id'") > 0) {
    echo "
            <script>
                alert('Data berhasil dihapus');
                document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data gagal dihapus');
            </script>
        ";
};
