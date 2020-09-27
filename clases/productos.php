<?php
class Productos{
private $con;

function __construct($con){
$this->con=$con;
}

function getProductos(){
$query="SELECT * FROM productos";
return $this->con->query($query);

}

}









?>