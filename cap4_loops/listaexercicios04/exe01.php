<?php
echo "Digite o número inicial: ";
$inicio = intval(trim(fgets(STDIN)));

echo "Digite o número final: ";
$fim = intval(trim(fgets(STDIN)));

for ($i = $inicio; $i <= $fim; $i++) {
    if ($i % 2 == 0 && $i % 7 == 0) {
        echo $i . "\n";
    }
}
?>
