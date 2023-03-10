<?php
    require_once('c://xampp/htdocs/mini-market/view/main/header.php');
    require_once('c://xampp/htdocs/mini-market/controller/productoControlador.php');

    $obj = new productoControlador();
    $rows = $obj->select();
?>

<div class="row my-3 mx-5 justify-content-end">
    <a href="/mini-market/view/producto/crear.php" class="btn col-3 bg-primary-blue white-font">Registrar producto</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th>
                        <a href="ver.php?id=<?= $row[0]?>" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                        <a href="editar.php?id=<?= $row[0]?>" class="btn btn-success"><i class="bi bi-arrow-counterclockwise"></i></a>
                        
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?=$row[0]?>"><i class="bi bi-trash3"></i></a>

                        <!-- Modal -->
                        <div class="modal fade" id="id<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Esta acción no se puede deshacer
                                </div>
                                <div class="modal-footer">
                                    <a href="eliminar.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                    
                                </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
    require_once('c://xampp/htdocs/mini-market/view/main/footer.php');
?>