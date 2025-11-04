<?
//Autor: Julia
//Data: 28/08/25
//Assunto: Lista de Exercicios: 02

echo "Digite seu nome: ";
$nome = trim(fgets(STDIN));
echo "Digite sua idade: ";
$idade = trim(fgets(STDIN));
echo "Possui CNH? (s/n): ";
$cnh = trim(fgets(STDIN));

if($idade >= 18 && $cnh == "s"){
    echo $nome . ", você pode dirigir!";
}else{
    echo $nome . ", você não pode dirigir!";
}
?>