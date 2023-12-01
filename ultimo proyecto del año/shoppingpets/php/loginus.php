<?php
   include_once("conex.php");
    if($_POST){
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $sql = "SELECT  id,";
    }
?>


<!DOCTYPE html>
<html lang="es-co">
    <head>
        <title>login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/cerdito.jpg">
    
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/templatemo.css">
        <link rel="stylesheet" href="assets/css/custom.css">
    
        <!-- Load fonts style after rendering the layout styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    
        <!-- Load map styles -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <!--
        
    TemplateMo 559 Zay Shop
    
    https://templatemo.com/tm-559-zay-shop
    
    -->
    </head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-night shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="">
               Iniciar Sesion Como:
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="loginus.php">usuario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="loginem.php">empresa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="loginad.php">administrador</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="index.html">Volver</a>
                        </li>
                    </ul>
                </div>


        </div>
    </nav>
    <!-- Close Header -->
    <!-- open login  -->
            <br><br><br><br>
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Iniciar sesion</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4"></h3>
						<form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="login-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Username" name="nombre" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" name="contrasena" required>
	            </div>
	            <div class="form-group d-md-flex">

								<div class="w-50 text-md-right">
									<p>¿no tienes cuenta?</p><a href="#">crea una cuenta</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">iniciar</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section> <br><br><br><br><br><br><br><br><br><br>
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

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
      
    <!-- Close login -->
</body>
</html>