<?
//Autor: Julia
//Data: 28/08/25
//Assunto: Lista de Exercicios: Exercicio 06
echo "Digite um número maior que 10: ";
$n1 = trim(fgets(STDIN));
if($n1%2!= 0 && $n1%3!= 0 && $n1%5!= 0 && $n1%7!=0){
    echo "O número é primo";
}
else{
    echo "O número não é primo";
}
?>