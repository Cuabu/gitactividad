<?php
include_once('../model/productoDAO.php');

if(isset($_POST['id_producto'], $_POST['nombre'], $_POST['descripcion'])) {
    $id_producto = $_POST['id_producto'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    
    $productoDAO = new ProductoDAO(); // Crear la instancia del ProductoDAO
    if($productoDAO->actualizarProducto($conn, $id_producto, $nombre, $descripcion)) {
        header("Location: ../index.php");
        exit(); 
    } else {
        echo "Error al actualizar el producto.";
    }
}
?>
