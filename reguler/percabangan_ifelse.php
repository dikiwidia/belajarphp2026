<?php
$condition1 = false;
$condition2 = true;
$condition3 = false;

if ($condition1 || ($condition2 && $condition3)) {
    echo "Blok kode true";
} else {
    echo "Blok kode false";
}

?>