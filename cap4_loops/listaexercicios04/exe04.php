<?php
echo "Digite um número: ";
$n = intval(trim(fgets(STDIN)));

$fatorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $fatorial *= $i;
}
echo "Fatorial de $n é $fatorial\n";
?>
