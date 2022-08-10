<?php
class Productos{
private $cnx;

function __construct($cnx){
$this->cnx=$cnx;
}

public function getProductos($filtro = array()){

$query="SELECT * FROM productos WHERE 1=1 ";

if(!empty($filtro['cat'])){
    $query .= ' AND categoria_id = '.$filtro['cat'];
    
}

if(!empty($filtro['marca'])){
    $query .= ' AND marca_id = '.$filtro['marca'];
}


/*$where=array();
if(!empty($filtro['cat'])){
$where[] = 'categoria_id = '.$filtro['cat'];
}

if(!empty($filtro['marca'])){
    $where[]=' marca_id = '.$filtro['marca'];
}

if(!empty($where)){
$query .=' WHERE '.implode('AND',$where);
}*/

return $this->cnx->query($query);

}
public function getProductosRandom(){

    return $this->con->query("SELECT * FROM productos ORDER BY rand() LIMIT 6");

}
}
