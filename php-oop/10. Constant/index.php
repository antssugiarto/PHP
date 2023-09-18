<?php

// Constant = sebuah identifier untuk menyimpan nilai tetap
// Cara membuat constant = define() [constant tidak bisa di dalam class], const [constant bisa di dalam class]

define("NAMA", "Antonius");
echo NAMA;
echo "<br>";

const NIM = 102504;
echo NIM;
echo "<br>";

class Coba
{
    const NO = 1;
}
echo Coba::NO;
echo "<br>";
