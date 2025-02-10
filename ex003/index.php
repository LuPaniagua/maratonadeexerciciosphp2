<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de preço com taxa de entrega</title>
</head>
<body>
    <h1> Cálculo de preço com taxa de entrega</h1>
    <?php 
    
    $produto = 900;
    $desconto = 20 ;
    $frete = 15;

    $frete1 = ($produto * 15) /100;
    $desconto1 = ($produto *20) /100;

    if ($produto > 1000){
        $valorfinal = ($produto + $frete - $desconto);
    } elseif ($produto < 1000){
        $valorfinal1 = ($produto + $frete1);
    }   else 
    echo "erro";

    echo $valorfinal1;
    
    
    ?>
    
</body>
</html>