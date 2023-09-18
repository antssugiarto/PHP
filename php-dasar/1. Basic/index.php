<?php
// Komentar single line

/*
Komentar multi line
*/

echo "Ini echo <br>"; 
echo 123 ,"<br>"; 
echo true, "<br>";

print "Ini print <br>";

print_r ("Ini print_r <br>");

var_dump ("Ini vardump");
echo "<br>";

$nama = "Anton";
$nomer = 1;
echo "Nama saya $nama dan nomer saya $nomer <br>";
// Nama variabel tidak boleh diawali dengan angka, tapi boleh mengadung angka dan tidak boleh ada spasi
// Memanggil variabel harus dengan kutip dua

// Operator Aritmatika
// + - * / %
$x = 25;
$y = 2;
echo $x % $y . "<br>";

// Operator Concate
// .
$x = "Antonius";
$y = "Sugiarto";
echo $x . " " . $y . "<br>"; 

// Operator Assignment
// = += -= *= /= %= .=
$x = 5;
$x *= 2;
echo $x . "<br>";

// Operator Perbandingan
// < > <= >= ==
var_dump (1 > 5);
echo "<br>";
var_dump (1 == "1");
echo "<br><br>";

// Operator Identitas
// === !===
var_dump (1 === "1");
echo "<br>";
var_dump (1 !== "1");
echo "<br>";
?>