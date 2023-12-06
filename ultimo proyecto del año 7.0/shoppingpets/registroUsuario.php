<?php
 include_once("conex.php");
 $nombre = $_POST["nombre"];
 $direccion = $_POST["direccion"];
 $telefono = $_POST["telefono"];
 $correo = $_POST["correo"];
 $clave = $_POST["clave"];

    $sql = "INSERT INTO `usuarios` (`idUsuario`, `nombre`, `RUT`, `direccion`, `telefono`, `correo`, `clave`, `idRol`) VALUES (NULL, '$nombre','', '$direccion', '$telefono', '$correo', '$clave', '3');";
    $result = mysqli_query($conex,$sql);
    if($result){
        echo '<script>';
        echo 'alert("El usuario ha sido creado correctamente");';
        echo 'window.location.href = "login.php";';
        echo '</script>';
    }
    else{
        echo 'error';
    }
    mysqli_close($conex);
?>