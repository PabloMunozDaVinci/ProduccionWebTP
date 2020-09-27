<?php



$producto = array(
	1=> array(
	'id'=>1,
	'nombre'=>'Notebook Hp Core I3 1005g1 10ma 15.6 Ssd 128gb 4gb Win10',
	'descripcion' => 'Características adecuadas, precio adecuado esta notebook HP presenta la combinación perfecta de diseño, confiabilidad y recursos.',
    'precio' => '$85.999',
    'cantidad' => '10',
    'destacado' => true,
    'img'=>"im1.png",
	'categoria'=>1,
	'marca'=>1,
	'modelo'=> 'tx2021'
	
	),
	
	2=>array(
	'id'=> 2,
    'nombre' =>'Joystick Sony Dualshock 4 steel black PS4' ,
    'descripcion' => 'Este joystick  esta equipado para que computadoras con windows 10. ' ,
    'precio' =>'$7.999',
    'cantidad' => '2',
    'destacado' => true,
    'img' =>'im2.png',
	'categoria'=> 2,
	'marca'=>2,
	'modelo'=> 'Gamepad'
	),
	
	3=> array(
	
	'id'=>3,
	'nombre' =>'Smart Tv Led Android 65p Cdh-le654ksmart20 Hitachi' ,
    'descripcion' => 'Smart Tv Led ideal para el hogar, el estudio y el entretenimiento.',
    'precio' =>'$69.999' ,
    'cantidad' => '1',
    'destacado' => true,
    'img' =>"im3.png",
	'categoria'=>3,
	'marca'=>3
	
	),
	
	4=>array(
	'id'=>4,
	'nombre' =>'Perfume BENSIMON SMART 80ml EAU DE PARFUM' ,
    'descripcion' => 'BENSIMONP PARFUM l1a mejor frangancia.',
    'precio' =>'$ 1.399' ,
    'cantidad' => '1',
    'destacado' => true,
    'img' =>"im4.png",
	'categoria'=> 4,
	'marca'=>4
	),
	
	5=> array(
	'id'=>5,
	'nombre'=> 'Tostadora Black & Decker Tr19610-Negro',
	'decripcion' => 'Tostadora Black & Decker es ideal para el hogar.',
    'precio' =>'$3.999' ,
    'cantidad' => '1',
    'destacado' => true,
	'img' =>"im5.png",
	'categoria'=> 2,
	'marca'=>2
	),

	6=> array(
	'id'=>6,
	'nombre'=> 'Computadora de escritorio HP 280 I3 8100',
	'decripcion' => 'Características adecuadas, precio adecuado esta Pc HP presenta la combinación perfecta de diseño, confiabilidad y recursos.',
	'precio' =>'$56.300,00' ,
	'cantidad' => '1',
	'destacado' => true,
	'img' =>"im6.jpg",
	'categoria'=> 1,
	'marca'=>1	
	),	

	7=> array(
	'id'=>7,
	'nombre'=> 'Placa de Video Nvidia RTX 2080',
	'decripcion' => 'Placa de Video Nvidia RTX 2080 ideal para jugar.',
	'precio' =>'$66.000' ,
	'cantidad' => '1',
	'destacado' => true,
	'img' =>"im7.jpg",
	'categoria'=> 1,
	'marca'=>6		
	),

	8=> array(
	'id'=>8,
	'nombre'=> 'Joystick Xbox One',
	'decripcion' => 'Joystick Xbox One ideal para tu consola.',
	'precio' =>'$15.999' ,
	'cantidad' => '1',
	'destacado' => true,
	'img' =>"im8.jpg",
	'categoria'=> 2,
	'marca'=>7	
	),

	9=> array(
	'id'=>9,
	'nombre'=> 'Consola PlayStation 5',
	'decripcion' => 'la traemos antes que nadie.',
	'precio' =>'$80.000' ,
	'cantidad' => '1',
	'destacado' => true,
	'img' =>"im9.jpg",
	'categoria'=> 2,
	'marca'=> 2		
	),

	10=> array(
	'id'=>10,
	'nombre'=> 'Parlante UE WonderBoom',
	'decripcion' => 'Parlante UE WonderBoom ideal para la pileta.',
	'precio' =>'$3.999' ,
	'cantidad' => '1',
	'destacado' => true,
	'img' =>"im10.jpg",
	'categoria'=> 3,
	'marca'=> 8	
	),

	11=> array(
	'id'=>11,
	'nombre'=> 'Sony Alpha 7s Mark 2',
	'decripcion' => 'La mejor camara para el mejor profesional.',
	'precio' =>'$150.000' ,
	'cantidad' => '1',
	'destacado' => true,
	'img' =>"im11.jpg",
	'categoria'=> 3,
	'marca'=> 2	
	),

	12=> array(
	'id'=>12,
	'nombre'=> 'Perfume Calvin Klein',
	'decripcion' => 'El mejor olor.',
	'precio' =>'$5.999' ,
	'cantidad' => '1',
	'destacado' => true,
	'img' =>"im12.jpg",
	'categoria'=> 4,
	'marca'=> 9	
	),

	13=> array(
	'id'=>13,
	'nombre'=> 'Rimel MAC',
	'decripcion' => 'El mejor',
	'precio' =>'$3.999' ,
	'cantidad' => '1',
	'destacado' => true,
	'img' =>"im13.jpg",
	'categoria'=> 4,
	'marca'=> 10		
	),

	14=> array(
	'id'=>14,
	'nombre'=> 'Pava Electrica Philips',
	'decripcion' => 'El agua mas caliente',
	'precio' =>'$8.999' ,
	'cantidad' => '1',
	'destacado' => true,
	'img' =>"im14.jpg",
	'categoria'=> 5,
	'marca'=> 11	
	),

	15=> array(
	'id'=>15,
	'nombre'=> 'Pava Electrica Black and Decker',
	'decripcion' => 'Pava Electrica Black & Decker es ideal para calentar agua.',
	'precio' =>'$3.999' ,
	'cantidad' => '1',
	'destacado' => true,
	'img' =>"im15.jpg",
	'categoria'=> 5,
	'marca'=> 5	
	),
	
);


//echo "ESTO ES ARRAY DE PRODUCTOS <br /n>";
//echo'<pre>';var_dump($producto);echo'<pre/>';
//echo'<br/n>';
//foreach($producto as $indice=>$value){
//if(is_array($value)){
//echo $indice.':<ul>';
//foreach($value as $d){
//echo '<li>'.$d.'</li>'; 
//}
//echo'</ul>';
//	}else{
//	echo $indice. ':'. $value.'<br/n';
//}
//}
//echo 'ESTO ES EL JSON PRODUCTO <br/n>';

echo json_encode($producto).'<br/n>';

//echo'-------------------------------';

//echo '<br/n>  ESTO ES FIN DEL JSON PRODUCTO ';

// se debera realizarn un json para cada arrays

$marca=array(

    1=> array( 
	'id'=> 1,
    'nombre' => 'HP' ),
	  2=> array( 
	'id'=> 2,
    'nombre' => 'SONY' ),
	  3=> array( 
	'id'=> 3,
    'nombre' => 'Hitachi' ),
	  4=> array( 
	'id'=> 4,
    'nombre' => 'Bensimon' ),
	  5=> array( 
	'id'=> 5,
	'nombre' => 'Black and Decker' ),
	  6=> array( 
	'id'=> 6,
	'nombre' => 'NVidia' ),
	  7=> array( 
	'id'=> 7,
	'nombre' => 'XBox' ),
	  8=> array( 
	'id'=> 8,
	'nombre' => 'UE' ),
	  9=> array( 
	'id'=> 9,
	'nombre' => 'Calvin Klein' ),
	  10=> array( 
	'id'=> 10,
	'nombre' => 'MAC' ),
	  11=> array( 
	'id'=> 11,
	'nombre' => 'Philips' )
	 
    
);

//echo "ESTO ES EL ARRAY DE MARCAS";
//echo'<pre>';var_dump($marca);echo'<pre/>';

//echo "ESTO ES EL JSON DE MARCAS <br/n>";

json_encode($marca);

//echo'-------------------------------';


$categoria=array(
    1=> array(
	 'id'=> 1,
	 'nombre'=> 'Computacion',	
	),
	
	   2=> array(
	 'id'=> 2,
	 'nombre'=> 'Consola y Video juegos',	
	),
	  3=> array(
	 'id'=> 3,
	 'nombre'=> 'TV, Audio y Foto',	
	),
	
	4=> array(
	 'id'=> 4,
	 'nombre'=> 'Perfume, Cosmetica y Belleza',	
	),
	
	5=> array(
	 'id'=> 5,
	 'nombre'=> 'Electrodomesticos',	
	),
	
);

//echo "ESTO ES ELJSON DE CATEGORIAS";

//echo'<pre/>';var_dump($categoria);echo'<pre/>';

json_encode($categoria);

//echo'-------------------------------';

$comentarios=array(
	202005231022=>array(
	'id'=>202005231022,			//AMDHMS
	'emeil'=> 'dantejujuy@gmail.com',
	'descripcion'=>'el producto es el mejor',
	'reck'=> 5,
	'producto'=>1,
	'fecha'=> '05/06/2020  14:30',
		
	),
	
	);

echo '<br/n>';
//echo "ESTO ES EL JSON DE COMENTARIOS";

//echo'<pre/>';var_dump($comentarios);echo'<pre/>';

echo'<br/n>';


json_encode($comentarios);
?>








