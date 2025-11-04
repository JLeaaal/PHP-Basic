<?php
//Autor: Julia
//Data: 06/10/25
//Assunto: Lista de Exercicios: 06

function verificarAluno($array, $nomeDigitado) {
    if (in_array($nomeDigitado, $array)) {
        echo "Aluno encontrado no cadastro.\n";
    } else {
        echo "Aluno não encontrado no cadastro.\n";
    }
}
$alunos = ["João", "Maria", "Pedro", "Ana", "Lucas"];
echo "Digite o nome do aluno: ";
$nome = trim(fgets(STDIN));
verificarAluno($alunos, $nome);