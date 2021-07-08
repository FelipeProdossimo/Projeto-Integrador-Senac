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
      
</body>
</html>