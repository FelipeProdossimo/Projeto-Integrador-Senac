<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Company - HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--Para funcionar o Carrosel-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" 
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
      <!--Vem Até aqui o Carrosel-->
    <style>
        body {
              font: 1rem/1.5 var(--bs-font-sans-serif);
        }
    </style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><strong>SeaComp</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
            data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-list"></i>
              VEJA MAIS
            </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">SOBRE NÓS</a></li>
                <li><a class="dropdown-item" href="#">FALE CONOSCO</a></li>
                <li><a class="dropdown-item" href="#">AVALIAÇÕES DE NOSSOS CLIENTES</a></li>
              </ul>
          </li>
        </ul>
      </div>
      <div class="align-self-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-lightning-fill">
            </i>SOU FUNCIONÁRIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Projeto-Integrador-Senac/clientes/login-interno-clientes.php">
            <i class="bi bi-lightning-fill"></i>SOU CLIENTE</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<header class="container">
  <div id="carouselMain" class="carousel carousel-dark slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselMain" data-slide-to="0" class="active"></li>
    <li data-target="#carouselMain" data-slide-to="1" class="active"></li>
    <li data-target="#carouselMain" data-slide-to="2" class="active"></li>
  </ol>  
  <div class="carousel-inner">
      <div class="carousel-item active text-center" data-interval="3000">
        <img src="img/slide01.jpg" alt="First slide" class="img-fluid d-none d-md-block">
        <img src="img/slide01small.jpg" alt="Second slide" class="img-fluid d-block d-md-none">
      </div>
      <div class="carousel-item text-center" data-interval="3000">
        <img src="img/slide01.jpg" alt="First slide" class="img-fluid d-none d-md-block">
        <img src="img/slide01small.jpg" alt="First slide" class="img-fluid d-block d-md-none">
      </div>
      <div class="carousel-item text-center" data-interval="3000">
        <img src="img/slide01.jpg" alt="First slide" class="img-fluid d-none d-md-block">
        <img src="img/slide01small.jpg" alt="First slide" class="img-fluid d-block d-md-none">
      </div>

  </div>
</header>
<footer class="border-top fixed-bottom text-muted bg-light">
  <div class="container">
    <div class="row py-3">
      <div class="col-12 col-md-4 text-center text-md-left">
        &copy; 2021 - Search Company - Felipe Prodossimo
      </div>
      <div class="col-12 col-md-4 text-center">
        <a href="#" class="text-decoration-none">Política de Privacidade</a>
      </div>
      <div class="col-12 col-md-4 text-center text-md-right">
        <a href="#" class="text-decoration-none">Termos e responsabilidades</a>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>