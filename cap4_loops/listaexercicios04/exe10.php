<?php
$somaPares = 0;
$contPares = 0;
$somaImpares = 0;

while (true) {
    echo "Digite um número (0 para sair): ";
    $num = intval(trim(fgets(STDIN)));
    if ($num == 0) break;

    if ($num % 2 == 0) {
        $somaPares += $num;
        $contPares++;
    } else {
        $somaImpares += $num;
    }
}

$mediaPares = $contPares > 0 ? $somaPares / $contPares : 0;

echo "Média dos pares: $mediaPares\n";
echo "Soma dos ímpares: $somaImpares\n";
?>
