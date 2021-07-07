<?php


$emailVendSistema = "";
$senhaVendSistema = "";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seach Company</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    
    </style>
</head>

<body>
    <div class="container text-center text-align mt-5">
        <form style="max-width:500px; margin:auto;" name="formulario-login" action="login-interno-vendedores.php" method="post">
        <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" fill="currentColor" class="bi bi-person-lines-fill" 
        viewBox="0 0 16 16">
        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 
        1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 
        1h2a.5.5 0 0 0 0-1h-2z"/>
        </svg>
            <h3 class="text-warning">Faça seu login:</h3>  
            <div class="mb-3 row">
                <label for="loginEmail" class="col-sm-2 col-form-label text-warning fw-bold">Email:</label>
                <div class="col-sm-10">                    
                <input type="text" value="<?php echo $emailVendSistema ?>" name="email" class="form-control" id="email" placeholder="Seu e-mail" require>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label text-warning fw-bold">Senha:</label>
                <div class="col-sm-10">
                <input type="password" value="<?php echo $senhaVendSistema ?>" name="senha" class="form-control" 
                placeholder="Sua senha" id="inputPassword" require>
                </div>
            </div>
            <div class="text-center">
                <label>
                    <p class="login-register-text">Não tem conta?
                    <a href="cadastro-vendedores.php" class="text-decoration-none text-warning">Registra-se</a> 
                    agora!</p>
                </label>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" name="submit" type="submit">Entrar</button>
            </div>
            <?php 
            if(isset($_GET['mensagem'])){
                if($_GET['mensagem'] == 'errado'){
                    echo "<script>alert('Opss! Email ou senha incorretos.')</script>";
                }
            }
            ?>
        </form>
    </div>
    <footer class="fixed-bottom text-center">  
        &copy; Todos os direitos reservados
    </footer>
    </main>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="js/jquery.min.js"></script>

</body>
</html>