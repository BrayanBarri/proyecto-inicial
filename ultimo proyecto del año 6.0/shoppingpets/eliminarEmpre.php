<?php
$id = $_GET['idUsuario'];
include_once('conex.php');

$sql = "DELETE FROM usuarios WHERE idUsuario='".$id."'";
$resultado = mysqli_query($conex, $sql);

if ($resultado) {
    echo "<script language='JavaScript'>
            alert('Se eliminó correctamente');
            location.assign('crudEmpre.php');
          </script>";
} else {
    echo "<script language='JavaScript'>
            alert('NO se eliminó correctamente');
            location.assign('crudEmpre.php');
          </script>";
}
?> 