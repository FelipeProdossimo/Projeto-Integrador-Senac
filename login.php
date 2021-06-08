<?php
session_start();
include('conexao.php');

if(empty($_POST['nome']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT usuario_id, nome FROM tb_usuario WHERE nome = '{$nome}' AND senha = 
md5('{$senha}')"; 

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['nome'] = $nome;
    header('Location: cliente.php');
    exit();
} else {
    header('Location: index.php');
    exit();
}
?>