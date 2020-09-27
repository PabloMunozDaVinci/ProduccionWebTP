<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>TriPanel</title>
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">

    <?php
if(isset($_POST['comentar'])){
    $data = $_POST;
    unset($data['comentar']);
    $fecha = new DateTime();
    $indexComentario = $fecha->format('YmdHisu');

    $data['fecha']=date('d/m/Y H:i:s');
    $indexComentario = date('YmdHisu');

    if (file_exists('json/comentarios.json')){
$comentarioJson = file_get_contents('json/comentarios.json');
$comentarioArray =json_decode($comentarioJson,true);
}else{
    $comentarioArray = array();
}
$comentarioArray[$indexComentario] = $data;
$fp=fopen('json/comentarios.json','w');
fwrite($fp,json_encode($comentarioArray));
fclose($fp);

}


?>



</head>

<body class="bgid">
 <!--                             Header                                    -->


<div class="container">
    <a class="navbar-brand" href="#">Navbar</a>


<?php include_once ('header.php');

?>
    </div>

 <!--                             Header                                    -->
    <!--<a href="index.html "><img src="imagenes/LogoTriPanel%20(1).ico" width="86" alt="" > </a> </!-->

    <main>
					<div class="col-lg-12 col-md-12 col-sm-12 ">

						<h2 class="mt-5 d-flex justify-content-center rti">  Producto </h2>

					</div>

<?php
         $fp= fopen('json/productos.json', 'r');
         $iarrays= json_decode (fread($fp ,filesize ('json/productos.json')),true);

         fclose($fp);


            foreach($iarrays as $prod){
               if($prod['id'] == $_GET['prod']){
                    break;
               }
           }



?>




                    <div class="super_container">
    <header class="header" style="display: none;">
        <div class="header_main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix">
                                        <div class="custom_dropdown">
                                            <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">All Categories</span> <i class="fas fa-chevron-down"></i>
                                                <ul class="custom_list clc">
                                                    <li><a class="clc" href="#">All Categories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="single_product">
        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
            <div class="row">
            <div class="col-lg-6">
                            <div>
                            <img src="imagenes/<?php echo $prod['id'] ?>/<?php echo $prod['img'] ?>" class="d-block w-100" alt="...">
                            </div>
                </div>
                <div class="col-lg-6">
                    <div class="product_description">
                        <div class="product_name"><h3><?php echo $prod['nombre']?></h3></div>
                        <div> <span class="product_price"><h4><?php echo $prod['precio']?></h4></span></div>
                        <hr class="singleline">
                        <div> <span class="product_info"><h6>Descripcion <?php echo $prod['descripcion']?>
                        <section>

           <div class="container listadodivcards">

               <h3 class="comentariosconicono"><img src="imagenes/iconocomentarios.png" alt="Icono comentarios" width="65" height="65"> COMENTARIOS</h3>







               <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <article>

                           <form action="#" method="post">
                               <fieldset>

                                   <div class="row">

                                       <div class="row">
                                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               Nombre: <input type="Nombre" name="Nombre" required><br>
                                           </div>
                                       </div>

                                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            Email <input type="email"  name="email" placeholder="email" >
                                       </div>

                                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                           <br>

                                           Descripcion<textarea rows="5" cols="40" name="descripcion"></textarea>
                                       </div>


<select name="rankeo" >
<option value="1">*</option>
<option value="2">**</option>
<option value="3">***</option>
<option value="4">****</option>
<option value="5">*****</option>


</select>
<?php
if(isset($_POST['comentar'])){



}


?>

                                   <button type="submit" value="Enviar" name="comentar">Comentar</button>
                                   <input type="hidden" name="id"  value="<?php echo $_GET['prod'] ?>">





                               </fieldset>
                           </form>
                       </article>
                   </div>
               </div>

           </div>


           <div class="container">
               <div class="row">
                   <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                       <article class="card cardcomentarios">

                       </article>
                   </div>






               </div>
           </div>
       </section>

                        <hr class="singleline">
                        <div class="order_info d-flex flex-row">
                            <form action="#">
                        </div>
                        <div class="row">
                                </div>
                            </div>
                            <div class="col-xs-6"> <button type="button" class="btn btn-primary shop-button">Add to Cart</button> <button type="button" class="btn btn-success shop-button">Buy Now</button>

                            <div class="span6 relative">

 <div class="absoluteBlk">
         <h4>Comentarios</h4>
         <?php

             if(file_exists('json/comentarios.json')){
                 $comentarioJson = file_get_contents('json/comentarios.json');
                 $comentarioArray = json_decode($comentarioJson,true );
                 krsort($comentarioArray);
                 $cantidad = 0;

                 foreach($comentarioArray as $comentario){
                     if($comentario['id'] == $_GET['prod']){
                         $cantidad++;
                         if($cantidad == 11) break;
                         ?>
                         
                         <h5>
                        <article class="card cardcomentarios col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">     
                        <p class="fechacomentarios"><?php echo $comentario['fecha']; ?></p>
                     </article>
                     <article class="card cardcomentarios col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                             <p class="descripcioncomentarios"><?php echo $comentario['descripcion']; ?></p>
                     </article>
                     <article class="card cardcomentarios col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                     <p class="emailcomentarios"><?php echo $comentario['email']; ?></p>
                            </h5>
                 <?php }
                 }
             }
         ?>

 </div>
</div>



                           
                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            </div>
           </div>



    </main>

	 <!-------------------FOOTER------------------------------------>

	    <?php include('footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="plugins/wow/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>




</body>

</html>