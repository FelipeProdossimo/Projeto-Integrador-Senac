<?php

$emailVendSistema = $_POST['email'];
$senhaVendSistema = $_POST['senha'];

echo "{$emailVendSistema} - {$senhaVendSistema}";

include "include/conexao.php";

$sqlBusca = "SELECT * FROM tb_clientes WHERE email = '{$emailVendSistema}' and senha = '{$senhaVendSistema}'";

$result = mysqli_query($conexao , $sqlBusca);

if(mysqli_num_rows($result) > 0){
   header('Location: vendedores/pagina-vendedores.php');
}else{
   header('Location: vendedores/login-vendedores.php');
}
?>