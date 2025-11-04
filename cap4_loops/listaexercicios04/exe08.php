<?php
$usuarioCorreto = "admin";
$senhaCorreta = "1234";

for ($tentativas = 1; $tentativas <= 3; $tentativas++) {
    echo "Digite o nome: ";
    $nome = trim(fgets(STDIN));
    
    echo "Digite a senha: ";
    $senha = trim(fgets(STDIN));

    if ($nome === $usuarioCorreto && $senha === $senhaCorreta) {
        echo "Acesso permitido!\n";
        exit;
    } else {
        echo "Usuário ou senha incorretos!\n";
    }
}
echo "Acesso bloqueado!\n";
?>
