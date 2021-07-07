<?php
include "../include/conexao.php";

$id_itens = $_POST['id_itens'];
$nome = $_POST['nome'];
$campoInform = $_POST['campInform'];
$preco = $_POST['preco'];
$campoPromocao = $_POST['campoPromocao'];
$localProduto = $_POST['localProduto'];

$dir = "imagens/";
$imgProduto = $_FILES['imgProduto'];
$foto = $dir . $imgProduto['name'];

if(move_uploaded_file($imgProduto['tmp_name'] , "$dir/" . $imgProduto['name'])){
    echo "Arquivo enviado com sucesso!";
}else{
    echo "Arquivo deu erro";
}
//caso queira ver para onde vai!!
/*
echo "($dir);";
echo "($foto);";
*/
$id_vendedor = $_POST['id_vendedor'];


$sqlAlterar = "UPDATE tb_itens SET
                id = '{$id_itens}' ,
                nome = '{$nome}' , 
                campInform = '{$campoInform}' , 
                preco = '{$preco}' , 
                campoPromocao = '{$campoPromocao}' , 
                localProduto = '{$localProduto}' ,
                imgProduto = '{$foto}' ,
                id_vendedor = '{$id_vendedor}' 
                WHERE id = {$id_itens}
                ;";
            
print_r($sqlAlterar);

$resultado = mysqli_query($conexao, $sqlAlterar);

if($resultado){
    echo "O Item foi inserido com sucesso!<br>";
    echo "<a class='btn btn-outline-dark' href='../vendedores/pagina-vendedores.php'><i class='bi bi-arrow-left'></i>Retornar</a>";
}else{
    echo "Ops, ocorreu um erro!";
}
?>