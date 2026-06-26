<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9 - Formulário</title>
</head>
<body>

    <h1>Formulário</h1>

    <form method="str">

        <label for="">Digite:</label>
        <input type="text" id="string" name="str">

        <input type="submit" value="Mostrar">

    </form>

    <div>

        <?php

            if (!isset($_GET["str"])){
                exit();
            } 

            if (trim($_GET["str"])==""){
                exit();
            }

            $stringD=$_GET["str"];

            $tam=mb_strlen(trim($stringD));
            echo "Tamanho da palavra: $tam <br>";

            $strIn=strrev(trim($stringD));
            if($strIn == $stringD){
                echo "É palíndromo <br>";
            } else {
                echo "Não é palíndromo <br>";
            };

            $palavraM = strtoupper($stringD);
            $letras = str_split($palavraM);
            $vogais = 0;
            $consoantes = 0;
            $totalLetras = count($letras);

            for($i = 0; $i<$totalLetras; $i++){

                if($letras[$i] == "A" || $letras[$i] == "E" || $letras[$i] == "I" || $letras[$i] == "O" || $letras[$i] == "U"){
                    $vogais++;
                } else{
                    $consoantes++;
                }
            }

            echo "Número de vogais: $vogais <br>";
            echo "Número de consoantes $consoantes";



        ?>
    </div>
    
    
</body>
</html>