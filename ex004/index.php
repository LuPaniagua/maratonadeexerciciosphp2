<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php

$estoque = 100;

while ($estoque > 0) {
    echo "Estoque atual: $estoque unidades\n";
    // Simulando a venda de um produto
    $estoque--;
}

echo "Estoque esgotado.\n";

?>

</body>
</html>