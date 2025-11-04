<?php
$caminho = "C://Users//julia//OneDrive//Desktop//PHP//cap7_teste//";
$arquivo = "teste.txt";
$array_alunos = [];
//abro o arquivo para leitura
$linhas = file($caminho . $arquivo, FILE_IGNORE_NEW_LINES);
print_r($linhas);

foreach ($linhas as $indice => $linha){
    $campos = explode(';', $linha);
    $array_alunos[] = $campos;
}
echo("Nome\tCurso\tPeriodo\tTurma\tNotas\n");

for ($i = 0; $i < count($array_alunos); $i++){
    for ($j = 0; $j < count($array_alunos[$i]); $j++){
    echo(trim($array_alunos[$i][$j]) . "\t"); }
    
echo "\n";
    
}
