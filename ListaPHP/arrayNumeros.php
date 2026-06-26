<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13 - Array de Números</title>
</head>
<body>

    <h1>Array de Números</h1>

    <form method="GET">
        <label for="">Informe os números separados por vírgula</label>
        <input type="text" id="numero" name="numero" required>
        <br><br>

        <input type="submit" value="Verificar">
        <br><br>
    </form>

    <div>
        <?php
            if (isset($_GET["numero"])) {
                $numeros = $_GET["numero"];
                $arrayNumeros = explode(",", $numeros);
                $arrayNumeros = array_map('trim', $arrayNumeros);

                $soma = array_sum($arrayNumeros);
                $maior = max($arrayNumeros);
                $menor = min($arrayNumeros);

                echo "<p>Soma dos números: $soma</p>";
                echo "<p>Maior número: $maior</p>";
                echo "<p>Menor número: $menor</p>";
            }
        ?>
    
</body>
</html>