<?php
//Autor: Julia
//Data: 17/09/25
//Assunto: Lista de Exercicios: 08

function jurosSimples($capital, $taxa, $tempo){
    return $capital + ($capital * $taxa * $tempo);
}

echo "Digite o capital inicial: ";
$capital = trim(fgets(STDIN));

echo "Digite a taxa (em decimal, ex: 0.05 para 5%) [Enter para padrão 5%]: ";
$taxa = trim(fgets(STDIN));
if($taxa == ""){
    $taxa = 0.05;
}

echo "Digite o tempo (em meses): ";
$tempo = trim(fgets(STDIN));

$resultado = jurosSimples($capital, $taxa, $tempo);

echo "O valor final do investimento é: " . $resultado;
?>
