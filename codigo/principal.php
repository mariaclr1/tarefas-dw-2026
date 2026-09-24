<?php
 require_once "verifica_sessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .i1 {
            width: 1000px;
        }

        #i2 {
            width: 200px;
            height: 295px;
        }
        
        #i3 {
            width: 790px;
            height: 295px;

        }
    </style>
</head>
<body>
    <iframe class="i1" src="cabecalho.php"></iframe>
    <iframe id="i2" src="menu.php"></iframe>
    <iframe id="i3" name="conteudo"></iframe>
    <iframe class="i1" src="rodape.html"></iframe>
</body>
</html>