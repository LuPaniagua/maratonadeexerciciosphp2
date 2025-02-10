<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Autenticação de Funcionários</title>
</head>
<body>
    <h1> Sistema de Autenticação de Funcionários</h1>
    <?php
$funcionarios = [
    ['id' => 1, 'nome' => 'Ana', 'ativo' => true, 'permissao' => false, 'admin' => true],
    ['id' => 2, 'nome' => 'Bruno', 'ativo' => true, 'permissao' => false, 'admin' => false],
    ['id' => 3, 'nome' => 'Carla', 'ativo' => false, 'permissao' => true, 'admin' => true],
];

function autenticarFuncionario($funcionario) {
    if (($funcionario['permissao'] && $funcionario['ativo']) || $funcionario['admin']) {
        return true;
    }     else {
        return false;
    }
}

foreach ($funcionarios as $funcionario) {
    $nome = $funcionario['nome'];
    if (autenticarFuncionario($funcionario)) {
        echo "Acesso permitido para $nome.\n";
    } else {
        echo "Acesso negado para $nome.\n";
    }
}
?>

    
</body>
</html>