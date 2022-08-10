<?php
require_once('cnx.php');
require_once('ModeloPadre.php');

class Producto extends ModeloPadre
{

    public function __construct()
    {

        parent::__construct(array(
            'id' => null,
            'nombre' => null,
            'descripcion' => null,
            'categoria_id' => null,
            'marca_id' => null,
            'precio' => null,
            'activo' => null,
            'destacado' => null
        ));
    }

    public function validate()
    {
        $errores = array();
        //Validaciones.
        if (!$this->nombre) $errores['nombre'] = 'Ingresar un nombre';
        if (!$this->descripcion) $errores['descripcion'] = 'Ingresar una descripción';
        if (!filter_var($this->precio, FILTER_VALIDATE_FLOAT)) $errores['precio'] = 'Ingresar un precio';
        if (!$this->id_categoria) $errores['id_categoria'] = 'Ingresar una categoría';
        return $errores;
    }

    public function save(Cnx $cnx)
    {

        $validaciones = $this->validate();

        if (count($validaciones) == 0) {
            if ($this->id) {
                $this->update($cnx);
            } else {
                $this->insert($cnx);
            }
        }

        return $validaciones;
    }

    private function insert(Cnx $cnx)
    {
        $fecha = date('Y-m-d H:i:s');
        $consulta = $cnx->prepare('
            INSERT INTO productos(nombre, descripcion, id_categoria, precio, fecha_alta, fecha_modificacion)
            VALUES(:nombre, :descripcion, :id_categoria, :precio, :fecha_alta, :fecha_modificacion)
        ');
        $consulta->bindValue(':nombre', $this->nombre);
        $consulta->bindValue(':descripcion', $this->descripcion);
        $consulta->bindValue(':id_categoria', $this->id_categoria);
        $consulta->bindValue(':precio', $this->precio);
        $consulta->bindValue(':fecha_alta', $fecha);
        $consulta->bindValue(':fecha_modificacion', $fecha);
        $consulta->execute();
        $this->id = $cnx->lastInsertId();
    }

    public static  function getProductos(Cnx $cnx)
    {


        $cnx = new Cnx();
        $consulta = $cnx->prepare(
            'SELECT *
                FROM productos
                WHERE 1 = 1 
                LIMIT 9
                '
        );
        $consulta->execute();
        return  $consulta->fetchAll(PDO::FETCH_OBJ);
    }

    public static  function getProductosArr(Cnx $cnx)
    {


        $cnx = new Cnx();
        $consulta = $cnx->prepare(
            'SELECT *
                FROM productos
                WHERE 1 = 1 
                LIMIT 9
                '
        );
        $consulta->execute();
        return  $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    private function update(Cnx $cnx)
    {
        $fecha = date('Y-m-d H:i:s');
        $consulta = $cnx->prepare('
            UPDATE productos SET 
                nombre = :nombre,
                descripcion = :descripcion,
                id_categoria = :id_categoria,
                precio = :precio,
                path_original = :path_original,
                path_editado = :path_editado,
                fecha_modificacion = :fecha_modificacion
            WHERE id = :id
        ');
        $consulta->bindValue(':nombre', $this->nombre);
        $consulta->bindValue(':descripcion', $this->descripcion);
        $consulta->bindValue(':id_categoria', $this->id_categoria);
        $consulta->bindValue(':precio', $this->precio);
        $consulta->bindValue(':path_original', $this->path_original);
        $consulta->bindValue(':path_editado', $this->path_editado);
        $consulta->bindValue(':fecha_modificacion', $fecha);
        $consulta->bindValue(':id', $this->id);
        $consulta->execute();
    }

    public function delete(Cnx $cnx)
    {
        $fecha = date('Y-m-d H:i:s');
        $consulta = $cnx->prepare('
            UPDATE productos SET
                fecha_baja = :fecha_baja
            WHERE id = :id
        ');
        $consulta->bindValue(':fecha_baja', $fecha);
        $consulta->bindValue(':id', $this->id);
        $consulta->execute();
    }
}
