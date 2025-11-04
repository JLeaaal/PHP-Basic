<?php
function cadastrousuario(
    $nome = "visitante",
    $idade = "não informado",
    $email = "não informado",
    $tipo = "comum",
){
    echo "===cadastro de usuario===\n";
    echo "nome: $nome\n";
    echo "idade: $idade\n";
    echo "email: $email\n";
    echo "tipo: $tipo\n";
}
cadastrousuario("maria", 23, "maria@gmail.com", "aluna");
cadastrousuario(email: "maria@gmail.com");
cadastrousuario(nome: "luiz", idade: 50, tipo: "professor");
?>