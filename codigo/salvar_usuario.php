<?php
// require_once "../verifica_sessao.php";
//pegar as variáveis
$id = $_GET['id'];
$nome = $_POST['nome'];
$username = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['senha'];


if ($id == 0) {
    $sql = "INSERT INTO usuario (nome, username, email, senha) VALUES ('$nome', '$username', '$email', '$senha');";
}
else {
    $sql = "UPDATE usuario SET nome = '$nome', username = '$username', email = '$email', senha ='$senha' WHERE idusuario = $id";
}
 
//executa SQL
require_once "../conexao.php";
mysqli_query($conexao, $sql);


//desvia a navegação
header("Location: ../sucesso.html");