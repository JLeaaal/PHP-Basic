<?php
//Autor: Julia
//Data: 06/10/25
//Assunto: Lista de Exercicios: 02

function adicionarCor($array, $cor) {
    array_push($array, $cor);
    foreach ($array as $c) {
        echo $c . "\n";
    }
}
$cores = ["Azul", "Vermelho", "Verde"];
print_r($cores);
echo "adicionando cores:\n";
adicionarCor($cores, "Roxo");