<?php 
 $conex = mysqli_connect("localhost","root","1234","tienda_mascotas");
 if (!$conex){
    echo "error" . mysqli_connect_error();
 }

?>