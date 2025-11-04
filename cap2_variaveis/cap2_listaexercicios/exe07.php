<?php
//Autor: Julia
//Data: 14/08/25
//Assunto: Lista de Exercicios: Exercicio 01
    //entrada
    echo "qual o seu nome? ";
    $nome = fgets(STDIN);
    echo "quantos anos você tem? ";
    $anos = fgets(STDIN);
    echo "quantos meses você tem? ";
    $meses = fgets(STDIN);
    echo "quantos dias você tem? ";
    $dias = fgets(STDIN);
    //processamento
    $diastotais = ($anos * 365) + ($meses * 30) + $dias;

    //saida
    echo "o total de dias que representa a sua idade é: " . $diastotais; 
?>