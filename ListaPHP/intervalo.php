<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 11 - Intervalo</title>
</head>
<body>

    <h1>Intervalo</h1>

    <?php
        session_start();
        if(isset($_SESSION["num1"]) && isset($_SESSION["num2"])){
            echo "<p>Intervalo salvo na sessão: {$_SESSION["num1"]} a {$_SESSION["num2"]}</p>";
        }
    ?>

    <form method="get" action="intervalo.php">
        <label for="">Informe o primeiro número</label>
        <input type="number" id="num1" name="num1">
        <br>

        <label for="">Informe o segundo número</label>
        <input type="number" id="num2"name="num2">
        <br><br>

        <input type="submit" value="Mostrar">
        <br><br>
    </form>

    
    <?php
            
        if (isset($_GET["num1"]) && isset($_GET["num2"])) {
            $_SESSION["num1"] = $_GET["num1"];
            $_SESSION["num2"] = $_GET["num2"];

            echo "<p>Intervalo salvo na sessão: {$_SESSION["num1"]} a {$_SESSION["num2"]}</p>";
        }
            
    ?>
    
</body>
</html>