<?php
echo "Digite um número n: ";
$n = intval(trim(fgets(STDIN)));

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i * $j . " ";
    }
    echo "\n";
}
?>
