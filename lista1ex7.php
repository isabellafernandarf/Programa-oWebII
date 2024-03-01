<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Bilhetagem Eletrônica</title>
</head>
<body>
    <h1>Sistema de Bilhetagem Eletrônica</h1>
    <form action="" method="post">
        <label for="idade">Idade:</label><br>
        <input type="number" name="idade" id="idade" required><br><br>
        <label for="categoria">Categoria:</label><br>
        <select name="categoria" id="categoria" required>
            <option value="estudante">Estudante</option>
            <option value="idoso">Idoso</option>
            <option value="outros">Outros</option>
        </select><br><br>
        <input type="submit" value="Calcular Valor da Passagem">
    </form>

    <?php
    // Função para calcular o valor da passagem com base na idade e categoria
    function calcularValorPassagem($idade, $categoria) {
        $valorBase = 100; // Valor base da passagem

        if ($idade <= 6) {
            return 0; // Isento para crianças até 6 anos
        }

        switch ($categoria) {
            case 'estudante':
                return $valorBase * 0.5; // Desconto de 50% para estudantes
            case 'idoso':
                return $valorBase * 0.4; // Desconto de 40% para idosos
            default:
                return $valorBase; // Valor padrão para outras categorias
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = isset($_POST["idade"]) ? intval($_POST["idade"]) : 0;
        $categoria = isset($_POST["categoria"]) ? $_POST["categoria"] : '';

        $valorPassagem = calcularValorPassagem($idade, $categoria);

        echo "<p>O valor da passagem é: R$" . number_format($valorPassagem, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
