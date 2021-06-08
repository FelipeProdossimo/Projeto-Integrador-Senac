<?php

session_start();

include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));

$email = mysqli_real_escape_string($conexao, trim($_POST['email']));

$data = mysqli_real_escape_string($conexao, trim($_POST['data-nascimento']));

$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "SELECT COUNT * AS total FROM nome WHERE nome = '$nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['nome_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO tb_usuario (usuario_id, nome, senha, email, data) VALUES (NULL, '$nome', '$senha', '$email', '$data');";

 if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}
$conexao->close();

header('Location: cadastro.php');
exit();

?>