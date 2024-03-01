html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Imposto de Renda</title>
</head>
<body>
    <h1>Calculadora de Imposto de Renda</h1>
    <form action="" method="post">
        <label for="salario_anual">Salário Anual (em reais):</label><br>
        <input type="number" name="salario_anual" id="salario_anual" required><br><br>
        <input type="submit" value="Calcular Imposto de Renda">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salario_anual = isset($_POST["salario_anual"]) ? floatval($_POST["salario_anual"]) : 0;

        // Define as faixas salariais e suas respectivas alíquotas e parcelas a deduzir
        $faixas = [
            ["limite_superior" => 2259.20, "aliquota" => 0, "deducao" => 0],
            ["limite_superior" => 2828.65, "aliquota" => 7.5, "deducao" => 169.44],
            ["limite_superior" => 3751.05, "aliquota" => 15, "deducao" => 381.44],
            ["limite_superior" => 4664.68, "aliquota" => 22.5, "deducao" => 662.77],
            ["limite_superior" => PHP_FLOAT_MAX, "aliquota" => 27.5, "deducao" => 896.00]
        ];

        // Calcula o imposto de renda com base na faixa salarial
        $imposto_renda = 0;
        foreach ($faixas as $faixa) {
            if ($salario_anual <= $faixa["limite_superior"]) {
                $imposto_renda = ($salario_anual * $faixa["aliquota"]/100) - $faixa["deducao"];
                break;
            }
        }

        // Exibe o resultado
        echo "<p>Imposto de Renda a ser pago: R$" . number_format($imposto_renda, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
