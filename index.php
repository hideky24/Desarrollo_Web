<?php
include('config/config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBALÁ CUNDINAMARCA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/app.css">
    <link rel="icon" type="image/jpg" href="img/logo.webp"/>
</head>
<body>
<?php include ('menu.php')?>
<div class="container">
    <h1 class="text-center">Ubalá Cundinamarca, Región del guavio</h1>
</div>
<div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-6 p-5">
                    <p class="text-white" style="letter-spacing: 20px"> <b>BIENVEIDOS A</b></p>
                    <h1 class="text-right"><span class="display-3"> UBALÁ </span> <br> CUNDINAMARCA</h1>
                    <p class="row justify-content-center align-items-center mt-5">
                        <a href="https://www.youtube.com/watch?v=jSWVLtWJ1bE" class="btn-ubala"><span>AVENTURAR</span></a>
                    </p>
                </div>
                <div class="col-sm-6">
                    <img src="img/parroquia.jpg" alt="" class="img-fluid mx-auto d-block">
                </div>                
            </div>
            <div class="card" style="background: white url(editables/bg-verde.png) bottom right no-repeat;">
                <div class="row justify-content-center align-items-center">
                    <div class="col-sm-7 border-right">
                        <div class="p-5">
                        <h2 class="text-center">BIENVENIDOS</h2> 
                        <p class="text-justify">Ubalá cundinamarca municipio ubicado a 126 km al oriente de la capital del pais, en la región del guavio municipio que cuenta con una geografia unica en Colombia
                            ya que se encuentra dividido en dos zonas (zona A y zona B) la zona A se encuentra ubicada a una altura de 1949 m.s.n.m
                            y la zona B cuenta con una altura de 570 m.s.n.m por esto en el mismo municipio contamos con una variedad de paisajes y distintos climas, dejanos tus datos 
                            si quieres saber mas de nuestro municipio.
                        </p> 
                        <h3>INFO</h3>
                        <form action="">
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Nombre">  
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Celular">  
                                </div>
                            </div>
                            <div class="row form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="E-mail">  
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Dirección">  
                                    </div>
                            </div>
                            <div class="row form-group">
                                    <div class="col-sm-12">
                                        <textarea class="form-control" placeholder="Mensaje..."> </textarea> 
                                    </div>                                   
                            </div>
                            <input type="submit" class="btn btn-success mx-auto d-block" value="ENVIAR">

                        </form>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <img src="img/miradorsp.jpg" alt="" class="img-fluid mx-auto d-block">
                    </div>                
                </div> 
            </div> 
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/1.jpg" class="d-block w-100" alt="foto embalse el guavio">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Ubalá Cundinamarca</h5>
                      <p>Embalse del guavio vereda san pedro</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./img/2.jpg" class="d-block w-100" alt="FOTO hotel fonda ente cerros">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Ubalá Cundinamarca</h5>
                      <p>Fonda Entre Cerros, Vereda San pablo.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./img/3.jpg" class="d-block w-100" alt="foto glammping san isidro">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Ubalá Cundinamarca</h5>
                      <p>Glammping vereda san isidro bajo</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <h2 class='text-center'>Como llegar a Ubalá Cundinamarca </h2>
            <!-- MAP -->
            <div class="col-12 p-0 mt-5 mb-5">
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7952.279718320304!2d-73.53129704999999!3d4.745738949999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3ffc42d05f1827%3A0x6bfaf1dfc7248ba6!2sUbal%C3%A1%2C%20Cundinamarca!5e0!3m2!1ses-419!2sco!4v1657994380169!5m2!1ses-419!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- MAP FIN -->

            <div class="col-12">
                <p class="h4 text-center text-warning">Heiner Duvan Acosta  <br>
                        3164092638 <br>
                        hideky1377@gmail.com</p>
            </div>

            <div class="col-12">
                <img src="./img/footer.jpg" alt="" class="img-fluid mx-auto d-block">
            </div> 
           
              <div class="card-group">
                <div class="card">
                    <a title="facebook" href="https://www.facebook.com/AlcaldiaUbala/"><img src="./img/facebook.png" class="card-img-top" alt="red social facebook" /></a>
            
                  <div class="card-body">
                    <h5 class="card-title">Facebook</h5>
                    <p class="card-text">Contactanos por facebook y obten una atención personalizada de nuestro municipio.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Mantente actualizado</small>
                  </div>
                </div>
                <div class="card">
                          <a title="instagram" href="http://www.google.com"><img src="./img/instagram.png" class="card-img-top" alt="red social instagram" /></a>
                  <div class="card-body">
                    <h5 class="card-title">instagram</h5>
                    <p class="card-text">Siguenos en instagram</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Mantente actualizado</small>
                  </div>
                </div>
                <div class="card">
              <a title="twitter" href="https://twitter.com/home"><img src="./img/twitter.png" class="card-img-top" alt="red social twitter" /></a>
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