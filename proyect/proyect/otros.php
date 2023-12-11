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
<html lang="es">

<head>
    <title>Otros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/cerdito.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/cerdito.jpg">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!--emoji--->
    <link rel="stylesheet" href="
https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css
">
    <link rel="stylesheet" href="
https://unpkg.com/leaflet@1.7.1/dist/leaflet.css
" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />


    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="
https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap
">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop


-->
<script src="
https://code.jquery.com/jquery-3.6.4.min.js
"></script>
<script>
    $(document).ready(function() {
        $('.enviar-alerta').on('click', function() {
            // Obtén el idUsuario del atributo data-idusuario
            var idUsuario = $(this).data('idusuario');

            // Envía la alerta al usuario con AJAX
            $.ajax({
                type: 'POST',
                url: 'enviar_alerta.php', // Archivo PHP que manejará la alerta
                data: { idUsuario: idUsuario },
                success: function(response) {
                    alert('Alerta enviada al promocionador.');
                },
                error: function(error) {
                    console.error('Error al enviar la alerta:', error);
                }
            });
        });
    });
</script>

<style>
    .fotitos{
        width: auto;
        height: 350px;
       image-orientation: center;
    }
    .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #59ab6e;
} 
</style>

</head>

<body>



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
                            <center>
                            <li class="nav-item"> 
                                <a class="nav-link " href="diversion.php">Diversión y <br> entretenimiento</a>
                            </li>
                            </center>
                            <center>
                            <li class="nav-item">
                                <a class="nav-link" href="estiloyConfort.php">Estilo y <br> Confort</a>
                            </li>
                            </center>
                            <center>
                            <li class="nav-item">
                                <a class="nav-link" href="bienestaryCuidado.php">Bienestar y <br> cuidado</a>
                            </li>
                            </center>
                            <center>
                            <li class="nav-item">
                                <a class="nav-link" href="otros.php">Otros</a>
                            </li>
                            </center>
                            
                            <li class="nav-item">
                            <li class="nav-item">
                         <a class="nav-link" href="salir.php">SALIR</a>
                        </li>
                            </li>
                    <div class="navbar align-self-center d-flex">
                        <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                            </div>
                        </div>
    
                        
                       
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



    <!-- Start Content -->
    <center>


        <?php
               include_once("conex.php");
               $sql = "SELECT * FROM articulo WHERE idCategoria  = 4 ORDER BY nombre ASC";
    
               $resultado=mysqli_query($conex,$sql);
        ?>
    
    
    
        
        <div class="main-containert articulos">
       <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
        while($filas=mysqli_fetch_assoc($resultado)){ ?>
       
        <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                            <img class="fotitos" src="<?php echo substr($filas['imagen'],0)?>" alt=""> 
                                
                            </div>
                            <div class="card-body">
                            <p class="card-title" > <strong><h5>nombre </h5></strong> <?php echo $filas['nombre'] ?></p>
                            <p class="card-text" ><strong><h5>precio </h5></strong> <?php echo "$"?><?php echo $filas['precioVenta'] ?></p>
                            <p class="card-text" ><strong><h5>cantidades disponibles</h5></strong> <td><?php echo $filas['stock'] ?></td></p>
                            <td><h5> descripción</h5>   <?php echo $filas['descripcion'] ?></td>

                           
                            <td><h2> promocionador</h3> <br>
                           <?php
                           $idUsuario = $filas['idUsuario'];
                           $consultaInfo = "SELECT nombre, correo FROM usuarios WHERE idUsuario='$idUsuario'";
                           $resultadoInfo = mysqli_query($conex, $consultaInfo);
                           $infoUsuario = mysqli_fetch_array($resultadoInfo);
                           
                           $nombreUsuario = $infoUsuario['nombre'];
                           $correoUsuario = $infoUsuario['correo'];
                           
                           echo "$nombreUsuario - $correoUsuario</td>";
                           
                           ?>
                           <br>
                           <button class="btn btn-success mt-2 enviar-alerta" data-idusuario="<?php echo $filas['idUsuario']; ?>">
                                Contactar Promocionador
                                </button> 

                            
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                            </div>
                        </div>
                    </div>
        <?php } ?>
       </div>
        </div>
        <?php 
        mysqli_close($conex);
        ?>
        </center>
<!-- finish Content -->
    


    <!-- Start Footer -->
   
    <footer>
        <center>
        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; Shopping Pets, proyecto bajo supervicion del <a rel="sponsored" href="
https://www.sena.edu.co/es-co/Paginas/default.aspx
" target="_blank">SENA</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</center>
    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="js/jquery.min.js"></script>
    <script src="
https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js
" 
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" 
    referrerpolicy="no-referrer"></script>
    <script src="
//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js
"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>



    <script>
    $('#myTable thead th').each( function () {
        var title = $('#myTable tfoot th').eq( $(this).index() ).text();
        //$(this).html( '&amp;lt;input type=&amp;quot;text&amp;quot; placeholder=&amp;quot;Search '+title+'&amp;quot; /&amp;gt;' );
    } );
 
    
    var table = $('#myTable').DataTable();
 
   
    table.columns().eq( 0 ).each( function ( colIdx ) {
        $( 'input', table.column( colIdx ).header() ).on( 'keyup change', function () {
            table
                .column( colIdx )
                .search( this.value )
                .draw();
        } );
    } );

    

  </script>
    <!-- End Script -->
</body>

</html> 