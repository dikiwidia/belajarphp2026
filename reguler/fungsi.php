<?php

function hitung_luas_persegi($sisi)
{
    return $sisi * $sisi;
}

function hitung_luas_segitiga($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}

$tinggi = 20;
$alas = 10;
$hasil = hitung_luas_segitiga($alas, $tinggi);
echo "Hasil luas segitiga dengan alas $alas dan tinggi $tinggi adalah $hasil";

?>