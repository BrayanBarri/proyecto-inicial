<?php
$nombre=$_POST['nombre'];
$clave=$_POST['clave'];
session_start();
$_SESSION['nombre']=$nombre;

include_once('conex.php');

$sql="SELECT*FROM usuarios where nombre='$nombre' and clave='$clave'";
$resultado=mysqli_query($conex,$sql);

$filas=mysqli_fetch_array($resultado);

if($filas['idRol']==1){ //administrador
    header("location:admin.php");

}elseif($filas['idRol']==2){ //empresa
header("location:empresa.php");
}elseif($filas["idRol"]==3){//usuario
    header("location:usuario.php");
}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1>ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_close($conex);
?>