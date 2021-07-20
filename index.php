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
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
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
            <a class="navbar-brand" href="#"><strong>SeaCompany</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
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
                        <a class="nav-link" href="rede-funcionarios.php"><i class="bi bi-lightning-fill">
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
                <div class="carousel-item active text-center" data-interval="3500">
                    <img src="img/banner-s.gif" alt="First slide" class="img-fluid d-none d-md-inline-block">
                    <img src="img/banner-02.gif" alt="Second slide" class="img-fluid d-block d-md-none">
                </div>
                <div class="carousel-item text-center" data-interval="3500">
                    <img src="img/banner-02.gif" alt="First slide" class="img-fluid d-none d-md-inline-block">
                    <img src="img/banner-s.gif" alt="First slide" class="img-fluid d-block d-md-none">
                </div>
                <div class="carousel-item text-center" data-interval="4000">
                    <img src="img/banner-02.gif" alt="First slide" class="img-fluid d-none d-md-inline-block">
                    <img src="img/banner-s.gif" alt="First slide" class="img-fluid d-block d-md-none">
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item shadow-lg p-3 mb-5 bg-body rounded">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <strong>O que fazemos por sua empresa?</strong>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Nós do Search damos prioridade ao cliente, basta fazer o pedido de algum item especifico e
                            iremos atrás de todas melhores opções à você!!
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-lg p-3 mb-5 bg-body rounded">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong>Quem somos nós!</strong>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Somos uma empresa terceirizada, inicializando em 2021 para resolver os problemas de algumas
                            empresas que preferem ter uma base ampla sobre economizar dinheiro em itens e deixando suas
                            qualidades superiores aos próximos clientes!
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-lg p-3 mb-5 bg-body rounded">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong>Porque nos contratar?</strong>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            A nossa empresa <b>Search Company</b>, foi criada a fins de dar um suporte maior aos empresários que
                            desejam subir seus negócios, seremos seu fornecedor ou iremos estar disponibilizando seu
                            produto para um cliente que necessita dele, assim alavancando ambos e facilitar todos nossas
                            prestações de serviços! Vem dar um upgrade nos seus itens e serviços! </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <div style="height: 273px;" class="d-block d-md-none"></div>
    <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
    <div style="height: 129px;" class="d-none d-lg-block"></div>

    <footer class="border-top fixed-bottom text-muted bg-light">
        <div class="container">
            <div class="row py-3">
                <div class="col-12 col-md-4 text-center text-md-left">
                    &copy; 2021 - Search Company - Felipe Prodossimo
                </div>
                <div class="col-12 col-md-4 text-center">
                    <a href="politica.php" class="text-decoration-none">Política de Privacidade</a>
                    <br>
                    <a href="trocas.php" class="text-decoration-none">Trocas e Devoluções</a>

                </div>
                <div class="col-12 col-md-4 text-center text-md-right">
                    <a href="termos.php" class="text-decoration-none">Termos de Uso</a>
                    <br>
                    <a href="https://api.whatsapp.com/send?phone=5519988131094&text=Seja%20bem%20vindo%20a%20EQUIP%20SEA%20COMP!"
                        class="text-decoration-none text-dark"><i class="bi bi-whatsapp"></i>(19)98844-5522</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>