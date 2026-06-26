<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 14 - Login</title>
</head>
<body>

    <h1>Login</h1>

    <form method="post">
        <label for="">Informe o nome de usuário</label>
        <input type="text" id="usuario" name="usuario">

        <br>

        <label for="">Informe a senha</label>
        <input type="password" id="senha"name="senha">
        <br><br>

        <input type="submit" value="Login">
        <br><br>
    </form>

    <div>
        <?php
            session_start();

            $validUsername = "admin";
            $validPassword = "1234";

            if (isset($_POST["usuario"], $_POST["senha"])) {
                $username = $_POST["usuario"];
                $password = $_POST["senha"];

                if ($username === $validUsername && $password === $validPassword) {
                    $_SESSION["loggedin"] = true;
                    echo "<p>Login bem-sucedido! Bem-vindo, $username.</p>";
                    echo '<form method="post" action=""><button type="submit"> Sair </button></form>';
                } else {
                    echo "<p>Nome de usuário ou senha inválidos.</p>";
                }
            }
        ?>
    </div>
    
</body>
</html>