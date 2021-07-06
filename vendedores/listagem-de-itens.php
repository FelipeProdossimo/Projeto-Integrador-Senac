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
            <a href="#" button type="button" class="btn btn-outline-light"><i class="bi bi-x-lg" style="font-size: 1.0rem;">
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
      <?php 
      include "../include/conexao.php" ;
      $sqlBusca = "SELECT * FROM tb_itens";
                      

      $listaDeItens = mysqli_query($conexao , $sqlBusca);
      ?>

      <form>
      <?php 

      while($itens = mysqli_fetch_assoc($listaDeItens)){
      echo "<div class='card-group'>";
        echo "<div class='card'>";
          echo "<div class='col-md-12'>";
            echo "<img src='{$itens['imgProduto']}' class='img-fluid rounded-start' alt='Imagem do banco'>";
          echo "</div'>";
          echo "<div class='col-md-8'>";
            echo "<div class='card-body'>";
              echo "<h5 class='card-title'>{$itens['nome']}</h5>";
              echo "<p class='card-text'>{$itens['campInform']}</p>";
              echo "<p class='card-text'>{$itens['preco']}</p>";
              echo "<p class='card-text'>{$itens['campoPromocao']}</p>";
              echo "<p class='card-text'>{$itens['localProduto']}</p>";
              echo "<p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>";
              echo "<p class='card-text'>{$itens['id_vendedor']}</p>";
              echo "<a href='../itens/excluir-itens.php?id={$itens['id']}'>Excluir</a></td> | ";
              echo "<a href='../vendedores/vendedores-formulario-altera.php?id={$itens['id']}'>Alterar</a></td>";
            echo "</div>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
      };
      ?>
      <form>
      <div class="card text-center">
        <div class="card-header">
            Notícias
        </div>
        <div class="card-body">
            <h5 class="card-title">SITE EM CONSTRUÇÃO</h5>
            <p class="card-text">Peço sua colaboração, entraremos em contato assim que retornar. Equipe SEA Agradece!</p>
            <a href="#" class="btn btn-primary">Voltar ao Início</a>
        </div>
        <div class="card-footer text-muted">
            7 dias atrás
        </div>
        </div>
      </form>
</body>
</html>