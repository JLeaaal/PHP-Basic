<?
//Autor: Julia
//Data: 02/09/25
//Assunto: Lista de Exercicios: Exercicio 05

echo "Digite um número de 1 a 7: ";
$numero = (int) trim(fgets(STDIN));

if ($numero == 1) {
    echo "Domingo\n";
} else if ($numero == 2) {
    echo "Segunda-feira\n";
} else if ($numero == 3) {
    echo "Terça-feira\n";
} else if ($numero == 4) {
    echo "Quarta-feira\n";
} else if ($numero == 5) {
    echo "Quinta-feira\n";
} else if ($numero == 6) {
    echo "Sexta-feira\n";
} else if ($numero == 7) {
    echo "Sábado\n";
} else {
    echo "Número inválido!";
}
?>