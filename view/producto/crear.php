<?php
    require_once('c://xampp/htdocs/mini-market/view/main/header.php')
?>

<form action="store.php" method="POST" class="w-50 mx-auto my-3 d-flex flex-column justify-content-center">
    <div class="mb-3">
        <label for="inpt-nombre" class="form-label">Nombre</label>
        <input require type="text" class="form-control" id="inpt-nombre" name="inpt-nombre" placeholder="Agua embotellada">
    </div>
    <div class="mb-3">
        <label for="inpt-precio" class="form-label">Precio</label>
        <input require type="number" class="form-control" id="inpt-precio" name="inpt-precio">
    </div>
    <div class="mb-3">
        <label for="txta-descripcion" class="form-label">Descripci&oacute;n</label>
        <textarea class="form-control" id="txta-descripcion" name="txta-descripcion" rows="2"></textarea>
    </div>

    <div class="row justify-content-around">
        <a href="index.php" class="btn col-4 bg-primary-blue white-font">Regresar</a>
        <button type="submit" class="btn col-4 bg-primary-blue white-font">Registrar</button>
    </div>
</form>

<?php
    require_once('c://xampp/htdocs/mini-market/view/main/footer.php')
?>