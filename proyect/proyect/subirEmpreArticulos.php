<?php
include_once("conex.php");

if (!empty($_POST)) {
    $alert = "";

    if (empty($_POST["idCategoria"]) || empty($_POST["nombre"]) || empty($_POST["precioVenta"]) || empty($_POST["stock"]) || empty($_POST["descripcion"])) {
        $alert = "<p class='msg_error'>Todos los campos son obligatorios</p>";

    } else {
        session_start();
        $idUsuario = $_SESSION['idUsuario'];

        $idCategoria = $_POST["idCategoria"];
        $nombre = $_POST["nombre"];
        $precioVenta = $_POST["precioVenta"];
        $stock = $_POST["stock"];
        $descripcion = $_POST["descripcion"];

        $imagen = $_FILES["imagen"];
        $nombreImagen = $imagen["name"];
        $rutaImagen = "iii/" . $nombreImagen;

        move_uploaded_file($imagen["tmp_name"], $rutaImagen);

        $sql = "INSERT INTO `articulo` (`idCategoria`, `idUsuario`, `nombre`, `precioVenta`, `stock`, `descripcion`, `imagen`) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conex->prepare($sql);
        $stmt->bind_param("iissdss", $idCategoria, $idUsuario, $nombre, $precioVenta, $stock, $descripcion, $rutaImagen);

        if ($stmt->execute()) {
            echo '<script>';
            echo 'alert("El artículo se ha creado correctamente");';
            echo 'window.location.href = "empresa.php";';
            echo '</script>';
        } else {
            echo '<script>';
            echo 'alert("Error al crear el artículo: ' . $stmt->error . '");';
            echo 'window.location.href = "empresa.php";';
            echo '</script>';
        }

        $stmt->close();
    }
}
?>
