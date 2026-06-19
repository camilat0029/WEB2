<!DOCTYPE html>
<html lang="en">
<head>

    <title>Questão 4 e 5 - Random</title>

    <style>

        .container{
            display: flex;
            height:100vh;
            font-size:30pt;
            justify-content:center;
            align-items:center;
        }

    </style>
</head>
<body>

    <form method="GET">

        <h1>Informe o Intervalo</h1>
        
        <label for="inputA">Valor Mínimo</label>
        <input type="text" id="inputA" name="a" value="<?php if(isset($_GET["a"])){echo $_GET["a"];}?>
        ">
        <br>

        <label for="inputB">Valor Máximo</label>
        <input type="text" id="inputB" name="b" value="<?php if(isset($_GET["b"])){echo $_GET["b"];}?>
        ">
        <br>

        <input type="submit" value="Enviar">

    </form>

    <div class="container">

        <?php

            if (!isset($_GET["a"]) && !isset($_GET["b"])){
                exit();
            } 

            if (trim($_GET["a"])=="" || trim($_GET["b"])==""){
                exit();
            }

            $valormin=trim($_GET["a"]);
            $valormax=trim($_GET["b"]);
            $random=rand($valormin,$valormax);
            echo $random;
        ?>

    </div>
    
</body>
</html>


