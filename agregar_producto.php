<?php

require_once('_autoload.php');
require_once('modelos/Cnx.php');
require_once('modelos/Categoria.php');
require_once('modelos/Producto.php');
require_once('helpers/helper_input.php');


if (!Auth::isAdministrador()) {
    header('Location: login.php');
}

try {
    $cnx = new Cnx();
} catch (PDOException $e) {
    echo 'Error';
    exit;
}

$producto = new Producto();

$errores = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $producto->nombre = test_input($_POST['nombre'] ?? null);
    $producto->descripcion =  test_input($_POST['descripcion'] ?? null);
    $producto->precio = test_input($_POST['precio'] ?? null);
    $producto->id_categoria = test_input($_POST['id_categoria'] ?? null);

    $errores = $producto->save($cnx);

    if (!$errores) {
        header('Location: productos.php?msj=add');
    }
}

$action = 'agregar_producto.php';
$categorias = Categoria::all($cnx);

require_once('./vistas/guardar_producto.php');

unset($cnx);
