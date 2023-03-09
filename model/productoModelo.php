<?php
    class productoModelo {
        private $PDO;

        public function __construct() {
            require_once('c://xampp/htdocs/mini-market/config/db.php');
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function insertar($nombre, $precio, $descripcion) {
            $statement = $this->PDO->prepare("INSERT INTO productos VALUES(null,:nombre,:precio,:descripcion)");
            $statement->bindParam(":nombre", $nombre);
            $statement->bindParam(":precio", $precio);
            $statement->bindParam(":descripcion", $descripcion);
            return($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }
    }
?>