<?php
require_once('shop-sidebar.php');
require_once('modelos/cnx.php');
require_once('modelos/Categoria.php');
?>



<?php
try {
    $cnx = new Cnx();
} catch (PDOException $e) {
    echo 'Error';
    exit;
}


$Categorias = Categoria::getCategoriasTech($cnx);



?>


<div class="col-lg-3 order-2 order-lg-1">
    <h5 class="text-uppercase mb-4">Categories</h5>
    <div class="py-2 px-4 bg-dark text-white mb-3">
        <strong class="small text-uppercase fw-bold">TEST &amp; TEST</strong>
    </div>
    <?php
    foreach ($Categorias as $cat) : ?>

        <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
            <li class="mb-2">
                <a class="reset-anchor" href="#!"><?php echo $cat->nombre ?></a>
            </li>

        </ul>

    <?php endforeach ?>
    <div class="py-2 px-4 bg-light mb-3">
        <strong class="small text-uppercase fw-bold">TEST &amp; TEST</strong>
    </div>
    <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
        <li class="mb-2">
            <a class="reset-anchor" href="#!"> <?php echo $cat->nombre ?></a>
        </li>

    </ul>

    <h6 class="text-uppercase mb-4">Price range</h6>
    <div class="price-range pt-4 mb-5">
        <div id="range"></div>
        <div class="row pt-2">
            <div class="col-6">
                <strong class="small fw-bold text-uppercase">From</strong>
            </div>
            <div class="col-6 text-end">
                <strong class="small fw-bold text-uppercase">To</strong>
            </div>
        </div>
    </div>

</div>