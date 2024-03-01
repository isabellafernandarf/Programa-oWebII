<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Exercício 07 - Lista 02</title>
</head>
<body>
    <h1>Resolução</h1>
    <?php
     $x = 0;
     while (++$x) {
        // Sorteia um número entre 1 e 50
        $numero = random_int(1, 50);
        
        // Exibe o número sorteado
        echo "Tentativa $x: $numero <br>";
    
        // Verifica se o número sorteado é igual a 7
        if ($numero === 7) {
            echo "Número 7 sorteado! Parando o loop.";
            break; // Sai do laço
        }
     }
        // Incrementa o contador
        $x++;
     ?>
    
</body>
</html>