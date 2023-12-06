
<!DOCTYPE html>
<html lang="es-co">
    <head>
        <title>Agregar</title>
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

        
    <style>
        .insert{
            margin: 10px;
            width: 300px;
            text-align: center;
            background-color:#59ab6e  ;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 25px;
            padding-bottom: 25px; ;
        }

    </style>
       


     </head>
<body >


<!-- Start Top Nav -->
<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                <?php
                    session_start();


                    // Mostrar los datos de la sesión
                    //echo "user: " . $_SESSION['idUsuario'] ;
                    echo "BIENVENIDO  " . $_SESSION['nombre'] ;
                    //echo "  " . $_SESSION['direccion'] ;
                    //echo "Teléfono:  " . $_SESSION['telefono'] ;
                  //  echo "Correo:   " . $_SESSION['correo'];

                    ?>  
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->




    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                <img src="./assets/img/logo_of.jpg" alt="">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="cruduser.php">USUARIOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">EMPRESAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="crudArticulo.php">PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="salir.php">SALIR</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        </div>
                    </div>

                    </a>
                    
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->


    <?php 
    if(isset($_POST["enviar"])) {
       
        $IdCategoria=$_POST['IdCategoria'];
        $IdEmpresa=$_POST['IdEmpresa'];
        $nombre=$_POST['nombre'];
        $precioVenta=$_POST['precioVenta'];
        $stock=$_POST['stock'];
        $descripcion=$_POST['descripcion'];
        $fotos=$_POST['fotos'];


        include_once('conex.php');
        //insert into usuarios(nombre,direccion,telefono,correo)
        //values($nombre,$direccion,$telefono,$correo)
        $sql = "INSERT INTO `articulo` (`idArticulo`, `IdCategoria`, `IdEmpresa`, `nombre`, `precioVenta`, `stock`, `descripcion`, `fotos`) 
                VALUES (NULL, '$IdCategoria', '$IdEmpresa' , '$nombre', '$precioVenta', '$stock', '$descripcion', '$fotos')";
                $resultado = mysqli_query($conex,$sql);
                if($resultado) {

                    echo '<script>';
        echo 'alert("El usuario ha sido creado correctamente");';
        echo 'window.location.href = "crudArticulo.php";';
        echo '</script>'; 

                }else{ 
                    echo '<script>';
        echo 'alert("El usuario no ha sido creado correctamente");';
        echo 'window.location.href = "crudArticulo.php";';
        echo '</script>'; 
                          

                }
                mysqli_close( $conex );

    }else{
   ?>
   <center>
<div class="insert">
    
    
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

    <h2 class="fw-bold mb-2 text-uppercase">articulos</h2>
              <p class="text-white-50 mb-5">agregar articulos</p>
                <?php
                 include_once("conex.php");
                 $query_categoria = mysqli_query($conex,"SELECT idCategoria, nombreCategoria FROM categoria ");
                 $result_categoria = mysqli_num_rows($query_categoria);
                 ?>
              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">categoria del producto</label>
                <select name="idCategoria" >
                    <?php
                    if ($result_categoria > 0) {
                        while ($row = mysqli_fetch_array($query_categoria)) {
                    ?>
                    <option value="<?php echo $row['idCategoria'];?>"><?php echo $row['nombreCategoria'];?>
                </option>
                    <?php
                        }
                    }
                    

                    ?>
                    
                </select>
                <br>
              </div>

              <div>
              <?php
                 $query = mysqli_query($conex,"SELECT idUsuario, nombre FROM usuarios WHERE idRol = 2");
                 $result = mysqli_num_rows($query);
                 mysqli_close($conex);
                 ?>
              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">selecione la empresa <br>y<br>  nombre del producto</label><br>
                <select name="idUsuario" ><br>
                    <?php
                    if ($result > 0) {
                        while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?php echo $row['idUsuario'];?>"><?php echo $row['nombre'];?>
                    </div>
                    </div>
                </option>
                    <?php
                        }
                    }
                    

                    ?>
              
    <br><br>

        
        
        <label for="">nombre:</label><br>
        <input type="text" name="nombre" required><br>
        <label for="">precioVenta:</label>
        <input type="number" name="precioVenta" required><br>
        <label for="">stock:</label>
        <input type="number" name="stock" required><br>
        <label for="">descripcion:</label>
        <input type="text" name="descripcion" required><br>
        <label for="">fotos:</label>
        <input type="file" name="fotos" required><br>
        <input type="submit" name="enviar">
        <a href="crudArticulo.php">regresar</a>
        
        
    <?php
  }
  ?>
    </form>
  </div>
  </div>
  </div>


            <br><br><br><br>
           
     <br><br><br><br><br><br><br><br><br><br>
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
</center>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
      
    <!-- Close login -->
</body>
</html>