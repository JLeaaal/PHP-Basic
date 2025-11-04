<?php
$alunos = [
    ["nome" => "luiz", "cidade" => "curitiba", "idade" => 52, "curso" => "adm"],
    ["nome" => "ana", "cidade" => "curitiba", "idade" => 38, "curso" => "ads"],
    ["nome" => "felipe", "cidade" => "são josé dos pinhais", "idade" => 21, "curso" => "direito"],
    ["nome" => "camila", "cidade" => "curitiba", "idade" => 18, "curso" => "ads"],
];
foreach($alunos as $a){
    echo "nome: " . $a["nome"] . "\n" . "cidade: " . $a["cidade"] . "\n". "idade: " . $a["idade"] . "\n" . "curso: " . $a["curso"];
}