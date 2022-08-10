<?php

session_start();

class Auth
{

    public static function create(Usuario $usuario)
    {
        $_SESSION['auth'] = array(
            'id' => $usuario->id,
            'nombre' => $usuario->nombre,
            'id_tipo_usuario' => $usuario->id_tipo_usuario
        );
    }

    public static function validate()
    {
        return $_SESSION['auth'] ?? false;
    }

    public static function getNombre()
    {
        return (self::validate()) ? $_SESSION['auth']['nombre'] : null;
    }

    public static function isAdministrador()
    {
        return (self::validate() and $_SESSION['auth']['id_tipo_usuario'] == TipoUsuario::ADMINISTRADOR);
    }

    public static function destroy()
    {
        unset($_SESSION['auth']);
    }
}
