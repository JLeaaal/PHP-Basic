<?php
//Autor: Julia
//Data: 28/08/25
//Assunto: Lista de Exercicios: Exercicio 03
echo "digite o primeiro número: ";
$n1 = trim(fgets(STDIN));
echo "digite o segundo número: ";
$n2 = trim(fgets(STDIN));
echo "digite o terceiro número: ";
$n3 = trim(fgets(STDIN));

// considerando que o n1 seja o maior numero, o n2 o do meio e o n3 o menor numero
if($n1 > $n2 && $n1 > $n3){
    if($n2 > $n3){
        echo "a sequencia DECRESCENTE é: \n" . $n1 . ", ". $n2 . " e ". $n3;
    }
    // considerando que o n1 seja o maior numero, o n3 o do meio e o n2 o menor numero
    else{
        echo "a sequencia DECRESCENTE é: \n" . $n1 . ", ". $n3 . " e ". $n2;
    }
}
// considerando que o n2 é o maior numero, o n1 o do meio e o n3 o menor numero
if($n2 > $n1 && $n2 > $n3){
    if($n1 > $n3){
        echo "a sequencia DECRESCENTE é: \n" . $n2 . ", ". $n1 . " e ". $n3;
    }
    // considerando que o n2 é o maior numero, o n3 o do meio e o n1 o menor numero
    else{
        echo "a sequencia DECRESCENTE é: \n" . $n2 . ", ". $n3 . " e ". $n1;
    }
}
// considerando que o n3 é o maior numero, o n1 o do meio e o n3 o menor numero
if($n3 > $n1 && $n3 > $n2){
    if($n1 > $n2){
        echo "a sequencia DECRESCENTE é: \n" . $n3 . ", ". $n1 . " e ". $n2;
    }
    //considerando que o n3 é o maior numero, o n2 o do meio e o n1 o menor numero
    else{
        echo "a sequencia DECRESCENTE é: \n" . $n3 . ", ". $n2 . " e ". $n1;
    }
}
?>