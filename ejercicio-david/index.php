<?php
include('config/conexion.php');

$conexion = new Conexion();
$conn = $conexion->conectar();
$sql = "SELECT * FROM producto";
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi lista de Productos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
        body {
            background-image: url('./img/kawi.jpg'); /* Reemplaza 'ruta/de/la/imagen.jpg' con la URL o la ruta de tu imagen de fondo */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>

<body>
    <br>
    
    <div class="container">
        <!-- Botón para agregar producto -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarModal">
            Agregar producto
        </button>
    </div>

    <!-- Modal para agregar producto -->
    <div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario para agregar producto -->
                    <form action="controller/agregarProductoController.php" method="POST">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Identificación del Producto</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th> 
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <td><?= $row['id_producto'] ?></td>
                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['descripcion'] ?></td>
                    <td>
                        <!-- Botón para editar producto -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarModal<?= $row['id_producto'] ?>">
                            Actualizar
                        </button>
                        <!-- Enlace para eliminar producto -->
                        <a href="controller/eliminarProductoController.php?id=<?= $row['id_producto'] ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>

                <!-- Modal para editar producto -->
                <div class="modal fade" id="editarModal<?= $row['id_producto'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Formulario para editar producto -->
                                <form action="controller/actualizarController.php" method="POST">
                                    <input type="hidden" name="id_producto" value="<?= $row['id_producto'] ?>">
                                    <div class="form-group">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?= $row['nombre'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion">Descripción:</label>
                                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" value="<?= $row['descripcion'] ?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>
