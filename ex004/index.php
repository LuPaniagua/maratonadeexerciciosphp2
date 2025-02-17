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

//Inicializa o estoque com 100 
$estoque = 100;

//Enquanto houver unidades no estoques
while ($estoque > 0){
    //Venda uma unidade por vez
    $estoque--;
    //Exibe a quantidade de unidades vendidas e o estoque restante
    echo "Uma unidade ventida. Restam $estoque unidades no estoque. <br>";
}


echo "O estoque foi zerado!";

?>

</body>
</html>
