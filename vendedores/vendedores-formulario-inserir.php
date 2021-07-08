    <?php
    include "../include/cabecalho-vendedores.php";
    
    include "../include/conexao.php" ?>
    
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