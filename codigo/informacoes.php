<?php
    require_once "verifica_sessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Meu site</h2>
    <?php
        // session_start();
        $email = $_SESSION['email'];
        $nome = $_SESSION['nome'];

        echo "<p>Olá $nome ($email).</p>";
    ?>
</body>
</html>