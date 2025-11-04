<?php
//Autor: Julia
//Data: 02/09/25
//Assunto: Lista de Exercícios - Exercicio 10

echo "Digite o primeiro número: ";
$n1 = trim(fgets(STDIN));
echo "Digite o segundo número: ";
$n2 = trim(fgets(STDIN));
echo "Digite o terceiro número: ";
$n3 = trim(fgets(STDIN));
echo "Digite o quarto número: ";
$n4 = trim(fgets(STDIN));

if ($n1 <= $n2 && $n1 <= $n3 && $n1 <= $n4) {
    if ($n2 <= $n3 && $n2 <= $n4) {
        if ($n3 <= $n4) {
            echo "Ordem crescente: $n1, $n2, $n3, $n4\n";
        } else {
            echo "Ordem crescente: $n1, $n2, $n4, $n3\n";
        }
    } elseif ($n3 <= $n2 && $n3 <= $n4) {
        if ($n2 <= $n4) {
            echo "Ordem crescente: $n1, $n3, $n2, $n4\n";
        } else {
            echo "Ordem crescente: $n1, $n3, $n4, $n2\n";
        }
    } else {
        if ($n2 <= $n3) {
            echo "Ordem crescente: $n1, $n4, $n2, $n3\n";
        } else {
            echo "Ordem crescente: $n1, $n4, $n3, $n2\n";
        }
    }
} elseif ($n2 <= $n1 && $n2 <= $n3 && $n2 <= $n4) {
    if ($n1 <= $n3 && $n1 <= $n4) {
        if ($n3 <= $n4) {
            echo "Ordem crescente: $n2, $n1, $n3, $n4\n";
        } else {
            echo "Ordem crescente: $n2, $n1, $n4, $n3\n";
        }
    } elseif ($n3 <= $n1 && $n3 <= $n4) {
        if ($n1 <= $n4) {
            echo "Ordem crescente: $n2, $n3, $n1, $n4\n";
        } else {
            echo "Ordem crescente: $n2, $n3, $n4, $n1\n";
        }
    } else {
        if ($n1 <= $n3) {
            echo "Ordem crescente: $n2, $n4, $n1, $n3\n";
        } else {
            echo "Ordem crescente: $n2, $n4, $n3, $n1\n";
        }
    }
} elseif ($n3 <= $n1 && $n3 <= $n2 && $n3 <= $n4){
    if ($n1 <= $n2 && $n1 <= $n4) {
        if ($n2 <= $n4) {
            echo "Ordem crescente: $n3, $n1, $n2, $n4\n";
        } else {
            echo "Ordem crescente: $n3, $n1, $n4, $n2\n";
        }
    } elseif ($n2 <= $n1 && $n2 <= $n4) {
        if ($n1 <= $n4) {
            echo "Ordem crescente: $n3, $n2, $n1, $n4\n";
        } else {
            echo "Ordem crescente: $n3, $n2, $n4, $n1\n";
        }
    } else {
        if ($n1 <= $n2) {
            echo "Ordem crescente: $n3, $n4, $n1, $n2\n";
        } else {
            echo "Ordem crescente: $n3, $n4, $n2, $n1\n";
        }
    }
} else {
    if ($n1 <= $n2 && $n1 <= $n3) {
        if ($n2 <= $n3) {
            echo "Ordem crescente: $n4, $n1, $n2, $n3\n";
        } else {
            echo "Ordem crescente: $n4, $n1, $n3, $n2\n";
        }
    } elseif ($n2 <= $n1 && $n2 <= $n3) {
        if ($n1 <= $n3) {
            echo "Ordem crescente: $n4, $n2, $n1, $n3\n";
        } else {
            echo "Ordem crescente: $n4, $n2, $n3, $n1\n";
        }
    } else {
        if ($n1 <= $n2) {
            echo "Ordem crescente: $n4, $n3, $n1, $n2\n";
        } else {
            echo "Ordem crescente: $n4, $n3, $n2, $n1\n";
        }
    }
}
