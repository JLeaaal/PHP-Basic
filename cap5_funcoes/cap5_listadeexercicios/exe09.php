<?php
//Autor: Julia
//Data: 17/09/25
//Assunto: Lista de Exercicios: 09

function aplicarDesconto($valor, $desconto = 0.10){
    return $valor - ($valor * $desconto);
}

echo "Digite o valor da compra: ";
$valor = trim(fgets(STDIN));

echo "Digite o desconto (em decimal, ex: 0.15 para 15%) [Enter para padrão 10%]: ";
$desc = trim(fgets(STDIN));

if($desc == ""){
    $desc = 0.10;
}

$final = aplicarDesconto($valor, $desc);

echo "O valor final da compra com desconto é: " . $final;
?>
