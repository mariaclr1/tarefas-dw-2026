<?php
// require_once "../verifica_sessao.php";

if (!isset($_GET['id'])) {
    //formulário em branco
    $id = 0;
    $nome = "";
    $username = "";
    $email = "";
    $senha = "";
} else {
    //formulário preenchido
    $id = $_GET['id'];

    $sql = "SELECT * FROM usuario WHERE idusuario = $id";

    require_once "conexao.php";
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);
    $nome = $linha['nome'];
    $username = $linha['username'];
    $email = $linha['email'];
    $senha = $linha['senha'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Cadastro de usuario</h3>
    <!-- action: para quem estou mandando os dados -->
    <!-- method: como estou mandando os dados -->
     <form action="salvar_usuario.php?id=<?php echo $id; ?>" method="POST">
        Nome: <br>
        <input type="text" name="nome"  value="<?php echo $nome; ?>"> <br>
        
        Username: <br>
        <input type="date" name="username"  value="<?php echo $username; ?>"> <br>

        Email: <br>
        <input type="text" name="email"  value="<?php echo $email; ?>"> <br>

        Senha: <br>
        <input type="password" name="senha"  value="<?php echo $senha; ?>"> <br>
        
        

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>