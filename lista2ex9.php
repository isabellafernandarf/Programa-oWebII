<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
    <h1>Resolução do exercício 09</h1>
<?php
    $arrayMult = [["produto"=>"garrafa", "preco"=>"R$10,00"],
    ["produto"=>"lixa", "preco"=>"R$0,50"],
    ["produto"=>"lápis", "preco"=>"R$2,00"],
    ["produto"=>"borracha", "preco"=> "R$3,00"],
    ["produto"=>"caderno", "preco"=> "R$20,00"]];

    foreach ($arrayMult as $k => $value) {
        echo "{$value['produto']} {$value['preco']}<br>";
    }
    ?>
    
</body>
</html>