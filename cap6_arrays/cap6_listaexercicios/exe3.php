<?php
//Autor: Julia
//Data: 06/10/25
//Assunto: Lista de Exercicios: 03

function removerUltimo($array) {
    array_pop($array);
    print_r($array);
}
$cidades = ["Curitiba", "São Paulo", "Rio de Janeiro", "Londrina"];
print_r($cidades);
echo "removendo a última cidade:\n";
removerUltimo($cidades);
