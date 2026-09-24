<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .erro {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        if (isset($_GET['erro'])) {
            $email = '';
            if ($_GET['erro'] == "login") {
                $email = $_GET['email'];
                echo "<p class='erro'>Login e/ou senha incorretos!</p>";
            }
            if ($_GET['erro'] == "logado") {
                echo "<p class='erro'>Você precisa estar logado!</p>";
            }
        }
        else {
            $email = "";
        }
    ?>
    <form action="verificar_login.php" method="post">
        E-mail: <br>
        <input type="text" name="email" value="<?php echo $email; ?>"> <br><br>
        Senha: <br>
        <input type="text" name="senha"> <br><br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>