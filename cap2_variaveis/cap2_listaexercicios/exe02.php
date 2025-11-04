<?php
//Autor: julia
//data: 14/08/25
//assunto: lista de exercicios: exercicio 2
    //variaveis de entrada
    echo "digite o nome do aluno: ";
    $nome = fgets(STDIN);
    $nome = trim($nome);
    echo "digite a nota do bim 1: ";
    $nota1 = fgets(STDIN);
    echo "digite a nota do bim 2: ";
    $nota2 = fgets(STDIN);

//processamento
    $media = ($nota1 + $nota2)/2;

//saida
    echo "a média do aluno(a) " . $nome . " é: " . $media;
?>