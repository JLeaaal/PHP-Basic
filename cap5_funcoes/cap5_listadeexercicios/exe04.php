<?php
//Autor: Julia
//Data: 17/09/25
//Assunto: Lista de Exercicios: 04

function calcularIMC($peso, $altura){
    return $peso / ($altura * $altura);
}

function avaliarIMC($imc){
    if($imc < 18.5){
        return "Magreza";
    }elseif($imc < 25){
        return "Normal";
    }elseif($imc < 30){
        return "Sobrepeso";
    }elseif($imc < 35){
        return "Obesidade Grau I";
    }elseif($imc < 40){
        return "Obesidade Grau II (severa)";
    }else{
        return "Obesidade Grau III (mórbida)";
    }
}

echo "Digite seu peso (kg): ";
$peso = trim(fgets(STDIN));

echo "Digite sua altura (m): ";
$altura = trim(fgets(STDIN));

$imc = calcularIMC($peso, $altura);
$status = avaliarIMC($imc);

echo "Seu IMC é: " . number_format($imc, 2) . " - " . $status;
?>
