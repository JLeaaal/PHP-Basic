<?php
//Autor: Julia
//Data: 06/10/25
//Assunto: Lista de Exercicios: 09
function mostrarValores($array) {
    print_r(array_values($array));
}
$produtos = ["nome" => "Notebook", "preço" => 3500, "estoque" => 10, "marca" => "Dell"];
mostrarValores($produtos);