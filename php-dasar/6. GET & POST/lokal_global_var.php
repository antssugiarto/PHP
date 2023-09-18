<?php
$ucapan = "Selamat Datang";

function salam($nama)
{
    global $ucapan;
    echo $ucapan . " " . $nama;
    return;
}

salam("Anton");
