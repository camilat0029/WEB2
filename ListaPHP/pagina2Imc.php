<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10 - Página 2 Peso e altura</title>

</head>
<body>

    <h1>Cadastro do Peso e Altura</h1>

    <?php
        if(isset($_GET['nome']) && isset($_GET['email'])){
            $nome = $_GET['nome'];
            $email = $_GET['email'];
            echo "<p>Nome: $nome</p>";
            echo "<p>Email: $email</p>";
        } else{
            header("Location: pagina1Imc.php?error=faltadados");
        }
    ?>

    <form action="pagina3Imc.php" method="POST">

        <input type="hidden" name="nome" value="<?php echo $nome; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">

        <label for="">Informe o peso (kg)</label>
        <input type="number" step="0.01" id="peso" name="peso" required>
        <br>

        <label for="">Informe a altura (m)</label>
        <input type="number" step="0.01" id="altura"name="altura" required>
        <br><br>

        <input type="submit" value="Enviar">
        <br><br>

    </form>
    
</body>
</html>