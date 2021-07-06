<?php
include "../include/conexao.php";
$id_itens = $_GET['id'];

$sqlExcluir = "DELETE FROM tb_itens WHERE id = {$id_itens} ;";

$resultado = mysqli_query($conexao , $sqlExcluir);
if($resultado){
    echo "Excluído com sucesso. <br>";
    echo "<a href='../vendedores/pagina-vendedores.php'>Voltar</a>";
}else{
    echo "Algum erro aconteceu";
}
?>