<?php
include('../config/config.php');
include('paciente.php');
$p = new paciente();
$dp = mysqli_fetch_object($p->getOne($_GET['id']));  
$date = new DateTime($dp->fecha);

if (isset($_POST) && !empty($_POST)){
     $_POST['imagen'] = $dp->imagen;
     if ($_FILES['imagen']['name'] !== ''){
      $_POST['imagen'] = saveImage($_FILES);
    }
    $update = $p->update($_POST);
    if ($update){
        $error = '<div class="alert alert-success" role="alert">cliente modificado correctamente</div>';
    }else{
        $error = '<div class="alert alert-danger" role="alert" > Error al modificar el cliente </div>';
    }
}

?>
<!DOCTYPE html> 
<html>

<head>
    <meta charset="UTF-8" />
    <title> Modificar cliente </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    
    <?php include('menuAdmin.php') ?>
    <div class="container">
        <?php 
        if  (isset($error)){
            echo $error;
        }
        ?>
        <h2 class="text-center mb-5"> Modificar cliente </h2>
        <form method="POST" enctype="multipar/form-data">
            <div class="row mb-2">
                <div class="col">
                    <input type="text" name="nombres" id="nombres" placeholder="Nombre del cliente" require class="form-control" value="<?= $dp->nombres ?>" />
                    <input type="hidden" name="id" id="id" value="<?= $data->id ?>" />
                </div>
                <div class="col">
                    <input type="text" name="apellidos" id="apellidos" placeholder="Apellido del cliente" require class="form-control" value="<?= $dp->apellidos ?>" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <input type="email" name="email" id="email" placeholder="Email del cliente" require class="form-control" value="<?= $dp->email ?>" />
                 </div>
                 <div class="col"> 
                 <input type="text" name="celular" id="celular" placeholder="Celular del cliente" require class="form-control" value="<?= $dp->celular ?>" />        
                
                </div>
              </div>
            
              <div class="row mb-2">
              <div class="col">
              <textarea name="info" id="info" placeholder="info del cliente" requiere class= "form-control"><?= $dp->info?></textarea>
              
             </div>
          </div>
              <div class="row mb-2">
        <div class="col">
        <input type="text" name="direccion" id="direccion" place holder="Duracion de la sesión" require class="form-control" value="<?= $dp->direccion ?>" />
        </div>
        </div>
    </div>   
    <div class="row mb-2">
        <div class="col">
        <input type="datetime-local" name="fecha" id="fecha" require class="form-control" value="<?= $date->format('Y-m-d') ?>" />
        </div>
        
    </div>   

    <div class="row mb-2">
        <div class="col">
        <input type="file" name="imagen" id="imagen" class="form-control" />
        </div>
        </div>
    
    <button class="btn btn-success"> Registrar </button>
        </form>

    </div>


 


</body>


</html>