<?php
//Autor: Julia
//Data: 14/08/25
//Assunto: Lista de Exercicios: Exercicio 05
    //entrada
    echo "qual o seu nome? ";
    $nome = fgets(STDIN);
    echo "qual o raio da lata? ";
    $raio = fgets(STDIN);
    echo "qual a altura da lata? ";
    $altura = fgets(STDIN);
    //processamento
    $volume = 3.14159 * $raio * $raio * $altura;

    //saida
    echo "o volume total da lata é: " . number_format($volume,2);
?>