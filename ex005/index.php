<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Cliente</title>
</head>
<body>
    <h1> Verificação de Cliente </h1>
    <?php 
    

$senha_correta = "mamão";
$tentativas = 3;


while ($tentativas > 0) {
    
    $senha = readline("Digite a senha: ");
    
    
    if ($senha === $senha_correta) {
        echo "Acesso Permitido\n";
        exit;  
    } else {
        $tentativas--;  
        if ($tentativas > 0) {
            echo "Senha incorreta. Você tem $tentativas tentativas restantes.\n";
        }
    }
}


if ($tentativas === 0) {
    echo "Acesso Negado\n";
}
?>

    
</body>
</html>