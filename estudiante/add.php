<?php
include_once ('../config/config.php');
include('estudiante.php');

if ( isset($_POST) && !empty($_POST) ){
    $p = new estudiante();

    if ($_FILES['imagen']['name'] !==''){
        $_POST['imagen'] = saveImage($_FILES);
    }

    $save = $p->save($_POST);
    if ($save){
        $mensaje = '<div class="alert alert-success" > Sesión registrada </div>';
    }else{
        $mensaje = '<div class="alert alert-danger" > Error al registrar </div>';
    }

 }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UFT-8" />
        <title> Registrar sesión </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
    <header class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">KIDS FAMILY</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="../index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="../index.html#quienes-somos">Quienes Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="../iservicios.html">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.html#recursos">Recursos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./add.php">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
  </header>
        <div class="container" >
            <?php
            if(isset($mensaje)){
                echo $mensaje;
            }
            ?>
            <h2  class="text-center mb-2"> Registrar sesión </h2>
            <form method="POST" enctype="multipart/form-data" >

            <div class="row mb-2" >
             <div class="col" >
                <input type="text" name="nombres" id="nombres" placeholder="Nombres del estudiante" class="form-control" />
            </div>
            <div class="col"> 
                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos del estudiante" class="form-control" />
            </div>
                 </div>

            <div class="row mb-2" >
             <div class="col" >
                <input type="number" name="edad" id="edad" placeholder="Edad del estudiante" class="form-control" />
            </div>
            <div class="col"> 
                <input type="number" name="telefono" id="telefono" placeholder="Celular del estudiante" class="form-control" />
                </div>
                </div>
                <div class="row mb-2" >
            <div class="col"> 
                <input type="email" name="email" id="email" placeholder="Email del estudiante" class="form-control" />
                </div>
             <div class="col" >
                <input type="file" name="imagen" id="imagen" class="form-control" />
            </div>
        </div>
            
          
        <div class="col-12">
            <button class="btn btn-success"> Registrar </button>
            </div>
            </form>
        </div>


            <footer style="margin-top: 100px">
      <div class="redes-sociales" >
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
      </div>
      <p class="derechos-reservados">&copy; 2023 - Todos los derechos reservados</p>
    </footer>
    </body>
</html>
        