<?php

echo "Percabangan SWITCH ... CASE";
echo "<br /><br />";

$condition = "C";

switch ($condition) {
    case "A":
        echo "Blok kode A";
        break;
    case "B":
        echo "Blok kode B";
        break;
    case "C":
        echo "Blok kode C";
        break;
    default:
        echo "Tidak ada blok kode yang cocok";
        break;
}
?>