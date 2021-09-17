<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERIR ITEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/@popperjs/core@2">
</head>
<body>

<?php 
include "../include/cabecalho-vendedores.php";
include "../include/conexao.php";

$id_itens = $_GET['id'];

$sqlBusca = "SELECT * FROM tb_itens";
$listaDeItens = mysqli_query($conexao , $sqlBusca);

$nome = $campoInform = $preco = $campoPromocao = $localProduto = $imgProduto = $id_vendedor = "";

while($item = mysqli_fetch_assoc($listaDeItens)){
    $nome = $item['nome'];
    $campoInform = $item['campInform'];
    $preco = $item['preco'];
    $campoPromocao = $item['campoPromocao'];
    $localProduto = $item['localProduto'];
    $imgProduto = $item['imgProduto'];
    $id_vendedor = $item['id_vendedor'];
}
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <form class=text-center name="formulario-alterar-itens" action="../itens/altera-itens.php" method="post" enctype="multipart/form-data">
                <input name="id_itens" type="hidden" value="<?php echo $id_itens ; ?>">
                    <div class="col">
                        <label class="form-label">Nome:</label>
                        <input name="nome" class="form-control" value="<?php echo $nome ; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Informações do Item</label>
                        <textarea class="form-control" name="campInform" id="exampleFormControlTextarea1" rows="3" value="<?php echo $campoInform ; ?>"></textarea>
                    </div>
                    <div class="col">
                        <label class="form-label">Preço:</label>
                        <input name="preco" class="form-control" value="<?php echo $preco ; ?>">
                    </div>
                    <div class="col">
                        <label class="form-label">Promoção:</label>
                        <input name="campoPromocao" class="form-control" value="<?php echo $campoPromocao ; ?>">
                    </div>
                    <div class="col">
                        <label class="form-label">Local do Produto:</label>
                        <input name="localProduto" class="form-control" value="<?php echo $localProduto ; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Insira a imagem do produto:</label>
                        <input class="form-control" type="file" name="imgProduto" id="formFile" value="<?php echo $imgProduto ; ?>">
                    </div>

                    <div class="col">
                        <label class="form-label">Vendedor:</label>
                            <select name="id_vendedor" class="form-select form-select-lg mb-3" value="<?php echo $id_vendedor ; ?>">   
                                <?php 
                                    $sqlBuscaVendedores = "SELECT * FROM tb_vendedores";
                                    $listaDeVendedores = mysqli_query($conexao , $sqlBuscaVendedores);

                                    while($id_vendedor = mysqli_fetch_assoc($listaDeVendedores)){
                                        echo "<option value='{$id_vendedor['id']}'>";
                                        echo $id_vendedor['nome'];
                                        echo "</option>";
                                    }
                                ?>
                            </select>
                        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>