<?php 
 $conex = mysqli_connect("localhost","root","","tienda_mascotas");
 if (!$conex){
    echo "error" . mysqli_connect_error();
 }
?>