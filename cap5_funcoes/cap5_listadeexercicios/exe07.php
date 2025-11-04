<?php
//Autor: Julia
//Data: 17/09/25
//Assunto: Lista de Exercicios: 07

function ehPrimo($num){
    if($num <= 1) return false;
    for($i = 2; $i <= sqrt($num); $i++){
        if($num % $i == 0){
            return false;
        }
    }
    return true;
}

echo "Digite um número: ";
$n = trim(fgets(STDIN));

if(ehPrimo($n)){
    echo $n . " é primo.";
}else{
    echo $n . " não é primo.";
}
?>
