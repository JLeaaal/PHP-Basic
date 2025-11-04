<?php
//Autor: Julia
//Data: 06/10/25
//Assunto: Lista de Exercicios: 11

function ordenarArray($array, $letra) {
    if (strtoupper($letra) == 'C') {
        sort($array);
        echo "\nVocê escolheu ordem crescente:\n";
        print_r($array);
    } elseif (strtoupper($letra) == 'D') {
        rsort($array);
        echo "\nVocê escolheu ordem decrescente:\n";
        print_r($array);
    } else {
        echo "\nOpção inválida! Digite apenas C ou D.\n";
    }
}
$numeros = [];
for ($i = 0; $i < 5; $i++) {
    $numeros[] = rand(1, 100);
}
echo "Os números são:\n";
print_r($numeros);
echo "Digite 'C' para ordem crescente ou 'D' para ordem decrescente: ";
$letra = trim(fgets(STDIN));
ordenarArray($numeros, $letra);