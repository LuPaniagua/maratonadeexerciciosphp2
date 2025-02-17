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

$senha_correta = "12345";
$tentativas = 3;
$senha_tentativas = ["wrong", "wrong", "wrong"]; //Todas as tentativas são erradas

while ($tentativas > 0) {
    $senha = $senha_tentativas[3 - $tentativas]; //Acesso à tentativa atual

    if ($senha == $senha_correta){
        echo "Acesso concedido!\n";
        break;
    } else {
        $tentativas--;
        echo "Senha incorreta. Tentativas restantes: $tentativas <br>";
    }
}

if ($tentativas == 0) echo "Acesso negado.<br>";  
?>  
</body>
</html>
