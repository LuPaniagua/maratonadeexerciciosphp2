<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de pedidos de compra.</title>
</head>
<body>
    <?php 

    function obterNumeroDePedidos() {
        echo "Digite o número de pedidos a serem processados: ";
        $handle = fopen ("php://stdin","r");
        $numeroDePedidos = fgets($handle);
        return (int)trim($numeroDePedidos);
    }
    
    $numeroDePedidos = obterNumeroDePedidos();
    
    for ($i = 1; $i <= $numeroDePedidos; $i++) {
        echo "Processando pedido $i\n";
    }
    
    echo "Todos os pedidos foram processados.\n";
    
    ?>
    
</body>
</html>