<!DOCTYPE html>
<html lang="es-co">
    <head>
        <title>Crud Empresa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/cerdito.jpg">
    
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/templatemo.css">
        <link rel="stylesheet" href="assets/css/custom.css">
    
        <!-- Load fonts style after rendering the layout styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
        
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">

        <link href="DataTables-1.13.8/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="Buttons-2.4.2/css/buttons.dataTables.min.css" rel="stylesheet">
 

    
        <!-- Load map styles -->
        
        
        
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
   
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

    <style media="print">
        @page{
    size: A4;
    margin: 0;

}
.boton{
    display: none;
    visibility: none;
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
                            <a class="nav-link" href="crudEmpre.php">EMPRESAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="creararticulos.php">PRODUCTOS</a>
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
           $sql="SELECT * FROM usuarios WHERE idRol  = 2 ORDER BY nombre ASC ";
           $resultado=mysqli_query($conex,$sql);
    ?>



    <h1>lista de Empresas</h1>
    <a href="insertarEmpre.php"  class="btn btn-succces boton" >Nueva Empresa</a>
    <a href="" class="btn btn-succces boton" onclick="window.print()">Imprimir </a>
    <a href="empreExcel.php" class="btn btn-succces boton"> Excel</a>
    <div class="main-containert">
    <table id="myTable">
        <thead class="esta">
           <tr>
            <th>idUsuario</th>
            <th>nombre</th>
            <th>rut</th>
            <th>direccion</th>
            <th>telefono</th>
            <th>correo</th>
            <th class="boton">idRol</th>
            <th class="boton" >Acciones</th>
           </tr>
        </thead>
        
        <tbody>
           <?php
           while($filas=mysqli_fetch_assoc($resultado)){

           

           ?>
           <tr>
            <td><?php echo $filas['idUsuario'] ?></td>
            <td><?php echo $filas['nombre'] ?></td>
            <td><?php echo $filas['RUT'] ?></td>
            <td><?php echo $filas['direccion'] ?></td>
            <td><?php echo $filas['telefono'] ?></td>
            <td><?php echo $filas['correo'] ?></td>
            <td class="boton" ><?php echo $filas['idRol'] ?></td>

            <td class="boton" ><?php echo "<a href='editarEmpre.php?idUsuario=".$filas ['idUsuario']."'><button>EDITAR</button></a>"; ?>
            -
            <?php echo "<a href='eliminarEmpre.php?idUsuario=".$filas ['idUsuario']."'><button>ELIMINAR</button> </a>";  ?>
            </td>
           </tr>
           <?php
           }
           ?>
        </tbody>
        
    </table>
    </div>
    <?php 
    mysqli_close($conex);
    ?>
    </center>
           
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

	<script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" 
    referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>


  <script>
    $('#myTable thead th').each( function () {
        var title = $('#myTable tfoot th').eq( $(this).index() ).text();
        //$(this).html( '&amp;lt;input type=&amp;quot;text&amp;quot; placeholder=&amp;quot;Search '+title+'&amp;quot; /&amp;gt;' );
    } );
 
    // DataTable
    var table = $('#myTable').DataTable();
 
    // Apply the search
    table.columns().eq( 0 ).each( function ( colIdx ) {
        $( 'input', table.column( colIdx ).header() ).on( 'keyup change', function () {
            table
                .column( colIdx )
                .search( this.value )
                .draw();
        } );
    } );

    

  </script>

 


      
    <!-- Close login -->
</body>
</html>
