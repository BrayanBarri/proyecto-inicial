<?php
    include_once("conex.php");

    $nombre=$_POST["nombre"];
    $RUT=$_POST["RUT"];
    $direccion=$_POST["direccion"];
    $telefono=$_POST["telefono"];
    $correo=$_POST["correo"];
    $clave=$_POST["clave"];

    
    $sql = "INSERT INTO `usuarios` (`idUsuario`, `nombre`, `RUT`, `direccion`, `telefono`, `correo`, `clave`, `idRol`) VALUES (NULL, '$nombre', '$RUT', '$direccion', '$telefono', '$correo', '$clave', '2')";
    $result = mysqli_query($conex,$sql) or die(mysqli_error($conex));
    if($sql){
        echo '<script>';
        echo 'alert("la Empresa ha sido creada correctamente");';
        echo 'window.location.href = "login.php";';
        echo '</script>';
    
    }
    
    mysqli_close( $conex );
?>
 