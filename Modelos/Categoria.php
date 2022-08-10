<?php
require_once('cnx.php');
require_once('ModeloPadre.php');

class Categoria extends ModeloPadre
{

    public function __construct()
    {

        parent::__construct(array(
            'id' => null,
            'nombre' => null,
            'id_padre' => null,

        ));
    }
    public static function all(Cnx $cnx)
    {
        $consulta = $cnx->prepare('
            SELECT id, nombre 
            FROM categorias
            ORDER BY nombre
        ');
        $consulta->execute();
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Categoria');
        return $consulta->fetchAll();
    }

    public static  function getCategorias(Cnx $cnx)
    {


        $cnx = new Cnx();
        $consulta = $cnx->prepare(
            'SELECT *
                FROM categorias
                WHERE 1 = 1 
                
                '
        );
        $consulta->execute();
        return  $consulta->fetchAll(PDO::FETCH_OBJ);
    }

    public static  function getCategoriasTech(Cnx $cnx)
    {


        $cnx = new Cnx();
        $consulta = $cnx->prepare(
            'SELECT *
                FROM categorias
                WHERE id=1
                
                '
        );
        $consulta->execute();
        return  $consulta->fetchAll(PDO::FETCH_OBJ);
    }
}
