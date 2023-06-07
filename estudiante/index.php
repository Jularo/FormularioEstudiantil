<?php
  include_once('../config/config.php');
  include('estudiante.php');

  $p = new estudiante();
  $data = $p->getAll();

  if ( isset($_GET['id']) && !empty($_GET['id']) ){
    $remove = $p->delete($_GET['id']);
    if ($remove){
      header('Location: '.ROOT.'/estudiante/index.php');
    }else{
      $mensaje = '<div class="alert alert-danger" role="alert" > Error al eliminar </div>';
    }
  }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UFT-8" />
        <title> Lista de sesiones </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php include('../menu.php') ?>
        <div class ="container" >
            <h2 class="text-center mb-2" > lista </h2>
            <div class="row" >
                <?php
                while( $pt = mysqli_fetch_object($data) ){
                  echo "<div class='col-6'>";
                  echo "<div class='border border-info p-2'>";
                      echo "<h5> <img src='".ROOT."/images/$pt->imagen' width='50' height='50' /> $pt->nombres $pt->apellidos </h5>";
                      echo " <div class='text-center'> ";
                        echo "<a class='btn btn-success' href='".ROOT."/estudiante/edit.php?id=$pt->id' > Modificar </a> - <a class='btn btn-danger' href='".ROOT."/estudiante/index.php?id=$pt->id' > Eliminar </a>";
                      echo " </div> ";
                    echo " </div>";
                  echo "</div>";
                }    
            ?>
            </div>
        </div>
    </body>
</html>