
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Shopping pet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/cerdito.jpg">
    <link rel="shortcut icon" class="pepap" type="image/x-icon" href="assets/img/cerdito.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
<style>
    .pepap{
        border-radius: 50%;
        
    }
    .center{
        text-align: center;
    }
</style>
</head>

<body>
    


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                <img src="./assets/img/logo_of.jpg" alt="">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Sobre Nosotros</a>
                        </li>
                        
                        
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        </div>
                    </div>

                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="login.php">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/carrusel_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Shopping</b> Hueso</h1>
                                <h3 class="h2">Jugete</h3>
                                <p>
                                    Con este divertidohueso tu amigito podra divertirse y desarrolar 
                                    fuerza y a aprender a morder si es solo un cachorro
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/ced.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Arnes porcino</h1>
                                <h3 class="h2">Arnes</h3>
                                <p>
                                   Arenes para sacar a pasear a tu amigito comelon a cualquien parte
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/carrusel_03.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Rinopeluche</h1>
                                <h3 class="h2">Jugete</h3>
                                <p>
                                    Con este divertido peliche tu amigo peludo podra divertirse sin fin de horas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categorias</h1>
                <p>
                    Aqui encontraras las categorias actuales
                </p>
            </div>
        </div>
        <div  class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src="./assets/img/pato_peluche.png" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Diversión y Entretenimiento</h5>
                
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src="./assets/img/bed.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Estilo y confort</h2>
               
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src="./assets/img/peine.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Bienestar y Cuidado</h2>
                
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Footer -->
    <footer class="center" >

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; proyecto bajo supervicion del <a rel="sponsored" href="https://www.sena.edu.co/es-co/Paginas/default.aspx" target="_blank">SENA</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer  >
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>