<header>
<?php 
require_once ('inc/db_connect.php');
require_once('clases/productos.php');
try {
    $con= new PDO('mysql:host='.$hostname.';dbname='.$database.';port='.$puerto, $username, $password);
print "conexion exitosa!";

}
 catch (PDOException $e) {
    print "Error!: ".$e->getMessage();
    die();
}
?>

<nav class=" navbar navbar-expand-lg navbar-light bg-light fixed-top" role="navigation">
           
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="producto.php">Productos</a>
                    </li>
                   
					<li class="nav-item">
                        <a class="nav-link" href="contactos.php" tabindex="-1" aria-disabled="true">Contactenos</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        
    </header>