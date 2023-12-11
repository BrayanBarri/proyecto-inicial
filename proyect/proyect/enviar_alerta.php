<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idUsuario'])) {

    session_start();
    
    $idUsuario = $_POST['idUsuario'];

    include_once('conex.php');
    $mensaje = "Te he enviado una alerta";
    
    $sesin = $_SESSION['idUsuario'];
    $numeroEmisor = $_SESSION['telefono'];
    $correoEmisor = $_SESSION['correo'];
    $nombreEmisor = $_SESSION['nombre'];
    // Corrige las comillas simples en los nombres de las columnas
    $consultaInsertar = "INSERT INTO `alertas` (`idAlerta`, `idUsuario`, `mensaje`, `idEmisor`,`nombreEmisor`, `numeroEmisor`, `correoEmisor` ) 
                        VALUES (NULL, '$idUsuario', '$mensaje', '$sesin','$nombreEmisor', '$numeroEmisor', '$correoEmisor')";

    if (mysqli_query($conex, $consultaInsertar)) {
        echo 'success';
    } else {
        echo 'error: ' . mysqli_error($conex);
    }

    mysqli_close($conex);
} else {
    echo 'error';
}
?> 