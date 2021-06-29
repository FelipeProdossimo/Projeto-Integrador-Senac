<?php 

include "include/conexao.php";

//error_reporting(0);

$nome = "";
$email = "";
$telefone = "";
$senha = "";
$csenha = "";

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $csenha = $_POST['csenha'];

    if ($senha == $csenha) {
        $sqlBusca = "INSERT INTO tb_clientes (nome, email, telefone, senha)
            VALUES(
                '{$nome}', 
                '{$email}', 
                '{$telefone}',
                '{$senha}'
                );";
        $result = mysqli_query($conexao, $sqlBusca);
        if ($result) {
            header('Location:clientes/login-interno-clientes.php');
            echo "<script>alert('Usuario registrado sucesso!')</script>";  
            $nome = "";
            $email = "";
            $telefone = "";
            $senha = "";
            $csenha = "";
        }else{
            echo "<script>alert('Opss! Tente veja seus dados e continue!')</script>";  
        }
    }else{
        echo "<script>alert('Revise sua senha.')</script>";    
    }

}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeaCompany - Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
    
    </style>
</head>

<body>
    <div class="container text-center text-align mt-3">
        <form style="max-width:550px; margin:auto;" method= "post">
        <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" fill="currentColor" class="bi bi-person" 
        viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 
        6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 
        1.332-.678.678-.83 1.418-.832 1.664h10z"/>
        </svg>
            <h3 class="text-info">Preencha seu cadastro:</h3> 
            <div class="mb-3 row">
                <label for="Nome" class="col-sm-2 col-form-label text-info fw-bold">Nome:</label>
                <div class="col-sm-10">                    
                <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>" placeholder="Digite seu nome" 
                id="nome" require>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="loginEmail" class="col-sm-2 col-form-label text-info fw-bold">Email:</label>
                <div class="col-sm-10">                    
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" id="email" placeholder="Digite seu e-mail" 
                require>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="loginTelefone" class="col-sm-2 col-form-label text-info fw-bold">Telefone:</label>
                <div class="col-sm-10">                    
                <input type="text" name="telefone" class="form-control" value="<?php echo $telefone; ?>" id="telefone" placeholder="( ) Seu-telefone" 
                require>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label text-info fw-bold">Senha:</label>
                <div class="col-sm-10">
                <input type="password" name="senha" class="form-control" value="<?php echo $senha; ?>" placeholder="Digite sua senha" 
                id="inputPassword" 
                require>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label text-info fw-bold">Confirme a senha:
                </label>
                <div class="col-sm-10">
                <input type="password" name="csenha" class="form-control" value="<?php echo $csenha; ?>" 
                placeholder="Digite sua senha novamente" 
                id="inputPassword" require>
                </div>
            </div>
            <div class="text-center">
                <label>
                    <p class="login-register-text">Já tem conta? Faça
                    <a href="index.php" class="text-decoration-none text-info">login</a> agora!</p>
                </label>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" name="submit" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
    <?php
    error_reporting(0);
    ?>
    <footer class="fixed-bottom text-center">  
        &copy; Todos os direitos reservados
    </footer>
    </main>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>
</html>