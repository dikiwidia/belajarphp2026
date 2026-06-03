<?php

function captcha($ukuran_char = 4)
{
    $data_huruf = ["a", "b", "c", "d", "e"];
    $awal_char = 0;
    $condition = true;
    $hasil_captcha = "";
    while ($condition) {
        $random_number_char = rand(0, 9);
        $huruf = $data_huruf[rand(0, 4)];
        $is_char = rand(0, 1) ? true : false;
        if ($is_char) {
            $hasil_captcha .= $huruf;
        } else {
            $hasil_captcha .= $random_number_char;
        }
        $awal_char++;
        if ($awal_char == $ukuran_char) {
            $condition = false;
        }
    }
    return $hasil_captcha;
}

for ($i = 0; $i < 1000; $i++) {
    echo captcha(20);
    echo "<br />";
}

?>