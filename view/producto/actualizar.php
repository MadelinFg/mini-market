<?php
    require_once("c://xampp/htdocs/mini-market/controller/productoControlador.php");
    $obj = new productoControlador();
    $obj->actualizar($_POST['inpt-id'], $_POST['inpt-nombre'], $_POST['inpt-precio'], $_POST['txta-descripcion']);
?>