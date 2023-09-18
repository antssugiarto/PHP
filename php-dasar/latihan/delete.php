<?php

require "function.php";

session_start();
session("!", "signin.php");

$id = $_GET['id'];

if (addelcha("DELETE FROM student WHERE id = '$id'") > 0) {
    echo "
        <script>
            alert('Student data deleted successfully');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Student data failed to delete');
            document.location.href = 'index.php';
        </script>
    ";
}