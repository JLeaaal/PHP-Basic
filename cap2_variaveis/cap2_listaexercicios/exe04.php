<?php
//Autor: julia
//data: 14/08/25
//assunto: lista de exercicios: exercicio 4
    //entrada
    echo "qual o seu nome? ";
    $nome = fgets(STDIN);
    echo "qual a massa? (kg) ";
    $massa = fgets(STDIN);
    echo "qual a altura? (m) ";
    $altura = fgets(STDIN);
    echo "qual o tempo? (s) ";
    $tempo = fgets(STDIN);
    //processamento
    $cavalos = ($massa * $altura / $tempo)/745.6999;
    
    //saida
    echo "a quantidade de cavalos necessaria é: " . number_format($cavalos,2);
?>