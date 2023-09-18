<?php

class Contoh
{
    public static $nama = "Anton";

    public static function salam()
    {
        return "Hai " . self::$nama;
    }
}

echo Contoh::$nama;
echo "<hr>";
echo Contoh::salam();
