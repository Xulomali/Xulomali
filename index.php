<?php 

const GUARDAR = 'Guardar';
const VER_DATOS = 'Ver datos';
$datos = [];
//Inicializo las variables que contienen los valores de los inputs a null en caso de que no se haya enviado el formulario aún
$nombre = $_POST['nombre'] ?? null;
$email = $_POST['email'] ?? null;
$mensaje = $_POST['mensaje'] ?? null;

//Si el metodo de la solicitud es un post es decir si se envio el formulario y la operacion tiene algun valor
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['operacion'])){
  //Si la operacion es la de guardar.....
  if($_POST['operacion'] === GUARDAR){
      //Abro el archivo para escribir
      $file = @fopen("pedidos.txt", "a");        
      //Guardo el arreglo codificado a json
      fwrite($file, "
Nombre: $nombre
Email: $email
				Visto (0) Realizado (0)
	  
	  $mensaje
=====================================================
	  ".PHP_EOL);
      //Cierro el archivo
      fclose($file);
      //Si quieres limpiar el formulario despues de guardar los datos descomentarea estas 2 lineas
      //$nombre = null;
      //$apellido = null;
  } else {
      //Si la operacion es la de Cargar o ver y el archivo existe
      if(file_exists('pedidos.txt')){
          //Almaceno el contenido completo del archivo en esta variable
          $content = trim(file_get_contents('archivo.txt'), PHP_EOL);
          //Obtengo todas las entradas por lineas del archivo
          $lineas = explode(PHP_EOL, $content);
          foreach($lineas as $linea){
              list($name,$e, $m) = explode(',', $linea);
              $datos[] = ['nombre' => $name, 'email' => $e, 'mensaje' => $m];
          }
      }
  }
}

$body = '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Xulomali Desings</title>
<!--

Template 2097 Pop

https://www.tooplate.com/view/2097-pop

-->
    <!-- load CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                  <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">                <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>                       <!-- http://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                               <!-- Templatemo style -->



    <script src="js/inicio.js"></script>
	<script src="js/reenvio.js"></script>
	<script src="js/confirmacion.js"></script>
    
</head>

<body>
    <div id="tm-bg"></div>
    <div id="tm-wrap">
        <div class="tm-main-content">
            <div class="container tm-site-header-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                        <div class="tm-site-header">
                            <h1 class="mb-4">Xulomali_HD</h1>
                            <img src="img/underline.png" class="img-fluid mb-4">
                            <p>Diseñador grafico empezando a conocer el mundo, apasionante del "Streaming"</p>        
                        </div>                        
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="content">
                            <div class="grid">
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Inicio</span>
                                            <div class="product__bg"></div>        
                                        </div>                                    
                                        <div class="product__description">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <h2 class="tm-page-title">Inicio</h2>        
                                                </div>
                                            </div>                                        
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <img src="img/welcome-1.jpg" class="img-fluid mb-3">
                                                    <p>You are allowed to download, modify and use this template for your commercial or business websites. </p>
                                                    <p>Please tell your friends about <a rel="nofollow" href="https://fb.com/tooplate" target="_parent">Tooplate</a>. That will be very helpful for us. Thank you.</p>    
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <p>You are NOT allowed to put this template ZIP file for a download purpose on any template collection website.</p>
                                                    <p>If you have any kind of question or comment, please feel free to <a rel="nofollow" href="https://www.tooplate.com/contact" target="_parent">contact us</a>. You are welcome.</p>
                                                    <img src="img/welcome-2.jpg" class="img-fluid">
                                                </div>                                        
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item" id="team-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-users fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Herramientas</span>
                                            <div class="product__bg"></div>            
                                        </div>                                     
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Background of Our Team</h2>        
                                                    </div>
                                                </div>
                                                <div class="row tm-reverse-sm">
                                                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                                        <p class="mb-4">Vestibulum aliquet, arcu accumsan lobortis bibendum, justo velit efficitur lorem, at pulvinar mi justo nec lacus. Nullam et libero aliquet, luctus nunc sit amet, tincidunt ligula. Sed finibus ante sed tortor cursus, nec malesuada lectus interdum.</p>
                                                        <p class="mb-4">Sed ex turpis, vulputate in efficitur id, lobortis eget nibh. Pellentesque maximus ipsum eget velit imperdiet sodales. Suspendisse in blandit mi.</p>
                                                        <p class="mb-5">Pellentesque finibus felis risus, ut malesuada felis viverra at. Quisque accumsan in mi non hendrerit.</p>
                                                        <a href="#" class="btn tm-btn-gray">Read More</a>        
                                                    </div>                                                
                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-lg-0 mb-sm-4 mb-4">
                                                        <img src="img/team.jpg" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-handshake fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Mis trabajos</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                                 
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Mis Trabajos</h2>        
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <p>Aliquam interdum, nisl sed faucibus tempor, massa velit laoreet ipsum, et faucibus sapien magna at enim. Suspendisse a dictum tortor, vel rhoncus libero. Integer at lacus velit. Nullam dapibus venenatis placerat.</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="p-sm-4 p-2 tm-img-container">
                                                            <div class="tm-img-slider" id="tmImgSlider">
                                                              <a href="https://www.twitch.tv/languitoxic" class="tm-slider-img-link"><img src="img/emotes/languitoxic/Temazo.png" alt="Image 1" class="img-fluid tm-slider-img"></a>
                                                              <a href="https://www.twitch.tv/languitoxic" class="tm-slider-img-link"><img src="img/emotes/languitoxic/de-locosv2.png" alt="Image 2" class="img-fluid tm-slider-img"></a>
                                                              <a href="#" class="tm-slider-img-link"><img src="img/emotes/luzdeluna_93/emote6.png" alt="Image 3" class="img-fluid tm-slider-img"></a>
                                                              <a href="#" class="tm-slider-img-link"><img src="img/emotes/erkappaman/logo_blanco_y_negro.png" alt="Image 4" class="img-fluid tm-slider-img"></a>
                                                              <a href="#" class="tm-slider-img-link"><img src="img/emotes/ttvquetedisparo/sarjentojefe.png" alt="Image 6" class="img-fluid tm-slider-img"></a>
                                                            </div>
															
															<br><br>
															<form action="galery.html">
																<input type="submit" class="btn btn-primary tm-btn-submit" value="Galeria" />
															</form>
															
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>       
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-comments fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Contacto</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                              
                                        <div class="product__description">
                                            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Contactame</h2>        
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <p>Si quieres contactar conmigo para algún overlay o emotes para Twitch puedes hacerlo mediante este formulario o hablándome por las redes sociales</p>
														<a rel="nofollow" href="https://www.twitch.tv/xulomali_hd" class="btn tm-btn-purple"><img src="img/icons/twitch-icon.png" width="16" height="20" >  Twitch</a>
														<a> </a>
														<a rel="nofollow" href="https://discord.gg/nbyt3BnXNT" class="btn tm-btn-light-blue"><img src="img/icons/discord-icon.png" width="20" height="15" >  Discord</a>
														<a> </a>
														<a rel="nofollow" href="https://twitter.com/xulomali_hd" class="btn tm-btn-blue"><img src="img/icons/twitter-icon.png" width="20" height="20" >  Twitter</a>
														
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <form autocomplete="off" method="post" class="contact-form" name=contacto>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                  <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre"  required/>
                                                                </div>
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                  <input type="email" id="email" name="email" class="form-control" placeholder="Email"  required/>
                                                                </div>
                                                            </div>                                                        
                                                            <div class="form-group">
                                                              <textarea id="mensaje" name="mensaje" class="form-control" rows="9" placeholder="Mensaje" required></textarea>
                                                            </div>
                                                            <button type="submit" onclick="confirmar()" value="'.GUARDAR.'" name="operacion" class="btn btn-primary tm-btn-submit">Enviar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>                       
                    </div>
                </div>                
            </div>
            <footer>
                <p class="small tm-copyright-text">Hecha con <span>❤</span> por Xulomali</p>
            </footer>
        </div> <!-- .tm-main-content -->  
    </div>
    <!-- load JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>         <!-- https://jquery.com/ -->    
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->  
    <script src="js/anime.min.js"></script>                     <!-- http://animejs.com/ -->
    <script src="js/main.js"></script>  
    <script src="js/pie.js"></script>             

</body>
</html>
';

$body .= '
    </body>
    </html>';
//Renderizo el cuerpo de la página
echo $body;