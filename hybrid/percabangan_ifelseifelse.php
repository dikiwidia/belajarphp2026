<?php

echo "Percangan IF ... ELSEIF ... ELSE";
echo "<br /><br />";

$condition = "Z";

if ($condition == "A") {
    echo "Blok kode A";
} elseif ($condition == "B") {
    echo "Blok kode B";
} elseif ($condition == "C") {
    echo "Blok kode C";
} else {
    echo "Tidak ada blok kode yang cocok";
}
?>