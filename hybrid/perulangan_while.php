<?php

echo "Perulangan WHILE";
echo "<br /><br />";

$condition = true;
$i = 1;
$stop = 100;
while ($condition) {
    echo $i;
    echo "<br />";
    $i++;
    if ($i > $stop) {
        $condition = false;
    }
}
?>