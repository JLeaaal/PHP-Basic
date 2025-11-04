<?php
//Autor: Julia
//Data: 17/09/25
//Assunto: Lista de Exercicios: 10

function tabuada($num, $limite){
    for($i = 1; $i <= $limite; $i++){
        echo $num . " x " . $i . " = " . ($num * $i) . "\n";
    }
}

echo "Digite um número para a tabuada: ";
$n = trim(fgets(STDIN));

echo "Digite o limite da tabuada: ";
$lim = trim(fgets(STDIN));

tabuada($n, $lim);
?>
