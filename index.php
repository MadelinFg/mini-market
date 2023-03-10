<?php
    require_once('c://xampp/htdocs/mini-market/view/main/header.php')
?>

<section>
    <div id="first__section-header" class="d-flex align-items-center">
        <h3 id="date" class="blue-font"><?php
            date_default_timezone_set('America/Mexico_City');
            echo date('l jS \of F Y');
        ?></h3>
        <button type="button" class="btn bg-primary-blue white-font">Registrar</button>
    </div>
</section>

<?php
    require_once('c://xampp/htdocs/mini-market/view/main/footer.php')
?>