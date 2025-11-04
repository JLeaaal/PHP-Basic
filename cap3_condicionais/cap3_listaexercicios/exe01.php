<?
//Autor: Julia
//Data: 28/08/25
//Assunto: Lista de Exercicios: 01
echo "Digite um número: ";
$numero = trim(fgets(STDIN));
if ($numero >= 0) {
    echo "O número é positivo\n";
} else {
    echo "O número é negativo\n";
}
if ($numero % 2 == 0) {
    echo "O número é par\n";
} else {
    echo "O número é ímpar\n";
}
?>