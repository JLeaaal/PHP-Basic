<?php
//Autor: julia
//data: 14/08/25
//assunto: lista de exercicios: exercicio 3
    //variaveis entrada
    echo "qual o seu nome? ";
    $nome = fgets(STDIN);
    $nome = trim($nome);
    echo "quanto você gasta com alimentação no mês? (em reais): ";
    $alimento = fgets(STDIN);
    echo "quanto você gasta com transporte no mês? (em reais): ";
    $transporte = fgets(STDIN);
    //processamento
    $media = ($alimento + $transporte)/2;
    //saida
    echo "a média de gasto mensal do(a) aluno(a): " . $nome . " é R$" . number_format($media,2) . "\n";

    echo "quer ver a média diaria de gasto? (s/n) ";
    $opcao = trim(fgets(STDIN));
    $mediad = $media/30;
    if($opcao == "s"){
        echo $nome . " sua média diaria de gasto é: " . number_format($mediad,2);
    }else{
        echo "ok, muito obrigada.";
    }
    
?>