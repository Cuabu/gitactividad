<?php
require_once './config.php';

class Conexion {
    private $conexion;

    public function __construct() {
        $this->conectar();
    }

    public function conectar() {
        $this->conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function desconectar() {
        if ($this->conexion) {
            $this->conexion->close();
        }
    }

    public function getConexion() {
        return $this->conexion;
    }
}
