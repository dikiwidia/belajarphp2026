<?php

$datas = [
    ["nama" => "Abdul", "usia" => 21],
    ["nama" => "Risa", "usia" => 24],
    // ["nama" => "Indri", "usia" => 25],
    ["nama" => "Ahmad", "usia" => 19],
];

foreach ($datas as $data) {
    echo "Nama: $data[nama] Usia: $data[usia]";
    echo "<br />";
}

?>