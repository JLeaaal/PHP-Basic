<?php
$alunos = [
    ["nome" => "luiz", "cidade" => "curitiba", "idade" => 52, "curso" => "adm"],
    ["nome" => "ana", "cidade" => "curitiba", "idade" => 38, "curso" => "ads"],
    ["nome" => "felipe", "cidade" => "são josé dos pinhais", "idade" => 21, "curso" => "direito"],
    ["nome" => "camila", "cidade" => "curitiba", "idade" => 18, "curso" => "ads"],
];
print_r($alunos);
$alunos[0] = ["nome" => "luiz fernando", "cidade" => "curitiba", "idade" => 52, "curso" => "adm"];
$alunos[3] = ["nome" => "camila", "cidade" => "curitiba", "idade" => 19, "curso" => "psicologia"];
print_r($alunos);