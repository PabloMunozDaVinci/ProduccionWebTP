<?php
// funcion para lectura de json para 

function obtenerdato($file){

$archivo=fopen($file, 'r');

$contenido=fread($archivo, filesize($file));

fclose($archivo);

return json_decode($contenido);
	
	
}


?>

<?php
// funcion para lectura de json para y convertido en array asociativo 
// si no tiene el "true" me devuelve objetos

function obtenerfile($file){

$cjson=fopen($file, 'r');

$contenido=fread($ajson, filesize($file));

fclose($ajson);

$carrays= json_decode($cjson, true) ;


	
}






?>