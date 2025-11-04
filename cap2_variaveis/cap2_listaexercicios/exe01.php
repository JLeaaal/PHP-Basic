<?php
//Autor: Julia
//Data: 14/08/25
//Assunto: Lista de Exercicios: Exercicio 01
    //Variavel de Entrada
    echo "digite o seu nome: ";
    $nome = fgets (STDIN);
    echo "Digite o valor da temperatura em celcius: ";
    $c = fgets (STDIN); //STDIN -. Standard Input (entrada padrão = terminal)
    //Processamento
    $f = $c * 1.8 + 32;
    $k = $c + 273.15;
    $re = $c * 0.8;
    $ra = $c + 1.8 + 459.67;
    //Saida
    echo "----------------------------------" . "\n";
    echo "olá " . $nome . "segue os resultados: " . "\n";
    echo "a temperatura em fehrenheit é: " . $f . "\n";
    echo "a temperatura em kelvin é: " . $k . "\n";
    echo "a temperatura em reamur é: " . $re . "\n";
    echo "a temperatura em rakine é: " . $ra . "\n";
    echo "----------------------------------";
?>