<?php
include('../config/config.php');
include('estudiante.php');

$p = new estudiante();
$dp = mysqli_fetch_object($p->getOne($_GET['id']));

if (isset($_POST) && !empty($_POST)){
    $_POST['imagen'] = $dp->imagen;
    if ( $_FILES['imagen']['name'] !== '' ){
        $_POST['imagen'] = saveImage($_FILES);
    }
    $update = $p->update($_POST);
    if ($update){
        $mensaje = '<div class="alert alert-success" role="alert" > Sesión  modificada con exito. </div>';
    }else{
        $mensaje = '<div class="alert alert-danger" role="alert" > Error! </div>';
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UFT-8" />
        <title> Modificar sesión </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php include('../menu.php') ?>
        <div class="container" >
            <?php
            if(isset($mensaje)){
                echo $mensaje;
            }
            ?>
            <h2  class="text-center mb-2"> Modificar sesión </h2>
            <form method="POST" enctype="multipart/form-data" >   
<div class="row mb-2" >
 <div class="col" >
    <input type="text" name="nombres" id="nombres" value="<?= $dp->nombres ?>" placeholder="Nombres del estudiante" class="form-control" />
    <input type="hidden" name="id" id="id" value="<?= $dp->id ?>" placeholder="Nombres del estudiante" class="form-control" />
</div>
<div class="col"> 
    <input type="text" name="apellidos" id="apellidos" value="<?= $dp->apellidos ?>"  placeholder="Apellidos del estudiante" class="form-control" />
</div>
</div>

<div class="row mb-2" >
 <div class="col" >
    <input type="number" name="edad" id="edad" value="<?= $dp->edad ?>"  placeholder="Edad del estudiante" class="form-control" />
</div>
<div class="col"> 
    <input type="number" name="telefono" id="telefono" value="<?= $dp->telefono ?>"  placeholder="Celular del estudiante" class="form-control" />
    </div>
    </div>
    <div class="row mb-2" >
<div class="col"> 
    <input type="email" name="email" id="email" value="<?= $dp->email ?>"  placeholder="Email del estudiante" class="form-control" />
    </div>
 <div class="col" >
    <input type="file" name="imagen" id="imagen"  class="form-control" />
</div>
</div>
<div class="col-12">
<button class="btn btn-success"> Modificar </button>
</div>
</form>
    </body>
</html>