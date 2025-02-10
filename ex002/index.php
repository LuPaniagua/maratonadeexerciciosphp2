<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de imposto com desconto</title>
</head>
<body>
    <h1> Cálculo de imposto com desconto</h1>
    <?php 
    
    $compra = 400;
    $desconto = 10;
    $imposto = 8;

    $imposto1 = ($compra * $imposto) / 100;
    $desconto1 = ($compra * $desconto) /100;

    if ($compra > 500){
        $valorfinal = ($compra - $desconto1 + $imposto1);
    } else {
        $valorfinal1 = ($compra + $imposto1);
    
        }

        $valorfinalreal = "R$" . number_format($valorfinal1, 2, ',','.');

    echo "$valorfinalreal";


?>
    
</body>
</html>