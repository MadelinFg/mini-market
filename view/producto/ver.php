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
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary col-4 btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Eliminar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Esta acción no se puede deshacer
            </div>
            <div class="modal-footer">
                <a href="eliminar.php?id=<?= $data['id'] ?>" type="button" class="btn btn-danger">Eliminar</a>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php
    require_once('c://xampp/htdocs/mini-market/view/main/footer.php')
?>