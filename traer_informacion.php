<?php

require_once 'Conexion.php';

// Crear una instancia de la clase Conexion
$conexion = new Conexion();
$db = $conexion->getConexion();

// Verificar si la conexión fue exitosa
if ($db->connect_error) {
    echo "Error al conectar a la base de datos: " . $db->connect_error;
} else {
    // Consulta SQL para seleccionar todos los registros de la tabla productos
    $sql = "SELECT * FROM productos";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Construir la tabla HTML con los datos de la consulta
        echo '<table class="table table-striped">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Nombre</th>';
        echo '<th>Descripción</th>';
        echo '<th>Precio</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        // Iterar sobre cada fila de resultados y mostrarla en la tabla
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['nombre'] . '</td>';
            echo '<td>' . $row['descripcion'] . '</td>';
            echo '<td>' . $row['precio'] . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo "No se encontraron productos en la base de datos.";
    }
}

// Desconectar la base de datos
$conexion->desconectar();
