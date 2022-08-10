<?php

require_once('conf/config.php');
require_once('modelos/cnx.php');
require_once('modelos/Usuario.php');


try {
    $cnx = new Cnx();
} catch (PDOException $e) {

    echo ' Error';
    exit;
}

$usuario = new Usuario();
$usuario->nombre = 'pablo';
$usuario->email = 'pablo@gmail.com';
$usuario->hashContrasena('1234');


// verifico si hay errores 
$errores = $usuario->validate($cnx);


if (count($errores) == 0) {
    $usuario->save($cnx);
} else {
    echo '<pre' >
        var_dump($errores);
}


unset($cnx);
