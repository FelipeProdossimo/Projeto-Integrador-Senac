<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="cadastro.php">Fazer Cadastro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <form method="POST" action="login.php">
            <div class="container-fluid" style="background-color: purle">
                <div class="row gy-3">
                    <div class="col-12">
                        <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" id="nome" name="nome" placeholder="Nome">
                    </div>
                    <div class="col-12">
                        <label for="exampleFormControlInput1" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" id="senha" name="senha" placeholder="Senha">
                    </div>
                <button type="submit" class="btn btn-success">Entrar</button>
                </div>
            </div>
    </form>
</body>
</html>