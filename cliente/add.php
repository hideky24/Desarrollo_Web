<?php
include_once('../config/config.php');
include('paciente.php');
if (isset($_POST) && !empty($_POST)){
    $p = new paciente();
    if ($_FILES['imagen']['name']!==''){
        $_POST['imagen']=saveImage($_FILES);

    }
    $save=$p->save($_POST);
    if ($save){
    $mensaje= '<div class="alert alert-danger"> Sesión registrada</div>';
    }else{ 
    $mensaje= '<div class="alert alert-danger"> Error al registrar!</div>';
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrar sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="../img/logo.webp"/>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
<?php include ('../menu.php')?>
<div class="container">
        <?php
        if(isset($error)){
            echo $error;
        }
        ?>
        <div>
<div><h2>Fincas e inmuebles en venta en Ubala Cundinamarca</h2></div>
<div class="fincas"><div><img src='../img/1.jpg' width='200' height='200'>
<p>Finca en venta <br>en la vereda san pedro <br>cuenta con casa de 6 habitaciones<br> con una extención de 2 hectarias<br> espectacular vista</p>
<a href="https://api.whatsapp.com/send?phone=573164092638&amp;text=hola,%20quiero%20informaci%c3%b3n%20sobre%20 la finca ubicada en san pedro">
    </a>
<input type="button" value="Comprar"></div>
<div><img src='../img/atena.jpg' width='200' height='200'>
<p>Venta de casa y negocio acreditado <br>cuenta con espectacular vista<br> en la vereda san isidro alto </p>
<a href="https://api.whatsapp.com/send?phone=573164092638&amp;text=hola,%20quiero%20informaci%c3%b3n%20sobre%20 la finca ubicada en san isidro alto">
<input type="button" value="Comprar">
</a>
</div>
<div><img src='../img/tranquilandia.jpg' width='200' height='200'>
<p>Venta de finca con casa de 8 habitaciones  <br>cuenta con espectacular vista<br>ubicada en la vereda san pablo </p>
 <a href="https://api.whatsapp.com/send?phone=573164092638&amp;text=hola,%20quiero%20informaci%c3%b3n%20sobre%20 la finca de la vereda Sanpablo"><input type="button"  value="Comprar" >
    </a>
</div>
</div>

        </div>
        <div class='formulario'>
        <h1 class="text-center mb-5"> ¿Quieres vender o comprar finca en ubalá Cundinamarca?</h1>
        <div class='parrafo'><p class="font-weight-bold"> Si estas interesa en uno de los inmmuebles que estan en nuestro sitio web !No dudes en darle comprar¡
        y si estas interesado en vender algun tipo de innmueble(Finca,casa,lote,negocio, etc,) diligencia el formulario, carga una foto
        de tu inmueble y agenda tu cita ya. Conoce, vive, y compra en Ubalá Cundinamarca el mejor municipio de Cundinamarca.</p>
        <h2 class="text-center mb-5"> Dejanos tus datos y carga una foto de tu inmueble </h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
<input type="text" name="nombres" id="nombres" placeholder="Nombre del Cliente" require class="form-control" />
                </div>
                <div class="col">
<input type="text" name="apellidos" id="apellidos" placeholder="Apellidos del Cliente" require class="form-control" />
                </div>
            </div>

        <div class="row mb-2">
        <div class="col">
    <input type="email" name="email" id="email" placeholder="Email del cliente" require class="form-control" />
    </div>
    <div class="col">
    <input type="text" name="celular" id="celular" placeholder="Numero celular del cliente" require class="form-control" />
    </div>
    </div> 
    <div class="row mb-2">
        <div class="col">
<textarea name="info" id="info" placeholder="Dejanos la información de tu inmueble" requiere class= "form-control"></textarea>
<div class="col">
            <input type="text" name="direccion" id="direccion" placeholder="Dirección del inmueble" require class="form-control" />
        </div>
        </div>
    </div>   
    <div class="row mb-2">
        <div class="col">
        <input type="datetime-local" name="fecha" id="fecha" require class="form-control" />
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
    </div>




    </div>
    <div class="col-12">
                <img src="../img/footer.jpg" alt="" class="img-fluid mx-auto d-block">
            </div> 
           
              <div class="card-group">
                <div class="card">
                    <a title="facebook" href="https://www.facebook.com/AlcaldiaUbala/"><img src="../img/facebook.png" class="card-img-top" alt="red social facebook" /></a>
            
                  <div class="card-body">
                    <h5 class="card-title">Facebook</h5>
                    <p class="card-text">Contactanos por facebook y obten una atención personalizada de nuestro municipio.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Mantente actualizado</small>
                  </div>
                </div>
                <div class="card">
                          <a title="instagram" href="http://www.google.com"><img src="../img/instagram.png" class="card-img-top" alt="red social instagram" /></a>
                  <div class="card-body">
                    <h5 class="card-title">instagram</h5>
                    <p class="card-text">Siguenos en instagram</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Mantente actualizado</small>
                  </div>
                </div>
                <div class="card">
              <a title="twitter" href="https://twitter.com/home"><img src="../img/twitter.png" class="card-img-top" alt="red social twitter" /></a>
                  <div class="card-body">
                    <h5 class="card-title">Twitter</h5>
                    <p class="card-text">Siguenos en twitter y obten de primera mano las ultimas noticias.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Mantente informado</small>
                  </div>
                </div>
              </div>




           
            

            

        </div>
        <a class='whatsapp' href="https://api.whatsapp.com/send?phone=573164092638&amp;text=hola,%20quiero%20informaci%c3%b3n%20sobre%20ubala Cundinamarca y sus servicios" 
        
    >
    Escríbenos ya!<br>
    click aquí<br>
    </a>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
</body>
</html>