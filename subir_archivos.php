<!--  pregunto si esta seteado en la variable FILES ,la cual esta para el almacenamiento de archivos , si esta el value "archivo"
y a su vez si ese archivo no tiene el valor de error ,
todo esto para saber si el archivo se envio correctamente 
-->


<?php
$error = null;

if (isset($_FILES['archivo']) and $_FILES['archivo']['error'] == 0) {

    //esta funcion me devuelve informacion sobre el archivo que subo para hacer validaciones de extensiones 

    $info = pathinfo($_FILES['archivo']['name']);
    $extension = $info['extension']; //extension del archivo
    $nombre_archivo = $info['filename']; //nombre del archivo sin extension

    $time = time();


    //extensiones permitidas
    $extensiones_permitidas = array('jpg', 'png', 'gif');

    //valido la extension
    if (in_array($extension, $extensiones_permitidas)) {



        $origen = $_FILES['archivo']['tmp_name'];



        //Para evitar que las imagenes se pisen cuando alguien guarde una imagen con el mismo nombre varias veces agrego el factor Time que siempre se actualiza 


        $destino = "archivos_subidos/{$nombre_archivo}_{$time}.{$extension}";
        //funcion de php recibe el archivo y a donde lo quiero mover 
        //por defecto se guardan los archivos en la locacion temporal de tmp_name
        move_uploaded_file($origen, $destino);
    } else {
        $error = 'la extension es incorrecta';
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1> Subida de archivos </h1>

        <?php if ($error) : ?>
            <div class="alert alert-danger"> <?php echo $error ?> </div>
        <?php endif ?>

        <!--  siempre agregar  "multipart/form-data" para que los ficheros se envien al servidor -->

        <form action="subir_archivos.php" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="archivo"> Archivo </label>
                <input type="file" class="form-control-file" name="archivo" id="archivo">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>