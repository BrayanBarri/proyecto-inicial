<?php
$id = $_GET['idArticulo'];
include_once('conex.php');

$sql = "DELETE FROM articulo WHERE idArticulo='".$id."'";
$resultado = mysqli_query($conex, $sql);

if ($resultado) {
    echo "<script language='JavaScript'>
            alert('Se eliminó correctamente');
            location.assign('crudArticulo.php');
          </script>";
} else {
    echo "<script language='JavaScript'>
            alert('NO se eliminó correctamente');
            location.assign('crudArticulo.php');
          </script>";
}
?> 