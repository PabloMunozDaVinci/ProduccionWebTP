<?php

 include_once('funciones.php');

foreach(obtenerfile('categorias.json')as $cat){
echo '<a href="listado.php?cat='.$cat->id.'" >'.$cat->nombre.'</a><br />'; 
// uso de la colección de objetos

} 



?>
