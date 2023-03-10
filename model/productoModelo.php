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

        public function ver($id) {
            $statement = $this->PDO->prepare("SELECT * FROM productos WHERE id= :id limit 1");
            $statement->bindParam(":id", $id);
            return($statement->execute()) ? $statement->fetch() : false;
        }

        public function select() {
            $statement = $this->PDO->prepare("SELECT * FROM `productos`");
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function actualizar($id, $nombre, $precio, $descripcion) {
            $statement = $this->PDO->prepare("UPDATE productos SET nombre = :nombre, precio = :precio, descripcion = :descripcion WHERE id= :id");
            $statement->bindParam(":id", $id);
            $statement->bindParam(":nombre", $nombre);
            $statement->bindParam(":precio", $precio);
            $statement->bindParam(":descripcion", $descripcion);
            return($statement->execute()) ? $id : false;
        }

        public function eliminar($id){
            $statement = $this->PDO->prepare("DELETE FROM productos WHERE id = :id");
            $statement->bindParam(":id", $id);
            return ($statement->execute()) ? true : false;
        }
    }
?>