<?
//Autor: Julia
//Data: 28/08/25
//Assunto: Lista de Exercicios: Exercicio 08
const NOME = "admin";
const SENHA = "1234";
echo "Digite o login: ";
$usuario = trim(fgets(STDIN));
echo "digite a senha: ";
$chave = trim(fgets(STDIN));
if($usuario == NOME && $chave == SENHA){
    echo "Você é o administrador";
}
else{
    echo "Você não é o administrador";
}
?>