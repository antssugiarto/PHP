<?php
// Pengulangan
// FOR
// for (nilai awal; nilai akhir; increment/decrement) {kondisi};
echo "Latihan For<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "No $i<br>";
};
echo "<br>";

// WHILE
// nilai awal;
// while (nilai akhir) {kondisi; increment/decrement};
echo "Latihan While<br>";
$j = 1;
while ($j <= 5) {
    echo "While $j<br>";
    $j++;
};
echo "<br>";

// DO...WHILE
// nilai awal;
// do {kondisi; increment/decrement} while (nilai akhir);
echo "Latihan Do...While<br>";
$k = 1;
do {
    echo "DW $k<br>";
    $k++;
} while ($k <= 5);
echo "<br>";

// foreach (Pengulangan khusus array)


// Percabangan
// IF ELSE
// nilai awal kondisi
// if (nilai akhir kondisi) {kondisi benar} else {kondisi salah};
echo "Latihan If Else<br>";
$x = "Anton";
if ($x == "Anton") {
    echo "Hai, selamat datang Anton";
} else {
    echo "Kamu bukan Anton";
};
echo "<br>";

// IF ELSEIF ELSE
// nilai awal kondisi
// if (nilai akhir kondisi) {kondisi benar} elseif {kondisi benar lain} else {kondisi salah};
echo "<br>Latihan If Elseif Else<br>";
$x = "Anton";
if ($x == "Antonius") {
    echo "Hai, selamat datang Antonius";
} elseif ($x == "Anton") {
    echo "Wah...Saya hampir lupa denganmu";
} else {
    echo "Kamu bukan Anton";
};

// TERNARY
// SWITCH
?>