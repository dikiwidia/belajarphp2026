<?php

$suhu_udara_terendah = -40;
$suhu_udara_tertinggi = 83;

echo "Suhu udara terendah saat ini adalah $suhu_udara_terendah dan yang tertinggi adalah $suhu_udara_tertinggi";

echo "<br /><br />";

// luas lingkaran = pi * r * r
$pi = 3.14;
$r = 7;
$luas_lingkaran = $pi * $r * $r;
$satuan = "cm^2";

echo "Luas lingkaran dengan jari-jari $r adalah $luas_lingkaran $satuan";

echo "<br /><br />";

$buah = ["Melon", "Anggur", "Jeruk", "Mangga"];
echo $buah[0];

echo "<br /><br />";

$buku = [
    "judul" => "Buku A",
    "pengarang" => "Moch Diki Widianto",
    "tahun_terbit" => 2023
];
echo $buku["pengarang"];

