<?php
//Autor: Julia
//Data: 06/10/25
//Assunto: Lista de Exercicios: 07

function mostrarChaves($array) {
    print_r(array_keys($array));
}
$produtos = ["nome" => "Notebook", "preço" => 3500, "estoque" => 10, "marca" => "Dell"];
mostrarChaves($produtos);