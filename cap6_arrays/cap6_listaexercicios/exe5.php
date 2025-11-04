<?php
//Autor: Julia
//Data: 06/10/25
//Assunto: Lista de Exercicios: 05

function removerElementos($array, $quantidade) {
    for ($i = 0; $i < $quantidade; $i++) {
        array_shift($array);
    }
    print_r($array);
}
$paises = ["Brasil", "Argentina", "Chile", "Peru"];
print_r($paises);
echo "remoção de paises:\n";
removerElementos($paises, 2);