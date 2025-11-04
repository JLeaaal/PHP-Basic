<?php
//Autor: Julia
//Data: 17/09/25
//Assunto: Lista de Exercicios: 03

function somarNumeros($quantidade){
    $soma = 0;
    for($i = 1; $i <= $quantidade; $i++){
        echo "Digite o número $i: ";
        $num = trim(fgets(STDIN));
        $soma += $num;
    }
    return $soma;
}

echo "Quantos números deseja somar? ";
$n = trim(fgets(STDIN));

$total = somarNumeros($n);

echo "A soma dos números é: " . $total;
?>
