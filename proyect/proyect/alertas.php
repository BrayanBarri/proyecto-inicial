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
        <title>Crud Usuario</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/cerdito.jpg">
    
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/templatemo.css">
        <link rel="stylesheet" href="assets/css/custom.css">
    
        <!-- Load fonts style after rendering the layout styles -->
        <link rel="stylesheet" href="
https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap
">
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    
        <!-- Load map styles -->
        
        <link rel="stylesheet" href="
https://unpkg.com/leaflet@1.7.1/dist/leaflet.css
" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <style>
 main-containert{
            margin: 550px auto;
            width: auto;
}
table{
    background-color: white ;
    text-align: left;
    border-collapse: collapse;
    width: auto;
    
}
th, td{
   
    padding: 20px;
}
.esta{
    background-color:#59ab6e ;
    border-bottom: solid 5px #0f0f0f;
    color:white;
}

tbody {
    background-color: #ddd;

}
tr:hover td{
    background-color:#369681 ;
    color: white;
}
    </style>
        
        </head>
<body >
    <!-- Start Top Nav -->


       <!-- Header -->
       <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" >
                <img src="./assets/img/logo_of.jpg" alt="">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="empresa.php">MIS PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="alertas.php">MIS ALERTAS</a>
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
    <center>


    <?php   
        include_once("conex.php");
      
        
        $sesion = $_SESSION['idUsuario'] ;
           
        $sql="SELECT * FROM alertas WHERE idUsuario= $sesion  ";
        $resultado=mysqli_query($conex,$sql);
    ?>



    <h1>mis alertas</h1>
    
    <div class="main-containert">
    <table>
        <thead class="esta">
           <tr>
            <th>No. alerta</th>
            <th>nombre del receptor</th>
            <th>mensaje</th>
            <th>nombre emisor</th>
            <th>telefono emisor</th>
            <th>corrreo emisor</th>
            
           </tr>
        </thead>
        
        <tbody>
           <?php
           while($filas=mysqli_fetch_assoc($resultado)){

           

           ?>
           <tr>
            <td><?php echo $filas['idAlerta'] ?></td>
            <td><?php echo $filas['idUsuario'] ?></td>
            <td><?php echo $filas['mensaje'] ?></td>
            <td><?php echo $filas['nombreEmisor'] ?></td>
            <td><?php echo $filas['numeroEmisor'] ?></td>
            <td><?php echo $filas['correoEmisor'] ?></td>
        
        </tbody>
        <?php
           }
           ?>
    </table>
    </div>
    <?php 
    mysqli_close($conex);
    ?>
    
           
     <br><br><br><br><br><br><br><br><br><br>
	<div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; proyecto bajo supervicion del <a rel="sponsored" href="
https://www.sena.edu.co/es-co/Paginas/default.aspx
" target="_blank">SENA</a>
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