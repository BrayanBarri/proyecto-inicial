<?php
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];
session_start();
$_SESSION['nombre'] = $nombre;

include_once('conex.php');

$sql = "SELECT * FROM usuarios WHERE nombre='$nombre' AND clave='$clave'";
$resultado = mysqli_query($conex, $sql);

$filas = mysqli_fetch_array($resultado);

if ($filas) { // Verificar si las credenciales son válidas
    if ($filas['idRol'] == 1) { // administrador
        // Consulta adicional para obtener más detalles del administrador
        $idUsuario = $filas['idUsuario'];
        $consultaAdmin = "SELECT * FROM usuarios WHERE idUsuario='$idUsuario'";
        $resultadoAdmin = mysqli_query($conex, $consultaAdmin);
        $detallesAdmin = mysqli_fetch_array($resultadoAdmin);

        // Almacenar detalles del administrador en la sesión
        $_SESSION['idUsuario'] = $detallesAdmin['idUsuario'];
        $_SESSION['nombre'] = $detallesAdmin['nombre'];
        $_SESSION['direccion'] = $detallesAdmin['direccion'];
        $_SESSION['telefono'] = $detallesAdmin['telefono'];
        $_SESSION['correo'] = $detallesAdmin['correo'];

        header("location: admin.php");

    } elseif ($filas['idRol'] == 2) { // empresa
        // Consulta adicional para obtener más detalles de la empresa
        $idUsuario = $filas['idUsuario'];
        $consultaEmpresa = "SELECT * FROM usuarios WHERE idUsuario='$idUsuario'";
        $resultadoEmpresa = mysqli_query($conex, $consultaEmpresa);
        $detallesEmpresa = mysqli_fetch_array($resultadoEmpresa);

        // Almacenar detalles de la empresa en la sesión
        $_SESSION['idUsuario'] = $detallesEmpresa['idUsuario'];
        $_SESSION['nombre'] = $detallesEmpresa['nombre'];
        $_SESSION['direccion'] = $detallesEmpresa['direccion'];
        $_SESSION['telefono'] = $detallesEmpresa['telefono'];
        $_SESSION['correo'] = $detallesEmpresa['correo'];

        header("location: empresa.php");

    } elseif ($filas["idRol"] == 3) { // usuario
        // Consulta adicional para obtener más detalles del usuario
        $idUsuario = $filas['idUsuario'];
        $consultaUsuario = "SELECT * FROM usuarios WHERE idUsuario='$idUsuario'";
        $resultadoUsuario = mysqli_query($conex, $consultaUsuario);
        $detallesUsuario = mysqli_fetch_array($resultadoUsuario);

        // Almacenar detalles del usuario en la sesión
        $_SESSION['idUsuario'] = $detallesUsuario['idUsuario'];
        $_SESSION['nombre'] = $detallesUsuario['nombre'];
        $_SESSION['direccion'] = $detallesUsuario['direccion'];
        $_SESSION['telefono'] = $detallesUsuario['telefono'];
        $_SESSION['correo'] = $detallesUsuario['correo'];

        header("location: shop.php");

    } else {
        echo "<script>alert('porfavor verificar los datos ingresados');</script>";
    }
} else {
    echo '<script>';
    echo 'alert("porfavor verifica los datos");';
    echo 'window.location.href = "login.php";';
    echo '</script>';
    
}

mysqli_close($conex);
?> 