<?php
include_once("conex.php");

if (!empty($_POST)) {
    $alert = "";

    if (empty($_POST["idCategoria"]) || empty($_POST["idUsuario"]) || empty($_POST["nombre"]) || empty($_POST["precioVenta"]) || empty($_POST["stock"]) || empty($_POST["descripcion"])) {
        $alert = "<p class='msg_error'>Todos los campos son obligatorios</p>";
    } else {
        $idCategoria = $_POST["idCategoria"];
        $idUsuario = $_POST["idUsuario"];
        $nombre = $_POST["nombre"];
        $precioVenta = $_POST["precioVenta"];
        $stock = $_POST["stock"];
        $descripcion = $_POST["descripcion"];

        
        $imagen = $_FILES["imagen"];
        $nombreImagen = $imagen["name"];
        $rutaImagen = "iii/" . $nombreImagen;
        

        move_uploaded_file($imagen["tmp_name"], $rutaImagen);

        $sql = "INSERT INTO `articulo` (`idArticulo`, `idCategoria`, `idUsuario`, `nombre`, `precioVenta`, `stock`, `descripcion`, `imagen`) 
                VALUES (NULL, '$idCategoria', '$idUsuario', '$nombre', '$precioVenta', '$stock', '$descripcion', '$rutaImagen')";

        if ($conex->query($sql)) {
            echo '<script>';
            echo 'alert("El artículo se ha creado correctamente");';
            echo 'window.location.href = "crudArticulo.php";';
            echo '</script>';
        } else {
            echo '<script>';
            echo 'alert("Error al crear el artículo;';
            echo 'window.location.href = "CrudArticulo.php";';
            echo '</script>';
        }
    }
}
?> 