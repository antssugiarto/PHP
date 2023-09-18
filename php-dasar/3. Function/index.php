<?php
    // Contoh fungsi di libary PHP
    // DATE
    // echo date(l(hari), d(tanggal), m(bulan angka), M(bulan teks), y(tahun angka), Y(tahun teks));
    echo "<b>Latihan Fungsi Date<br></b>";
    echo "Hari ini :<br>", date('l, d M Y'); 
    echo "<br>";

    // TIME
    // echo time();
    echo "<b><br>Latihan Fungsi Time<br></b>";
    echo "Detik saat ini dari 1 Januari 1970 :<br>", time();
    echo "<br>";

    // ** DATE & TIME
    echo "<b><br>Latihan Fungsi Date & Time<br></b>";
    echo "Dua hari lagi :<br>", date("d M Y", time()+60*60*24*2);
    echo "<br>";

    // MKTIME
    // echo mktime(jam, menit, detik, bulan, tanggal, tahun);
    echo "<b><br>Latihan Fungsi Mktime<br></b>";
    echo "Detik 25-10-04 dari 1 Januari 1970 :<br>", mktime(0,0,0,10,25,2004);
    echo "<br>";

    // ** DATE & MKTIME
    echo "<b><br>Latihan Fungsi Date & Mktime<br></b>";
    echo "Hari pada tanggal tertentu (25-10-04) :<br>", date("l", mktime(0,0,0,25,10,2004));
    echo "<br>";

    // STRTOTIME
    // echo strtotime("tanggal bulan tahun");
    echo "<b><br>Latihan Fungsi Strtotime<br></b>";
    echo "Detik 25-10-04 dari 1 Januari 1970 :<br>", strtotime("25 oct 2004");
    echo "<br><br>";

?>