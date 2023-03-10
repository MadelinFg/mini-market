<?php
    require_once('c://xampp/htdocs/mini-market/view/main/header.php');
    require_once('c://xampp/htdocs/mini-market/controller/productoControlador.php');

    $obj = new productoControlador();
    $data = $obj->ver($_GET['id']);
?>

<h3 class="text-center blue-font mt-3">Actualizar registro</h3>
<form action="actualizar.php" method="POST" class="w-50 mx-auto my-3 d-flex flex-column justify-content-center">
    <div class="mb-3">
        <label for="inpt-nombre" class="form-label">ID</label>
        <input readonly type="text" class="form-control" id="inpt-id" name="inpt-id" value="<?= $data['id']?>">
    </div>
    <div class="mb-3">
        <label for="inpt-nombre" class="form-label">Nombre</label>
        <input require type="text" class="form-control" id="inpt-nombre" name="inpt-nombre" value="<?= $data['nombre']?>">
    </div>
    <div class="mb-3">
        <label for="inpt-precio" class="form-label">Precio</label>
        <input require type="number" class="form-control" id="inpt-precio" name="inpt-precio" value="<?= $data['precio']?>">
    </div>
    <div class="mb-3">
        <label for="txta-descripcion" class="form-label">Descripci&oacute;n</label>
        <textarea class="form-control" id="txta-descripcion" name="txta-descripcion" rows="2"><?= $data['descripcion']?></textarea>
    </div>

    <div class="row justify-content-around">
        <a href="ver.php?id=<?= $data['id']?>" class="btn col-4 bg-primary-blue white-font">Regresar</a>
        <input type="submit" class="btn col-4 bg-primary-blue white-font" value="Actualizar">
    </div>
</form>

<?php
    require_once('c://xampp/htdocs/mini-market/view/main/footer.php')
?>