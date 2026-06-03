<?php
$nilai = "E";

switch ($nilai) {
    case "A":
    case "B":
        echo "Sangat Baik";
        break;
    case "C":
    case "D":
    case "E":
        echo "Cukup";
        break;
    default:
        echo "Nilai tidak valid";
        break;
}
?>