<?php
    class productoControlador {
        private $model;

        public function __construct() {
            require_once('c://xampp/htdocs/mini-market/model/productoModelo.php');
            $this->model = new productoModelo();
        }

        public function select() {
            return ($this->model->select()) ? $this->model->select() : false;
        }

        public function guardar($nombre, $precio, $descripcion) {
            $id = $this->model->insertar($nombre, $precio, $descripcion);

            return($id != false) ? header("Location:ver.php?id=".$id) : header("Location:create.php");
        }

        public function ver($id) {
            return ($this->model->ver($id) != false) ? $this->model->ver($id) : header("Location:index.php");
        }

        public function actualizar($id, $nombre, $precio, $descripcion) {
            return ($this->model->actualizar($id, $nombre, $precio, $descripcion) != false) ? header("Location:ver.php?id=".$id): header("Location:index.php");
        }

        public function eliminar($id){
            return ($this->model->eliminar($id)) ? header("Location:index.php") : header("Location:ver.php?id=".$id) ;
        }
    }
?>