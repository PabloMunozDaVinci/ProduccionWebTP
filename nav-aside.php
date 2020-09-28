<ASIDE class="col-lg-3 col-md-3 col-sm-12 fixed-rahit">
				
				 <div class="card">
                 <article class="filter-group">
                     <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside1" data-abc="true" aria-expanded="false" class="collapsed"> <i class="icon-control fa fa-chevron-down"></i>
                             <h6 class="title">Categories </h6>
       </a> </header>
						 
 <div class="filter-content collapse" id="collapse_aside1" style="">
<div class="card-body">
<ul class="list-menu">
							 
 <?php
							 require_once('clases/categorias.php');
 $Cat=new Categorias($con);
							 							 		 
 foreach($Cat->getCategorias() as $cat){
							 
 ?>

		
		
 <li><a href="producto.php?cat=<?php echo $cat['id']?>&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:''?>" data-abc="true"><?php echo $cat['nombre']?></a></li>
								 
		 <?php } ?> 								 
<li><a href="producto.php?cat=&mar=<?php echo isset($_GET['mar'])? $_GET['mar']:''?>" data-abc="true">todos</a></li>                                
								 
           </ul>
      </div>
   </div>
					 
 </article>
				 
	<article class="filter-group">
      <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside1" data-abc="true" aria-expanded="false" class="collapsed"> <i class="icon-control fa fa-chevron-down"></i>
           <h6 class="title">Marcas</h6>
                </a> </header>
   <div class="filter-content collapse" id="collapse_aside1" style="">
      <div class="card-body">
        <ul class="list-menu">
							 
 <?php
		 
require_once('clases/marcas.php');
						$Marcas = new Marcas($con);	 			
							 
 foreach($Marcas->getMarcas() as $marca){?>
								
<li><a href="producto.php?marca=<?php echo $marca['id']?>&cat=<?php echo isset($_GET['cat'])? $_GET['cat']:''?>" data-abc="true"> <?php echo $marca['nombre']?> </a></li> 
								 
<?php } ?>
							 
    <li><a href="producto.php?marca=&cat=<?php echo isset($_GET['cat'])? $_GET['cat']:''?>" data-abc="true">todos</a></li> 												 
                               
 </ul>
  </div>
   </div>
					 
</article>
				 			 
				 


             </div>
				
				
             </ASIDE>
