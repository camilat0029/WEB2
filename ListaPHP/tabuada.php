<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 7 - Tabuada</title>

    <style>

    </style>
</head>
<body>

    <form method="n">
        <label for="inputN">Informe um número</label>
        <input type="text" id="inputN" name="n" value="<?php if(isset($_GET["n"])){echo $_GET["n"];}?>
        ">

        <input type="submit" value="Mostrar">
    </form>

    <div>
        <?php

            if (!isset($_GET["n"])){
                exit();
            } 

            if (trim($_GET["n"])==""){
                exit();
            }

            $numero=$_GET["n"];

            for($i = 0; $i <= 10; $i++) {
                echo $numero. " × " .$i. " = " .$numero*$i. "<br>";
                
            }
        ?>
    </div>
    
</body>
</html>