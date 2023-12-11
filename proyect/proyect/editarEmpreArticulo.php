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
    
        <link rel="apple-touch-icon" href="assets/img/cerdito.jpg">
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
    <!--
        
    TemplateMo 559 Zay Shop
    
    
https://templatemo.com/tm-559-zay-shop

    
    -->
    <script src="
https://code.jquery.com/jquery-3.6.4.min.js
"></script>
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
                            <a class="nav-link" href="empresa.php">MIS PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="crudNotificaciones.php">MIS ALERTAS</a>
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

            <h2 class="fw-bold mb-2 text-uppercase">articulos</h2>
              <p class="text-white-50 mb-5">actualizar articulos</p>
            <?php
        include_once("conex.php");

        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["enviar"])) {
            $nombre = $_POST['nombre'];
            $precioVenta = $_POST['precioVenta'];
            $stock = $_POST['stock'];
            $descripcion = $_POST['descripcion'];
            // Cambié el nombre del campo de "fotos" a "imagen"
            
            $id = $_POST['idArticulo'];

            $sql = "UPDATE articulo SET nombre='$nombre', precioVenta='$precioVenta', stock='$stock', stock='$stock', descripcion='$descripcion' WHERE idArticulo='$id'";
            $result = mysqli_query($conex, $sql);

            if ($result) {
                echo '<script>';
                echo 'alert("El artículo ha sido actualizado correctamente");';
                echo 'window.location.href = "empresa.php";';
                echo '</script>';
            } else {
                echo '<script>';
                echo 'alert("Error al actualizar el artículo: ' . mysqli_error($conex) . '");';
                echo 'window.location.href = "empresa.php";';
                echo '</script>';
            }

            mysqli_close($conex);
        } else {
            $id = $_GET['idArticulo'];
            $sql = "SELECT * FROM articulo WHERE idArticulo='$id'";
            $resultado = mysqli_query($conex, $sql);

            $fila = mysqli_fetch_array($resultado);

            $nombre = $fila['nombre'];
            $precioVenta = $fila['precioVenta'];
            $stock = $fila['stock'];
            $descripcion = $fila['descripcion'];           
            

            mysqli_close($conex);
            ?>
            <!-- ... (Tus códigos HTML actuales) ... -->
            
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <!-- ... (Otros campos del formulario) ... -->
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre" value="<?php echo $nombre; ?>"><br>

                <label for="precioVenta">Precio de Venta:</label><br>
                <input type="number" name="precioVenta" value="<?php echo $precioVenta; ?>"><br>

                <label for="stock">Stock:</label><br>
                <input type="number" name="stock" value="<?php echo $stock; ?>"><br>

                <label for="descripcion">descripcion:</label><br>
                <input type="text" name="descripcion" value="<?php echo $descripcion; ?>"><br>


                
                <input type="hidden" name="idArticulo" value="<?php echo $id; ?>"><br>

                <input type="submit" name="enviar" value="Actualizar">
                <!-- ... (Otros campos del formulario) ... -->
            </form>
            <!-- ... (Tus códigos HTML actuales) ... -->
        <?php 
    } 
    ?>
    </form>
             
                 </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
      
    <!-- Close login -->
</body>
</html> 