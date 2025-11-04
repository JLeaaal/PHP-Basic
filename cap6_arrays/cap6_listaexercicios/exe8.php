<?php
//Autor: Julia
//Data: 06/10/25
//Assunto: Lista de Exercicios: 08

function verificarChave($array, $chavedigitada) {
    if (array_key_exists($chavedigitada, $array)) {
        echo "A chave existe\n";
    } else {
        echo "A chave não existe\n";
    }
}
$produtos = ["nome" => "Notebook", "preço" => 3500, "estoque" => 10];
echo "Qual chave deseja buscar?\n";
$chave = trim(fgets(STDIN));
verificarChave($produtos, $chave);