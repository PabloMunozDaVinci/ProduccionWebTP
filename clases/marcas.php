<?php
class Marcas{
private $con;

function __construct($con){
$this->con=$con;
}

function getMarcas(){
$query="SELECT * FROM marcas";
return $this->con->query($query);

}

}









?>