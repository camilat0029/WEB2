<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3 - Página 3 IMC</title>
</head>
<body>

    <h1>Resultado do IMC</h1>

    <?php
        if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['peso']) && isset($_POST['altura'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];

            $imc = $peso / ($altura * $altura);
            $imcFormatado = number_format($imc, 2);

            echo "<p>Nome: $nome</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Peso: $peso kg</p>";
            echo "<p>Altura: $altura m</p>";
            echo "<p>IMC: $imcFormatado</p>";

        } else{
            header("Location: pagina2Imc.php?error=faltadados");
        }
    ?>
    
</body>
</html>