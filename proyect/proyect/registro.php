

<!DOCTYPE html>
<html lang="en">
<head>
<title>registro</title>
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
    <style>
        .login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3,h6{
    text-align: center;
    color: #59ab6e;
}
.login-form-2{
    padding: 5%;
    background: #59ab6e;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3,p{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color:  #fff;
    background-color: #59ab6e;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #59ab6e;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
} 

    </style>


   

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('#esta').addEventListener('submit', function (event) {
            // Validar contraseña
            var contrasena = document.getElementById('contrasena').value;
            var validarContrasena = document.getElementById('validarContrasena').value;

            if (contrasena !== validarContrasena) {
                alert('Las contraseñas no coinciden. Por favor, verifica.');
                event.preventDefault();
            } else if (!validarSeguridadContrasena(contrasena)) {
                alert('La contraseña no es segura. Debe contener al menos 8 caracteres, incluyendo letras y números.');
                event.preventDefault();
            }

            // Validar número telefónico
            var telefono = document.getElementById('telefono').value;

            if (!validarNumeroTelefonico(telefono)) {
                alert('Número telefónico no válido. Debe contener solo números y tener al menos 10 dígitos.');
                event.preventDefault();
            }
        });
    });

    // Función para validar seguridad de la contraseña
    function validarSeguridadContrasena(contrasena) {
        // Agrega tus propias reglas de seguridad aquí
        return contrasena.length >= 8 && /\d/.test(contrasena) && /[a-zA-Z]/.test(contrasena);
    }

    // Función para validar número telefónico
    function validarNumeroTelefonico(telefono) {
        // Ajusta las reglas según tus necesidades
        return /^\d{10,}$/.test(telefono);
    }
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('#esta2').addEventListener('submit', function (event) {
        // Validar contraseña
        var contrasena = document.getElementById('contra').value;
        var validarContrasena = document.getElementById('validarContra').value;

        if (contrasena !== validarContrasena) {
            alert('Las contraseñas no coinciden. Por favor, verifica.');
            event.preventDefault();
        } else if (!validarSeguridadContrasena(contrasena)) {
            alert('La contraseña no es segura. Debe contener al menos 8 caracteres, incluyendo letras y números.');
            event.preventDefault();
        }

        // Validar número telefónico
        var telefono = document.getElementById('empre').value;

        if (!validarNumeroTelefonico(telefono)) {
            alert('Número telefónico no válido. Debe contener solo números y tener al menos 10 dígitos.');
            event.preventDefault();
        }
    });
});

// Función para validar seguridad de la contraseña
function validarSeguridadContrasena(contrasena) {
    // Agrega tus propias reglas de seguridad aquí
    return contrasena.length >= 8 && /\d/.test(contrasena) && /[a-zA-Z]/.test(contrasena);
}

// Función para validar número telefónico
function validarNumeroTelefonico(telefono) {
    // Ajusta las reglas según tus necesidades
    return /^\d{10,}$/.test(telefono);
}
</script>
    
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
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Registro Usuario</h3>
                <form id="esta" method="post" action="registroUsuario.php">
                    <div class="form-group">
                        <h6>Ingresa tu Nombre</h6>
                        <input type="text" class="form-control"  name="nombre" required />
                    </div>
                    <div  class="form-group">
                         <h6>Ingresa tu dirección</h6>
                         <input  type="text"  id="Correo"  class="form-control" name="direccion" required/>
                     </div>
                     <div  class="form-group">
                         <h6>Ingresa tu Telefono</h6>
                         <input  type="number"  id="telefono"  class="form-control"name="telefono" required/>
                     </div >
                     <div  class="form-group">
                         <h6>Ingresa tu correo</h6>
                         <input  type="email"  id="direccion"  class="form-control" name="correo" required  />
                     </div > 
                    <div class="form-group">
                        <h6>Ingresa tu contraseña</h6>
                        <input type="password" id="contrasena" class="form-control" name="clave" required />
                    </div>
                    <div class="form-group">
                        <h6>Validar tu contraseña</h6>
                        <input type="password" id="validarContrasena" class="form-control" name=""  />
                    </div><br>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Registrarse"  />
                    </div>
                    <div class="form-group">     
                    </div>
                </form>
            </div>

            <div class="col-md-6 login-form-2">
                
                <h3>Registro Empresa</h3>
                <form id="esta2" method="post" action="registroEmpresa.php">
                    <div class="form-group">
                        <p>Ingresa el Nombre de la Empresa</p>
                        <input type="text" class="form-control" name="nombre" required />
                    </div>
                    <div class="form-group">
                        <p>Ingresa el RUT de la Empresa </p>
                        <input type="number" class="form-control" name="RUT" required />
                    </div>
                    <div class="form-group">
                        <p>Ingresa la Dirección de la Empresa </p>
                        <input type="text" class="form-control" name="direccion" required />
                    </div>
                    <div class="form-group">
                        <p>Ingresa el Telefono de la Empresa </p>
                        <input type="number" class="form-control" name="empre"required />
                    </div>
                    <div class="form-group">
                        <p>Ingresa el Correo de la Empresa </p>
                        <input type="email" class="form-control" name="correo" required />
                        <div class="form-group">
                        <p>Ingresa tu contraseña</p>
                        <input type="password" id="contra" class="form-control" name="clave" required />
                    </div>
                    <div class="form-group">
                        <p>Validar tu contraseña</p>
                        <input type="password" id="validarContra" class="form-control" name=""  />
                    </div><br>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Registrarse"  />
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

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
</body>
</html>
