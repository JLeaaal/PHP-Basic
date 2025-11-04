<?php
//Autor: Julia
//Data: 06/10/25
//Assunto: Lista de Exercicios: 10

function mostrarValorPorChave($array, $chavedigitada) {
    if (array_key_exists($chavedigitada, $array)) {
        echo $array[$chavedigitada] . "\n";
    } else {
        echo "Chave não encontrada\n";
    }
}
$produtos = ["nome" => "Notebook", "preço" => 3500, "estoque" => 10, "marca" => "Dell"];
echo "Qual chave deseja buscar?\n";
$chave = trim(fgets(STDIN));
mostrarValorPorChave($produtos, $chave);