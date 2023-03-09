<?php
    require_once('c://xampp/htdocs/mini-market/controller/productoControlador.php');
    $obj = new productoControlador();
    $obj->guardar($_POST['inpt-nombre'], $_POST['inpt-precio'], $_POST['txta-descripcion']);
?>