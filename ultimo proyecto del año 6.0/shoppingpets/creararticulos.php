
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script lang="text/javascript">
$(document).ready(function(){

//--------------------- SELECCIONAR FOTO PRODUCTO ---------------------
$("#foto").on("change",function(){
    var uploadFoto = document.getElementById("foto").value;
    var foto       = document.getElementById("foto").files;
    var nav = window.URL || window.webkitURL;
    var contactAlert = document.getElementById('form_alert');
    
        if(uploadFoto !='')
        {
            var type = foto[0].type;
            var name = foto[0].name;
            if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png')
            {
                contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';                        
                $("#img").remove();
                $(".delPhoto").addClass('notBlock');
                $('#foto').val('');
                return false;
            }else{  
                    contactAlert.innerHTML='';
                    $("#img").remove();
                    $(".delPhoto").removeClass('notBlock');
                    var objeto_url = nav.createObjectURL(this.files[0]);
                    $(".prevPhoto").append("<img id='img' src="+objeto_url+">");
                    $(".upimg label").remove();
                    
                }
          }else{
              alert("No selecciono foto");
            $("#img").remove();
          }              
});

$('.delPhoto').click(function(){
    $('#foto').val('');
    $(".delPhoto").addClass('notBlock');
    $("#img").remove();

});

});
    </script>
    <style>
        .card {
            background:#59ab6e;
}
.lola,h2, p{
    color:white ;
}
.prevPhoto {
    display: flex;
    justify-content: space-between;
    width: 160px;
    height: 150px;
    border: 1px solid #CCC;
    position: relative;
    cursor: pointer;
    background: url(../images/uploads/user.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    margin: auto;
}
.prevPhoto label{
	cursor: pointer;
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 2;
}
.prevPhoto img{
	width: 100%;
	height: 100%;
}
.upimg, .notBlock{
	display: none !important;
}
.errorArchivo{
	font-size: 16px;
	font-family: arial;
	color: #cc0000;
	text-align: center;
	font-weight: bold; 
	margin-top: 10px;
}
.delPhoto{
	color: #FFF;
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 50%;
	width: 25px;
	height: 25px;
	background: red;
	position: absolute;
	right: -10px;
	top: -10px;
	z-index: 10;
}
#tbl_list_productos img{
	width: 50px;
}
.imgProductoDelete{
	width: 175px;
}
.center{
    text-align: center;
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
                    //session_start();


                    // Mostrar los datos de la sesión
                    //echo "user: " . $_SESSION['idUsuario'] ;
                    //echo "BIENVENIDO  " . $_SESSION['nombre'] ;
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
    <!-- open login  -->
            <br><br><br><br>
            
            <section class="lola">
            <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
            <form action="subirarticulos.php" method="post" enctype="multipart/form-data">
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
              </div>

              <?php
                 $query = mysqli_query($conex,"SELECT idUsuario, nombre FROM usuarios WHERE idRol = 2");
                 $result = mysqli_num_rows($query);
                 mysqli_close($conex);
                 ?>
              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">nombre de la empresa</label>
                <select name="idUsuario" >
                    <?php
                    if ($result > 0) {
                        while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?php echo $row['idUsuario'];?>"><?php echo $row['nombre'];?>
                </option>
                    <?php
                        }
                    }
                    

                    ?>
                    
                 </select>
              </div>
              <div class="form-outline form-white mb-4">
              <label class="form-label" for="producto">Nombre del Producto</label>
                <input type="texto" id="producto" name="nombre" class="form-control form-control-lg" />
              </div>
              <div class="form-outline form-white mb-4">
              <label class="form-label" for="precio">Precio del Producto</label>
                <input type="number" id="precio" name="precioVenta" class="form-control form-control-lg" />
              </div>
              <div class="form-outline form-white mb-4">
              <label class="form-label" for="stock">Cantidad de Productos</label>
                <input type="number" id="stock" name="stock" class="form-control form-control-lg" />
              </div>
              <div class="form-outline form-white mb-4">
              <label class="form-label" for="descripcion">Descripcion del Producto</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control form-control-lg" />
                <div class="photo">
	                <label for="foto">Foto</label>
                    <div class="prevPhoto">
                    <span class="delPhoto notBlock">X</span>
                    <label for="foto"></label>
                    </div>
                    <div class="upimg">
                    <input type="file" name="foto" id="foto">
                    </div>
                    <div id="form_alert"></div>
                </div>
              <button class="btn btn-outline-light btn-lg px-5" type="submit">agregar</button>
                 </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

     <br><br><br><br><br><br><br><br><br><br>
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
    </footer>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
      
    <!-- Close login -->
</body>
</html>