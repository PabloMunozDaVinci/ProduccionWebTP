<?php

require_once('_autoload.php');
require_once('modelos/Cnx.php');
require_once('modelos/Usuario.php');
require_once('helpers/helper_input.php');

if (Auth::validate()) {
    Auth::destroy();
}

try {
    $cnx = new Cnx();
} catch (PDOException $e) {
    echo 'Error';
    exit;
}

$error = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email =test_input( $_POST['email'] ?? null);
    $contrasena =test_input(  $_POST['contrasena'] ?? null);

    $usuario = Usuario::login($cnx, $email, $contrasena);

    if ($usuario) {
        Auth::create($usuario);
        header('Location: index.php');
    } else {
        $error = 'Los datos ingresados son incorrectos';
    }
}

require_once('iniciar_sesion.php');

unset($cnx);
