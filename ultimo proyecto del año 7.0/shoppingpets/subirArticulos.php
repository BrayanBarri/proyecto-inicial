<?php
include_once("conex.php");


if (isset($_POST['foto'])) {
    
    $nombre_imagen=$_FILES['foto']['name'];
    $temporal=$_FILES['foto']['tmp_name'];
    $carpeta='\images';
    $ruta=$carpeta.'/'.$nombre_imagen;
    move_uploaded_file($temporal,$carpeta.'/'.$nombre_imagen);

    $query="INSERT INTO articulo (fotos) VALUES('$ruta')";
    $execute=mysqli_query($conex,$query) or die(mysqli_error($conex));

    if($execute){
            echo "<script language='JavaScript'>
                    alert('Se creo correctamente');
                    location.assign('crudArticulo.php');
                  </script>";
      }else{
            echo "<script language='JavaScript'>
                   alert('NO se eliminó correctamente');
                   location.assign('crudArticulo.php');
                  </script>";
       }


    }

?>
 