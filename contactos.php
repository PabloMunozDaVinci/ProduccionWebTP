<?php
$result="";
if (isset ($_POST['submit'])){
  require 'PhpMailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->Host='smtp.gmail.com';
  $mail->Port=25;
  $mail->SMTPAuth=true;
  $mail->SMTPSecure='tls';
  $mail->Username='programacionweb2grupo8@gmail.com';
  $mail->Password='Hola1234';

  $mail->setFrom($_POST['email'],$_POST['nombre']);
  $mail->addAddress('programacionweb2grupo8@gmail.com');
  $mail->addReplyTo($_POST['email'],$_POST['nombre']);

  $mail->isHTML(true);
  $mail->Subject='enviado por'.$_POST['nombre'];
  $mail->Body='<h1 align=center>Nombre: '.$_POST['nombre'].'<br>Email: '.$_POST['email'].'<br>Mensaje: '
  .$_POST['mensaje'].'</h1>';


if (!$mail->send()){
$result="Algo esta mal, intentelo ed nuevo por favor";
}
else{
  $result="Gracias".$_POST['nombre']."por contactarnos, espera la respuesta protno!";
}

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Viajes TriPanel contactos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="plugins/animate/animate.css">



<link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
<link rel="manifest" href="/icons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/icons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body class="bgid">

   <!--                             Header                                    -->

<?php include_once ('header.php');
?>

 <!--                             Header                                    -->

 <main>
 <div class="container-fluid">

 <section class="uno">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 ">

						<img src="imagenes/oficina.jpg" class="d-block w-100" alt="adsda" height="400">
					</div>

				</div>

	</section>

	<section class="uno">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 ">


<h2 class="d-flex justify-content-center mt-1 h3 rti" > Contactos  </h2>
<div class="container-fluid d-flex justify-content-center  wow fadeInLeft" data-wow-duration="1.4s">
  <div class="row">
   <div class="bgcm mt-2  col-12 rt"> <a class="boton1"> <img src="imagenes/call.svg" width="32" alt="">  444-123451-9999 </a> </div> </div> </div>



    <div class="container-fluid d-flex justify-content-center mt-3 rt  wow fadeInLeft" data-wow-duration="1.8s">
  <div class="row">
   <div class=" col-12 rt">
       <a href="https://www.youtube.com/" class="btn boton1  " target="_blank"><img src="imagenes/youtube.svg" width="36" alt="imagen de youtube">  Youtube</a>

    </div> </div> </div>
      <div class="container-fluid d-flex justify-content-center mt-3  wow fadeInLeft" data-wow-duration="2.2s">
  <div class="row">
   <div class=" col-12">
      <a href="https://www.whatsapp.com/" class="btn  boton1 "  target="_blank"> <img src="imagenes/whatsapp.svg" alt="imagen de whatsapp" width="36">  Whatsapp</a>

    </div> </div> </div>
      <div class="container-fluid d-flex justify-content-center mt-3 wow fadeInLeft" data-wow-duration="2.6s" >
  <div class="row">
   <div class=" col-12">
       <a href="https://twitter.com/?lang=es" class="btn boton1 " target="_blank"><img src="imagenes/twitter.svg" width="36" alt="Foto de twitter">Twitter</a>

    </div> </div> </div>
      <div class="container-fluid d-flex justify-content-center  mt-3 wow fadeInLeft" data-wow-duration="3s" >
  <div class="row">
   <div class=" col-12">
      <a href="https://www.instagram.com/" class="btn boton1" target="_blank"><img src="imagenes/instagram%20(1).svg" alt="foto de Instagram" width="36"> Instagram</a>

    </div> </div> </div>
      <div class="container-fluid d-flex justify-content-center  mt-3 wow fadeInLeft" data-wow-duration="3.4s" >
  <div class="row">
   <div class=" col-12">
      <a href="https://www.google.com/intl/es-419/gmail/about/" class="btn bgcm boton1" target="_blank"><img src="imagenes/gmail%20(1).svg" alt="foto de Gmail" width="36" > Gmail: Tripanel@gmail.com</a>

    </div> </div> </div>
    <h3 class="h4 mt-4 d-flex justify-content-center rti"> Dejanos tus sugerencias</h3>
    <div class="row   m-4 justify-content-center">

            <div class="col-sm-4">
                <form action="" method="post">
                <label for="nombre">Nombre y apellido</label>
      <input id="nombre" name="nombre" type="text" maxlength="50" data-lenght="50" required />
                    <div class="form-group  ">
                        <label for="email">Mail</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Nombre@Ejemplo.com" required>
                    </div>

                    <div class="form-group ">
                        <label for="exampleFormControlTextarea1 rt">Texto</label>
                        <textarea class="form-control" name="mensaje"id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>


                    <div class="form-group ">
                       <button type="submit" name="submit" class="btn boton1 rt">Enviar</button>
                  <h5 class="notifiCorrecto">  <?= $result;?> </h5>
                  </div>
                </form>
            </div>

        </div>



						</div>

				</div>

	</section>




 </div>




            <!--------------------------------FOOTER------------------------------------>>

            <?php include('footer.php');
    ?>
 <!--------------------------------FOOTER------------------------------------>>
    </main>







 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="plugins/wow/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>

</body>
</html>