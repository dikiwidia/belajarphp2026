<?php

$angka_awal = 1;
$angka_akhir = 10000;
$condition = true;
while ($condition) {
    echo $angka_awal;
    echo "<br />";
    $angka_awal++;
    if ($angka_awal == $angka_akhir + 1) {
        $condition = false;
    }
}

?>