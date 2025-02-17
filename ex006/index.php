<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem de Tentativas de Login</title>
</head>
<body>
    <h1> Tentativas de Login </h1>
    <?php 
    
    $senha_certa = "gojo";
    $tentativas = 3;

    do {
    $senha = readline("Digite a senha: "); 
    if ($senha === $senha_certa){
        echo "Acesso permitido";
        break;
    } else {
        $tentativas--;
        if ($tentativas >0) {
            echo "Senha incorreta. Você tem $tentativas tentativas restantes.";
        }
    }
    } while ($tentativas >0);

    if ($tentativas === 0) {
        echo "Acesso negado";
    }

    $senhaCorreta = "senha123"; //Senha correta
    $tentativas = 0;

    do {
        //Simulla a senha errada (senha tentada é sempre errada)
        $senhaDigitada = "senha" . ($tentativas + 1);
        $tentativas++;

        //Mensagens diferentes a casa tentativa

        switch (tentativas) {
            case 1:
            echo "Primeira tentativa... Vamos lá" <br>";
            break;
            case 2


        
    
    ?>
</body>
</html>
