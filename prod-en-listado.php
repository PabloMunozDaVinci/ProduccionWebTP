
<div class="col-lg-9 col-md-9 col-sm-12">

<div class="row">


	 <?php
require "comentario.php";

foreach ($Productos->getProductos() as $prod){
	?>



<!--$fp= fopen('json/productos.json', 'r');
$ijson= fread($fp, filesize('json/productos.json'));
fclose($fp);
$iarrays= json_decode($ijson, true);

foreach($iarrays as $prod){

	$flagPrint=true;

	if(!empty ($_GET['marca'])and $flagPrint){
		if($_GET['marca']== $prod['marca']){

			$flagPrint=true;
		}else{
			$flagPrint=false;
		}
	}
	if(!empty ($_GET['cat']) and $flagPrint){
		if($_GET['cat']== $prod['categoria']){

			$flagPrint=true;
		}else{
			$flagPrint=false;
		}
	}

	if($flagPrint){
	?>-->

	  <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="well well-small ">
			 <div class="thumbnail">
			 <a href="producto-comprar.php?prod=<?php echo $prod['id']?>"> <img class="" src="productos/<?php echo $prod['id']?>/img_0_thumb.png" alt="cartel de garantia" width="100%"></a>
			  <div class="caption">
	                <p class="card-text text-center"><?php echo $prod ['nombre']?></p>
					<h6 class="text-center"><?php echo $prod ['precio']?> </h6>
					<a href="#" class="btn btn-primary">Comprar</a>

                   </div>
                </div>
          </div>
		  </div>
	<?php 
	}?>

	 </div>
	 </div>

