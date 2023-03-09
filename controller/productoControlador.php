<?php
    class productoControlador {
        private $model;

        public function __construct() {
            require_once('c://xampp/htdocs/mini-market/model/productoModelo.php');
            $this->model = new productoModelo();
        }

        public function guardar($nombre, $precio, $descripcion) {
            $id = $this->model->insertar($nombre, $precio, $descripcion);

            return($id != false) ? header("Location:ver.php?id=".$id) : header("Location:create.php");
        }

        public function ver($id) {
            return ($this->model->ver($id) != false) ? $this->model->ver($id) : header("Location:index.php");
        }
    }
?>