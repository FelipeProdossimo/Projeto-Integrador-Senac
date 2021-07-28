<?php
include "../include/cabecalho-vendedores.php";

      include "../include/conexao.php" ;
      $sqlBusca = "SELECT tb_itens.imgProduto,
      tb_itens.preco,
      tb_itens.campoPromocao,
      tb_itens.nome,
      tb_itens,campInform,
      tb_itens,localProduto
      tb_vendedores.nome as id_vendedor
      from tb_itens
      inner join tb_vendedores on tb_itens.id = tb_vendedores.id
      ";
                      

      $listaDeItens = mysqli_query($conexao , $sqlBusca);
      ?>

      

<form>
    <?php 
      while($itens = mysqli_fetch_assoc($listaDeItens)){
      
      /*  

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
      

      */

      echo "<main class='mb-5 pb-5 mb-md-0'>";
        echo "<div class='container'>";
              echo "<div class='row'>";
                  echo "<div class='col-12 col-md-5'>";
                    echo "<form class='justify-content-center justify-content-md-start mb-3 mb-md-0'>";
                      echo "<div class='input-group input-group-sm'>";
                        echo "<input type='text' class='form-control' placegolder='Digite aqui o que procura'>";
                        echo "<button class='btn btn-danger'>";
                          echo "Buscar"; //
                        echo "</button>";
                      echo "</div>";
                    echo "</form>";
                  echo "</div>";
                  echo "<div class='col-12 col-md-7'>";
                    echo "<div class='d-flex flex-row-reverse justify-content-center justify-content-md-start'>";
                      echo "<form class='ml-3 d-inline-block'>";
                        echo "<select class='form-select form-select-sm'>";
                          echo "<option>Ordenar pelo nome</option>";
                          echo "<option>Ordenar pelo maior preço</option>";
                          echo "<option>Ordenar pelo menor preço</option>";
                        echo "</select>";
                      echo "</form>";
                      echo "<nav class='d-inline-block'>";
                        echo "<ul class='pagination pagination-sm my-0'>";
                          echo "<li class='page-item disabled'>";
                            echo "<button class='page-link'>1</button>";
                          echo "</li>";
                          echo "<li class='page-item'>";
                            echo "<button class='page-link'>2</button>";
                          echo "</li>";
                          echo "<li class='page-item'>";
                            echo "<button class='page-link'>3</button>";
                          echo "</li>";
                          echo "<li class='page-item'>";
                            echo "<button class='page-link'>4</button>";
                          echo "</li>";
                          echo "<li class='page-item'>";
                            echo "<button class='page-link'>5</button>";
                          echo "</li>";
                        echo "</ul>";
                      echo "</nav>";
                    echo "</div>";
                  echo "</div>";
              echo "</div>";
              echo "<hr class='mt-3'>";
              echo "<div class='row g-3'>";
                echo "<div class='col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch'>";
                  echo "<div class='card text-center bg-light'>";
                    echo "<a href='....' class='position-absolute right-0 p-2 text-danger'>";
                      echo "<i class='bi bi-suit-heart'></i>";
                    echo "</a>";
                    echo "<img src='../itens/{$itens['imgProduto']}' alt='Invocacao do mal' class='card-img-top'>";
                    echo "<div class='card-header'>";
                      echo "R$ {$itens['preco']},00";
                      echo "<br>";
                      echo "Promoção de {$itens['campoPromocao']}"; //
                    echo "</div>";
                    echo "<div class='card-body'>";
                      echo "<h5 class='card-title'>{$itens['nome']}</h5>";
                      echo "<p class='card-text truncate-3l'>";
                        echo "{$itens['campInform']}";
                      echo "</p>";
                    echo "</div>";
                    echo "<div class='card-footer'>";
                      echo "<form class='d-block'>";
                        echo "<button class='btn btn-danger'>";
                          echo "Add ao Carrinho"; //
                        echo "</button>";
                      echo "</form>";
                      echo "<small class='text-success'>{$itens['localProduto']}</small>";
                      echo "<br>";
                      echo "<small class='text-success'>{$itens['id_vendedor']}</small>";
                      echo "<a href='../itens/excluir-itens.php?id={$itens['id']}'button type='button' class='btn btn-outline-warning'>
                      <i class='bi bi-x-lg' style='font-size: 0.7rem;'></i>Excluir</a></td> | ";
                      echo "<a href='../vendedores/vendedores-formulario-altera.php?id={$itens['id']}'button type= 'button' 
                      class='btn btn-outline-success'><i class='bi bi-wrench' style='font-size: 0.7rem;'>
                      </i>Alterar</a></td>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
              };
      ?>
    <!--
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
          
    -->
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