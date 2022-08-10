<?php

require_once('ModeloPadre.php');
require_once('TipoUsuario.php');


class Usuario extends ModeloPadre
{

    public function __construct()
    {
        $fecha = date('Y-m-d H:i:s');
        parent::__construct(array(
            'id' => null,
            'nombre' => null,
            'email' => null,
            'contrasena' => null,
            'id_tipo_usuario' => null,
            'fecha_alta' => $fecha,
            'fecha_modificacion' => $fecha,
            'fecha_baja' => null
        ));
    }

    public function hashContrasena($contrasena)
    {
        $this->contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
    }

    public function validate($cnx)
    {
        $errores = array();
        //Validaciones.
        if (!$this->nombre) $errores['nombre'] = 'Ingresar un nombre';
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) $errores['email'] = 'Ingresar un correo electrónico válido';
        if (!$this->validateEmail($cnx)) $errores['email'] = 'El correo electrónico le pertenece a otra persona';
        if (!$this->contrasena) $errores['contrasena'] = 'Ingresar una contraseña.';
        //Devuelve la lista de errores.
        return $errores;
    }

    private function validateEmail($cnx)
    {
        if ($this->id) {
            //Verifica si el email ya le pertenece a otro usuario que no sea el mismo.
            $consulta = $cnx->prepare('
                SELECT COUNT(1)
                FROM usuarios
                WHERE email = :email
                AND id <> :id
            ');
            $consulta->bindValue(':id', $this->id);
        } else {
            //Verifica si el email ya le pertenece a otro usuario.
            $consulta = $cnx->prepare('
                SELECT COUNT(1)
                FROM usuarios
                WHERE email = :email
            ');
        }
        $consulta->bindValue(':email', $this->email);
        $consulta->execute();
        $cantidad = $consulta->fetchColumn();
        return $cantidad < 1;
    }

    public function save(Cnx $cnx)
    {
        if ($this->id) {
            $this->update($cnx);
        } else {
            $this->insert($cnx);
        }
    }

    private function insert(Cnx $cnx)
    {
        $fecha = date('Y-m-d H:i:s');
        $consulta = $cnx->prepare('
            INSERT INTO usuarios(nombre, email, contrasena, id_tipo_usuario, fecha_alta, fecha_modificacion)
            VALUES(:nombre, :email, :contrasena, :id_tipo_usuario, :fecha_alta, :fecha_modificacion)
        ');
        $consulta->bindValue(':nombre', $this->nombre);
        $consulta->bindValue(':email', $this->email);
        $consulta->bindValue(':contrasena', $this->contrasena);
        $consulta->bindValue(':id_tipo_usuario', TipoUsuario::COMPRADOR);
        $consulta->bindValue(':fecha_alta', $fecha);
        $consulta->bindValue(':fecha_modificacion', $fecha);
        $consulta->execute();
        $this->id = $cnx->lastInsertId();
    }

    private function update(Cnx $cnx)
    {
        $fecha = date('Y-m-d H:i:s');
        $consulta = $cnx->prepare('
            UPDATE usuarios SET 
                nombre = :nombre,
                email = :email,
                contrasena = :contrasena,
                fecha_modificacion = :fecha_modificacion
            WHERE id = :id
        ');
        $consulta->bindValue(':nombre', $this->nombre);
        $consulta->bindValue(':email', $this->email);
        $consulta->bindValue(':contrasena', $this->contrasena);
        $consulta->bindValue(':fecha_modificacion', $fecha);
        $consulta->bindValue(':id', $this->id);
        $consulta->execute();
    }

    public static function find(Cnx $cnx, int $id)
    {
        $consulta = $cnx->prepare('
            SELECT id, nombre, email, id_tipo_usuario, contrasena, fecha_alta, fecha_modificacion, fecha_baja
            FROM usuarios
            WHERE id = :id
        ');
        $consulta->bindValue(':id', $id);
        $consulta->execute();
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
        return $consulta->fetch();
    }

    public static function findByEmail(Cnx $cnx, string $email)
    {
        $consulta = $cnx->prepare('
            SELECT id, nombre, email, id_tipo_usuario, contrasena, fecha_alta, fecha_modificacion, fecha_baja
            FROM usuarios
            WHERE email = :email
        ');
        $consulta->bindValue(':email', $email);
        $consulta->execute();
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
        return $consulta->fetch();
    }

    public static function login(Cnx $cnx, $email, $contrasena)
    {
        $usuario = self::findByEmail($cnx, $email);
        if ($usuario and password_verify($contrasena, $usuario->contrasena)) {
            return $usuario;
        } else {
            return false;
        }
    }
}
