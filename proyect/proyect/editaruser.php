<?php
session_start();

// Check if the 'idUsuario' session variable is not set
if (!isset($_SESSION['idUsuario'])) {
    // Redirect to login page
    header("Location: login.php");
    exit(); // Ensure that no further code is executed after the redirect
}
?>
<!DOCTYPE html>
<html lang="es-co">
    <head>
        <title>Editar</title>
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
include_once("conex.php");

if (isset($_POST["enviar"])) {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $id = $_POST['id'];

    $sql = "UPDATE usuarios SET nombre='".$nombre."', direccion='".$direccion."',
                                   telefono='".$telefono."', correo='".$correo."', clave='".$clave."' 
            WHERE idUsuario='".$id."'";
    
    $result = mysqli_query($conex, $sql);

    if ($result) {
        echo '<script>';
        echo 'alert("El usuario ha sido actualizado correctamente");';
        echo 'window.location.href = "cruduser.php";';
        echo '</script>';
    } else {
        echo '<script>';
        echo 'alert("Error al actualizar el usuario: ' . mysqli_error($conex) . '");';
        echo 'window.location.href = "cruduser.php";';
        echo '</script>';
    }

    mysqli_close($conex);                     
    }else{

        $id=$_GET['idUsuario'];
        $sql = "SELECT * from usuarios WHERE idUsuario='".$id."' ";
        $resultado = mysqli_query($conex,$sql);

        $fila=mysqli_fetch_array($resultado);
        $nombre=$fila['nombre'];
        $direccion=$fila['direccion'];
        $telefono=$fila['telefono'];
        $correo=$fila['correo'];
        $clave=$fila['clave'];

        mysqli_close($conex);
   ?>
   <center>
<div class="insert">
    <h1>Editar Usuario</h1>
    
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    

        <label for="">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>" ><br>
        <label for="">direccion:</label>
        <input type="text" name="direccion"value="<?php echo $direccion; ?>" ><br>
        <label for="">telefono:</label>
        <input type="number" name="telefono"value="<?php echo $telefono; ?>" ><br>
        <label for="">correo:</label>
        <input type="email" name="correo"value="<?php echo $correo; ?>" ><br>
        <label for="">contraseña:</label>
        <input type="password" name="clave"value="<?php echo $clave; ?>"><br>
        
        <input type="hidden" name="id"value="<?php echo $id; ?>"><br>

        <input type="submit" name="enviar" value="actualizar">
       
        
    
    <?php
  }
  ?>
    </form>

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