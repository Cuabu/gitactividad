<?php

// Datos de conexión a la base de datos
$servername = "localhost"; // Nombre del servidor
$username = "root"; // Nombre de usuario
$password = ""; // Contraseña
$dbname = "gitactividad"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT * FROM productos"; // Reemplaza 'tabla' con el nombre de tu tabla

// Ejecutar la consulta
$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result) {
    echo "La consulta fue exitosa.";
    // Aquí puedes realizar operaciones adicionales con los resultados
} else {
    echo "Error al ejecutar la consulta: " . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>
