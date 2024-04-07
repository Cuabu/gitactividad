# Mi Lista de Productos

Este es un proyecto básico para gestionar una lista de productos utilizando PHP y MySQL. La aplicación permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre los productos.

## Funcionalidades

- **Agregar Producto:** Permite agregar un nuevo producto a la lista.
- **Editar Producto:** Permite actualizar la información de un producto existente.
- **Eliminar Producto:** Permite eliminar un producto de la lista.
- **Visualización de Productos:** Muestra una tabla con la lista de productos existentes, incluyendo su identificación, nombre y descripción.

## Requisitos

Para ejecutar la aplicación, se requiere tener instalado:

- **Servidor Web:** Especificamente MYSQL "PhpmyAdmin no funciona"
- **Motor de Base de Datos MySQL:** Para almacenar la información de los productos.
- **PHP:** Versión 7.x o superior.

## Instrucciones de Uso

1. Clona o descarga este repositorio en tu servidor local.
2. Crea una base de datos MySQL y configura las credenciales de conexión en el archivo `config/conexion.php`.
3. Ejecuta el script SQL `database.sql` para crear la base de datos `productos` y para crear la tabla `producto` en tu base de datos.
4. Accede a la aplicación a través de un navegador web, y a la base de datos unicamente con MYSQL WORKBENCH.

## Estructura del Proyecto

- **config/:** Contiene el archivo de configuración para la conexión a la base de datos.
- **controller/:** Contiene los controladores PHP para manejar las operaciones de la aplicación.
- **img/:** Directorio opcional para almacenar imágenes.
- **README.md:** Este archivo que estás leyendo.
- **index.php:** El archivo principal de la aplicación que muestra la interfaz y gestiona las operaciones de los productos.
- **productos.sql:** El script en sql para correr y crear la base de datos y tabla.

## Tecnologías Utilizadas

- **PHP:** Para el desarrollo del backend de la aplicación.
- **MySQL:** Para la gestión de la base de datos.
- **Bootstrap:** Para el diseño y la interfaz de usuario.

## Notas

- Esta aplicación es un proyecto básico y no incluye características avanzadas como autenticación de usuarios o validación de formularios.
- Asegúrate de tomar medidas de seguridad adicionales, como validar y filtrar la entrada de datos para evitar vulnerabilidades como la inyección SQL.

¡Disfruta gestionando tu lista de productos con esta aplicación simple pero funcional!
