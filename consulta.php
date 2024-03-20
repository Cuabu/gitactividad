<?php

require_once './configuracion.php';

// Crear una instancia de la clase Conexion
$conexion = new Conexion();
$db = $conexion->getConexion();

// Verificar si la conexión fue exitosa
if ($db->connect_error) {
    echo "Error al conectar a la base de datos: " . $db->connect_error;
} else {
    echo "La conexión a la base de datos fue exitosa.";
}

// Desconectar la base de datos
$conexion->desconectar();
