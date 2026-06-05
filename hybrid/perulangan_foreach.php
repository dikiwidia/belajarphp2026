<?php

echo "Perulangan FOREACH";
echo "<br /><br />";

$array = [
    "Melon",
    // "Anggur",
    "Jeruk",
    "Mangga"
];

foreach ($array as $value) {
    echo $value;
    echo "<br />";
}
?>