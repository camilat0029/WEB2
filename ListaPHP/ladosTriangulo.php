<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 12 - Lados de um Triângulo</title>
</head>
<body>

    <h1>Lados de um Triângulo</h1>

    <form method="get">
        <label for="">Informe o lado 1</label>
        <input type="text" id="lado1" name="lado1">
        <br>

        <label for="">Informe o lado 2</label>
        <input type="text" id="lado2"name="lado2">
        <br>

        <label for="">Informe o lado 3</label>
        <input type="text" id="lado3" name="lado3">
        <br><br>

        <input type="submit" value="Mostrar">
        <br><br>
    </form>

    <div>
        <?php
            if (isset($_GET["lado1"], $_GET["lado2"], $_GET["lado3"])) {
                $lado1 = $_GET["lado1"];
                $lado2 = $_GET["lado2"];
                $lado3 = $_GET["lado3"];

                if(($lado1 + $lado2) > $lado3 && ($lado2 + $lado3) > $lado1 && ($lado1 + $lado3) > $lado2){

                    if($lado1 == $lado2 && $lado2 == $lado3){
                        echo "Triângulo Equilátero";
                    } else if($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3){
                        echo "Triângulo Isósceles";
                    } else{
                        echo "Triângulo Escaleno";
                    }

                } else{
                    echo "Não é um triângulo";
                }
            }
            
        ?>
    </div>
    
</body>
</html>