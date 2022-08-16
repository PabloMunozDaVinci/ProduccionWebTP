<!DOCTYPE html>
<html lang="en">

<head>
    <title> Lista de productos </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require_once('_css.php') ?>
    <?php require_once('_js.php') ?>

</head>

<body>

    <?php require_once('_nav.php') ?>

    <div class="container">
        <h1 class="text-center"> Productos </h1>
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 10%;" scope="col"> Img </th>
                    <th style="width: 15%;" scope="col"> Nombre </th>
                    <th style="width: 25%;" scope="col"> Precio </th>
                    <th style="width: 25%;" scope="col"> Categoría </th>
                    <th style="width: 25%;" scope="col"> Acciones </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $pro) : ?>
                    <tr>
                        <td>
                            <?php if ($pro->path_editado) : ?>
                                <img style="max-width: 100%;" src="<?php echo BASE_URL . $pro->path_editado ?>" alt="">
                            <?php endif;  ?>
                        </td>
                        <td> <?php echo $pro->nombre ?> </td>
                        <td> $<?php echo number_format($pro->precio, 2, ',', '.') ?> </td>
                        <td> <?php echo $pro->nombre_categoria ?> </td>
                        <td>
                            <?php if ($pro->path_editado) : ?>
                                <a href="<?php echo BASE_URL ?>img_productos.php?ide=<?php echo $pro->id ?>" class="text text-primary"> Imagen </a>
                            <?php else : ?>
                                <a href="<?php echo BASE_URL ?>img_productos.php?ide=<?php echo $pro->id ?>" class="text text-primary"> Imagen </a>
                            <?php endif; ?>
                            |
                            <a href="<?php echo BASE_URL ?>modificar_producto.php?ide=<?php echo $pro->id ?>" class="text text-primary">Editar</a>
                            |
                            <a href="<?php echo BASE_URL ?>eliminar_producto.php?ide=<?php echo $pro->id ?>" class="text text-danger btn_eliminar_producto">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <nav aria-label="...">
            <ul class="pagination">
                <?php if ($paginas['anterior']) : ?>
                    <li class="page-item">
                        <a class="page-link" href="?pag=<?php echo $paginas['primera'] ?>" tabindex="-1"> Primera </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="?pag=<?php echo $paginas['anterior'] ?>"> <?php echo $paginas['anterior'] ?> </a>
                    </li>
                <?php endif ?>
                <li class="page-item active">
                    <span class="page-link disabled" href="#"><?php echo $paginas['actual'] ?></span>
                </li>
                <?php if ($paginas['siguiente']) : ?>
                    <li class="page-item">
                        <a class="page-link" href="?pag=<?php echo $paginas['siguiente'] ?>"> <?php echo $paginas['siguiente'] ?> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="?pag=<?php echo $paginas['ultima'] ?>"> Última </a>
                    </li>
                <?php endif ?>
            </ul>
        </nav>

    </div>

    <?php require_once('_footer.php') ?>

    <input type="hidden" id="msj" value="<?php echo $msj ?>" />

    <script src="<?php echo BASE_URL ?>js/lista_productos.js"></script>

</body>

</html>