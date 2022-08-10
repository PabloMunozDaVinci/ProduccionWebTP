<?php

require_once('ModeloPadre.php');

class TipoUsuario extends ModeloPadre
{

    const ADMINISTRADOR = 1;
    const COMPRADOR = 2;

    public function __construct()
    {
        parent::__construct(array(
            'id' => null,
            'nombre' => null
        ));
    }
}
