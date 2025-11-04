<?php
//Autor: Julia
//Data: 17/09/25
//Assunto: Lista de Exercicios: 06

function maiorMenor($a, $b, $c){
    $maior = max($a, $b, $c);
    $menor = min($a, $b, $c);
    return array($maior, $menor);
}

echo "Digite o primeiro número: ";
$n1 = trim(fgets(STDIN));

echo "Digite o segundo número: ";
$n2 = trim(fgets(STDIN));

echo "Digite o terceiro número: ";
$n3 = trim(fgets(STDIN));

list($maior, $menor) = maiorMenor($n1, $n2, $n3);

echo "Maior número: " . $maior . "\n";
echo "Menor número: " . $menor;
?>
