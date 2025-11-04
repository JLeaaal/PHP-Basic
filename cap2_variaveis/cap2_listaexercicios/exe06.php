<?php
//autor: julia
//data: 14/08/25
//assunto: lista de exercicio: exercicio 06
    //entrada
    echo "Qual o seu nome? ";
    $nome = fgets(STDIN);
    $nome = trim($nome);
    echo "qual a distancia da viagem? (em km): ";
    $percurso = fgets(STDIN);
    //CONSTANTES
    const VALOR_LITRO = 6.50; //(em reais)
    const CONSUMO_CARRO = 12; //(km/litro)
    //processamento
    //preimeiro calcula a qntd de litros gastos
    $qtd_litros = $percurso / CONSUMO_CARRO;
    //depois calcula o custo da viagem
    $custo_viagem = $qtd_litros * VALOR_LITRO;

    //saida
    echo "O custo da viagem vai ser: " . $custo_viagem;
?>