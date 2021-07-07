<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Integrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/@popperjs/core@2">

</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container-fluid">
          <nav class="navbar navbar-dark bg-info">
            <div class="container">
              <a class="navbar-brand btn-outline-light" href="../vendedores/pagina-vendedores.php">
                <img src="../img/logo.ico" alt="logo" width="80" height="80">
              </a>
            </div>
          </nav>
            <a href="#" button type="button" class="btn btn-outline-light"><i class="bi bi-zoom-in"></i>
            ITENS DISPONIBILIZADOS</a>
            <a href="#" button type="button" class="btn btn-outline-light"><i class="bi bi-currency-exchange"></i>VENDAS REALIZADAS
            <i class="bi bi-currency-exchange"></i></a>
            <a href="../vendedores/vendedores-formulario-inserir.php" button type="button" class="btn btn-outline-light"><i class="bi bi-chevron-compact-right" style="font-size: 1.0rem; 
            color: black;"></i>CADASTRAR ITENS<i class="bi bi-chevron-compact-left" style="font-size: 1.0rem; 
            color: black;"></i></a>
            <a href="../vendedores/listagem-de-itens.php" button type="button" class="btn btn-outline-light"><i class="bi bi-x-lg" style="font-size: 1.0rem;">
            </i>EXCLUIR ITENS</a>
            <a href="#" button type="button" class="btn btn-outline-light"><i class="bi bi-wrench" style="font-size: 1.0rem;">
            </i>ALTERAR ITENS</a>
            <a href="#" button type="button" class="btn btn-outline-light"><i class="bi bi-gear" style="font-size: 1.5rem; 
            color: black;"></i></a>
              <form class="d-flex">
                <input class="form-control me-6" type="search" placeholder="O que você deseja?" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Procurar</button>
              </form>
            </div>
        </div>   
    </nav>
    <?php include "../include/conexao.php" ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form class=text-center name="formulario-inserir-itens" action="../itens/inserir-itens.php" method="post" enctype="multipart/form-data">
                        <div class="col">
                            <label class="form-label">Nome:</label>
                            <input name="nome" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Informações do Item</label>
                            <textarea class="form-control" name="campoInform" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="col">
                            <label class="form-label">Preço:</label>
                            <input name="preco" class="form-control">
                        </div>
                        <div class="col">
                            <label class="form-label">Promoção:</label>
                            <input name="campoPromocao" class="form-control">
                        </div>
                        <div class="col">
                            <label class="form-label">Local do Produto:</label>
                            <input name="localProduto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Insira a imagem do produto:</label>
                            <input class="form-control" type="file" name="imgProduto" id="formFile">
                        </div>

                        <div class="col">
                            <label class="form-label">Vendedor:</label>
                                <select name="id_vendedor" class="form-select form-select-lg mb-3">   
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