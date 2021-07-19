<?php
include "../include/cabecalho-vendedores.php";

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
            echo "<img src='../itens/{$itens['imgProduto']}' class='img-fluid rounded-start' alt='Imagem do banco'>";
          echo "</div'>";
          echo "<div class='col-md-12'>";
            echo "<div class='card-body'>";
              echo "<h5 class='card-title'>{$itens['nome']}</h5>";
              echo "<p class='card-text'>{$itens['campInform']}</p>";
              echo "<p class='card-text'>{$itens['preco']}</p>";
              echo "<p class='card-text'>{$itens['campoPromocao']}</p>";
              echo "<p class='card-text'>{$itens['localProduto']}</p>";
              echo "<p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>";
              echo "<p class='card-text'>{$itens['id_vendedor']}</p>";
              echo "<a href='../itens/excluir-itens.php?id={$itens['id']}'button type='button' class='btn btn-outline-warning'>
              <i class='bi bi-x-lg' style='font-size: 0.7rem;'></i>Excluir</a></td> | ";
              echo "<a href='../vendedores/vendedores-formulario-altera.php?id={$itens['id']}'button type= 'button' 
              class='btn btn-outline-success'><i class='bi bi-wrench' style='font-size: 0.7rem;'>
              </i>Alterar</a></td>";
            echo "</div>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
      };
      ?>
<main class="mb-5 pb-5 mb-md-0">
  <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
              <form class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placegolder="Digite aqui o que procura">
                  <button class="btn btn-danger">
                    Buscar
                  </button>
                </div>
              </form>
            </div>
            <div class="col-12 col-md-7">
              <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                <form class="ml-3 d-inline-block">
                  <select class="form-select form-select-sm">
                    <option>Ordenar pelo nome</option>
                    <option>Ordenar pelo maior preço</option>
                    <option>Ordenar pelo menor preço</option>
                  </select>
                </form>
                <nav class="d-inline-block">
                  <ul class="pagination pagination-sm my-0">
                    <li class="page-item disabled">
                      <button class="page-link">1</button>
                    </li>
                    <li class="page-item">
                      <button class="page-link">2</button>
                    </li>
                    <li class="page-item">
                      <button class="page-link">3</button>
                    </li>
                    <li class="page-item">
                      <button class="page-link">4</button>
                    </li>
                    <li class="page-item">
                      <button class="page-link">5</button>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
        </div>
        <hr class="mt-3">
        <div class="row g-3">
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
            <div class="card text-center bg-light">
              <a href="" class="position-absolute right-0 p-2 text-danger">
                <i class="bi bi-suit-heart"></i>
              </a>
              <img src="../img/Invocacao_Do_Mal.jpg" alt="Invocacao do mal" class="card-img-top">
              <div class="card-header">
                R$ 500,00
              </div>
              <div class="card-body">
                <h5 class="card-title">Banana Prata</h5>
                <p class="card-text truncate-3l">
                  Banana prata direto da terra
                </p>
              </div>
              <div class="card-footer">
                <form class="d-block">
                  <button class="btn btn-danger">
                    Add ao Carrinho
                  </button>
                </form>
                <small class="text-success">320,00kg em estoque</small>
              </div>
            </div> 
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
            <div class="card text-center bg-light">
              <a href="" class="position-absolute right-0 p-2 text-danger">
                <i class="bi bi-suit-heart-fill"></i>
              </a>
              <img src="../img/Invocacao_Do_Mal.jpg" alt="Invocacao do mal" class="card-img-top">
              <div class="card-header">
                R$ 500,00
              </div>
              <div class="card-body">
                <h5 class="card-title">Banana Prata</h5>
                <p class="card-text truncate-3l">
                  Banana prata direto da terra
                </p>
              </div>
              <div class="card-footer">
                <form class="d-block">
                  <button class="btn btn-danger">
                    Add ao Carrinho
                  </button>
                </form>
                <small class="text-success">320,00kg em estoque</small>
              </div>
            </div> 
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
            <div class="card text-center bg-light">
              <a href="" class="position-absolute right-0 p-2 text-danger">
                <i class="bi bi-suit-heart"></i>
              </a>
              <img src="../img/Invocacao_Do_Mal.jpg" alt="Invocacao do mal" class="card-img-top">
              <div class="card-header">
                R$ 500,00
              </div>
              <div class="card-body">
                <h5 class="card-title">Banana Prata</h5>
                <p class="card-text truncate-3l">
                  Banana prata direto da terra
                </p>
              </div>
              <div class="card-footer">
                <form class="d-block">
                  <button class="btn btn-danger">
                    Add ao Carrinho
                  </button>
                </form>
                <small class="text-success">320,00kg em estoque</small>
              </div>
            </div> 
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
            <div class="card text-center bg-light">
              <a href="" class="position-absolute right-0 p-2 text-danger">
                <i class="bi bi-suit-heart"></i>
              </a>
              <img src="../img/Invocacao_Do_Mal.jpg" alt="Invocacao do mal" class="card-img-top">
              <div class="card-header">
                R$ 500,00
              </div>
              <div class="card-body">
                <h5 class="card-title">Banana Prata</h5>
                <p class="card-text truncate-3l">
                  Banana prata direto da terra
                </p>
              </div>
              <div class="card-footer">
                <form class="d-block">
                  <button class="btn btn-danger">
                    Add ao Carrinho
                  </button>
                </form>
                <small class="text-success">320,00kg em estoque</small>
              </div>
            </div> 
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
            <div class="card text-center bg-light">
              <a href="" class="position-absolute right-0 p-2 text-danger">
                <i class="bi bi-suit-heart"></i>
              </a>
              <img src="../img/Invocacao_Do_Mal.jpg" alt="Invocacao do mal" class="card-img-top">
              <div class="card-header">
                R$ 500,00
              </div>
              <div class="card-body">
                <h5 class="card-title">Banana Prata</h5>
                <p class="card-text truncate-3l">
                  Banana prata direto da terra
                </p>
              </div>
              <div class="card-footer">
                <form class="d-block">
                  <button class="btn btn-danger">
                    Add ao Carrinho
                  </button>
                </form>
                <small class="text-success">320,00kg em estoque</small>
              </div>
            </div> 
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
            <div class="card text-center bg-light">
              <a href="" class="position-absolute right-0 p-2 text-danger">
                <i class="bi bi-suit-heart"></i>
              </a>
              <img src="../img/Invocacao_Do_Mal.jpg" alt="Invocacao do mal" class="card-img-top">
              <div class="card-header">
                R$ 500,00
              </div>
              <div class="card-body">
                <h5 class="card-title">Banana Prata</h5>
                <p class="card-text truncate-3l">
                  Banana prata direto da terra
                </p>
              </div>
              <div class="card-footer">
                <form class="d-block">
                  <button class="btn btn-danger">
                    Add ao Carrinho
                  </button>
                </form>
                <small class="text-success">320,00kg em estoque</small>
              </div>
            </div> 
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
            <div class="card text-center bg-light">
              <a href="" class="position-absolute right-0 p-2 text-danger">
                <i class="bi bi-suit-heart"></i>
              </a>
              <img src="../img/Invocacao_Do_Mal.jpg" alt="Invocacao do mal" class="card-img-top">
              <div class="card-header">
                R$ 500,00
              </div>
              <div class="card-body">
                <h5 class="card-title">Banana Prata</h5>
                <p class="card-text truncate-3l">
                  Banana prata direto da terra
                </p>
              </div>
              <div class="card-footer">
                <form class="d-block">
                  <button class="btn btn-danger">
                    Add ao Carrinho
                  </button>
                </form>
                <small class="text-success">320,00kg em estoque</small>
              </div>
            </div> 
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
            <div class="card text-center bg-light">
              <a href="" class="position-absolute right-0 p-2 text-danger">
                <i class="bi bi-suit-heart"></i>
              </a>
              <img src="../img/Invocacao_Do_Mal.jpg" alt="Invocacao do mal" class="card-img-top">
              <div class="card-header">
                R$ 500,00
              </div>
              <div class="card-body">
                <h5 class="card-title">Banana Prata</h5>
                <p class="card-text truncate-3l">
                  Banana prata direto da terra
                </p>
              </div>
              <div class="card-footer">
                <form class="d-block">
                  <button class="btn btn-danger">
                    Add ao Carrinho
                  </button>
                </form>
                <small class="text-success">320,00kg em estoque</small>
              </div>
            </div> 
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
            <div class="card text-center bg-light">
              <a href="" class="position-absolute right-0 p-2 text-danger">
                <i class="bi bi-suit-heart"></i>
              </a>
              <img src="../img/Invocacao_Do_Mal.jpg" alt="Invocacao do mal" class="card-img-top">
              <div class="card-header">
                R$ 500,00
              </div>
              <div class="card-body">
                <h5 class="card-title">Banana Prata</h5>
                <p class="card-text truncate-3l">
                  Banana prata direto da terra
                </p>
              </div>
              <div class="card-footer">
                <form class="d-block">
                  <button class="btn btn-danger">
                    Add ao Carrinho
                  </button>
                </form>
                <small class="text-success">320,00kg em estoque</small>
              </div>
            </div> 
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
            <div class="card text-center bg-light">
              <a href="" class="position-absolute right-0 p-2 text-danger">
                <i class="bi bi-suit-heart"></i>
              </a>
              <img src="../img/Invocacao_Do_Mal.jpg" alt="Invocacao do mal" class="card-img-top">
              <div class="card-header">
                R$ 500,00
              </div>
              <div class="card-body">
                <h5 class="card-title">Banana Prata</h5>
                <p class="card-text truncate-3l">
                  Banana prata direto da terra
                </p>
              </div>
              <div class="card-footer">
                <form class="d-block">
                  <button class="btn btn-danger">
                    Add ao Carrinho
                  </button>
                </form>
                <small class="text-success">320,00kg em estoque</small>
              </div>
            </div> 
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
            <div class="card text-center bg-light">
              <a href="" class="position-absolute right-0 p-2 text-danger">
                <i class="bi bi-suit-heart"></i>
              </a>
              <img src="../img/Invocacao_Do_Mal.jpg" alt="Invocacao do mal" class="card-img-top">
              <div class="card-header">
                R$ 500,00
              </div>
              <div class="card-body">
                <h5 class="card-title">Banana Prata</h5>
                <p class="card-text truncate-3l">
                  Banana prata direto da terra
                </p>
              </div>
              <div class="card-footer">
                <form class="d-block">
                  <button class="btn btn-danger">
                    Add ao Carrinho
                  </button>
                </form>
                <small class="text-success">320,00kg em estoque</small>
              </div>
            </div> 
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
            <div class="card text-center bg-light">
              <a href="" class="position-absolute right-0 p-2 text-danger">
                <i class="bi bi-suit-heart-fill"></i>
              </a>
              <img src="../img/Invocacao_Do_Mal.jpg" alt="Invocacao do mal" class="card-img-top">
              <div class="card-header">
                R$ 500,00
              </div>
              <div class="card-body">
                <h5 class="card-title">Banana Prata</h5>
                <p class="card-text truncate-3l">
                  Banana prata direto da terra
                </p>
              </div>
              <div class="card-footer">
                <div>
                  <button class="btn btn-light disabled" disabled>
                    <small>Reabastecendo Estoque</small>
                  </button>
                </div>
                <small class="text-danger">Produto Esgotado</small>
              </div>
            </div> 
          </div>
          
          
        </div> 
        <hr class="mt-3">
        <div class="row pb-4">
          <div class="col-12">
              <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                <form class="ml-3 d-inline-block">
                  <select class="form-select form-select-sm">
                    <option>Ordenar pelo nome</option>
                    <option>Ordenar pelo maior preço</option>
                    <option>Ordenar pelo menor preço</option>
                  </select>
                </form>
                <nav class="d-inline-block">
                  <ul class="pagination pagination-sm my-0">
                    <li class="page-item disabled">
                      <button class="page-link">1</button>
                    </li>
                    <li class="page-item">
                      <button class="page-link">2</button>
                    </li>
                    <li class="page-item">
                      <button class="page-link">3</button>
                    </li>
                    <li class="page-item">
                      <button class="page-link">4</button>
                    </li>
                    <li class="page-item">
                      <button class="page-link">5</button>
                    </li>
                  </ul>
                </nav>
              </div>
          </div>
        </div>
  </div>
</main>
</body>
</html>