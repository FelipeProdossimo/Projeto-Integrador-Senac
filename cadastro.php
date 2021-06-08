<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="index.php">Fazer login</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!--<?php
    if($_SESSION['status_cadastro']):
    
    ?>
        <div class="alert alert-primary" role="alert" name="status_cadastro">
            Parabéns, cadastro concluído!
        </div>
    <?php
    endif;
    unset($_SESSION['status_cadastro']);
    ?>
    <?php
    if($_SESSION['usuario_existe']):
    ?>
        <div class="alert alert-danger" role="alert" name="usuario_existe">
            Já existe cadastro com essas informações!
        </div>
    <?php
    endif;
    unset($_SESSION['usuario_existe']);
    ?>
    -->
        <form method="POST" action="cadastrar.php">
            <div class="container-fluid" style="background-color: rgba(0, 140, 191, 0.84)">
                <div class="row gy-5">
                    <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" id="nome" name="nome" placeholder="Nome">
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">E-mail:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" id="email" name="email" placeholder="E-mail">
                    </div>               
                    <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">Data de nascimento:</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" id="data-nascimento" name="data-nascimento" placeholder="../../....">
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">Senha:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" id="senha" name="senha" placeholder="Senha">
                    </div>
                <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
        </form>
</body>
</html>