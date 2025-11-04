<?php
echo "Digite o primeiro número: ";
$n1 = intval(trim(fgets(STDIN)));

echo "Digite o segundo número: ";
$n2 = intval(trim(fgets(STDIN)));

$soma = 0;
for ($i = min($n1, $n2); $i <= max($n1, $n2); $i++) {
    if ($i % 2 != 0) {
        $soma += $i;
    }
}
echo "Soma dos ímpares: $soma\n";
?>
