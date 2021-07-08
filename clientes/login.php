<?php

$emailSistema = $_POST['email'];
$senhaSistema = $_POST['senha'];

echo "{$emailSistema} - {$senhaSistema}";

include "../include/conexao.php";

$sqlBusca = "SELECT * FROM tb_clientes WHERE email = '{$emailSistema}' and senha = '{$senhaSistema}'";

$result = mysqli_query($conexao , $sqlBusca);

if(mysqli_num_rows($result) > 0){
   header('Location: pagina-clientes.php');
}else{
   header('Location: login-interno-clientes.php');
}
?>