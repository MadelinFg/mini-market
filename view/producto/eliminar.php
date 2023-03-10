<?php
    require_once("c://xampp/htdocs/mini-market/controller/productoControlador.php");
    $obj = new productoControlador();
    $obj->eliminar($_GET['id']);

?>