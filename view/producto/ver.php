<?php
    require_once('c://xampp/htdocs/mini-market/view/main/header.php');
    require_once('c://xampp/htdocs/mini-market/controller/productoControlador.php');

    $obj = new productoControlador();
    $data = $obj->ver($_GET['id']);
?>

<div class="container">
    <h3>Detalle del registro</h3>
    <div class="row ">
        <p class="col bold-600 text-center">ID</p>
        <p class="col bold-600 text-center">NOMBRE</p>
        <p class="col bold-600 text-center">PRECIO</p>
        <p class="col bold-600 text-center">DESCRIPCI&Oacute;N</p>
    </div>
    <div class="row">
        <p class="col text-center"><?= $data['id'] ?></p>
        <p class="col text-center"><?= $data['nombre'] ?></p>
        <p class="col text-center"><?= $data['precio'] ?></p>
        <p class="col text-center"><?= $data['descripcion'] ?></p>
    </div>

    <div class="row justify-content-around mt-5">
        <a href="index.php" class="btn w-25 col-4 bg-primary-blue white-font">Inicio</a>
        <button type="button" class="btn w-25 col-4 btn-warning white-font">Actualizar registro</button>
    </div>
</div>

<?php
    require_once('c://xampp/htdocs/mini-market/view/main/footer.php')
?>