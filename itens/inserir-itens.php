<?php

$nome = $_POST['nome'];
$campoInform = $_POST['campoInform'];
$preco = $_POST['preco'];
$campoPromocao = $_POST['campoPromocao'];
$localProduto = $_POST['localProduto'];
$imgProduto = $_POST['imgProduto'];
$id_vendedor = $_POST['id_vendedor'];


include "../include/conexao.php";
$sqlInserir = "INSERT INTO `tb_itens` (id, nome, campInform, preco, campoPromocao, localProduto, imgProduto, id_vendedor) 
VALUES (
    NULL,
    '{$nome}' , 
    '{$campoInform}' , 
    '{$preco}' ,
    '{$campoPromocao}' ,
    '{$localProduto}' ,
    '{$imgProduto}', 
    '{$id_vendedor}'
);";


$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "O Item foi inserido com sucesso!<br>";
    echo "<a class='btn btn-outline-dark' href='../vendedores/pagina-vendedores.php'><i class='bi bi-arrow-left'></i>Retornar</a>";
}else{
    echo "Ops, ocorreu um erro!";
}
?>