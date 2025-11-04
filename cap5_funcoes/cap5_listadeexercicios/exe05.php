<?php
//Autor: Julia
//Data: 17/09/25
//Assunto: Lista de Exercicios: 05

function potencia($base, $expoente){
    return pow($base, $expoente);
}

echo "Digite a base: ";
$base = trim(fgets(STDIN));

echo "Digite o expoente: ";
$exp = trim(fgets(STDIN));

$resultado = potencia($base, $exp);

echo "O resultado de $base ^ $exp é: " . $resultado;
?>
