<!DOCTYPE html>
<?php 
require_once 'includes/database.php';
?>
<div><input type="text"  style="display: none" value="<?php $promo=$_GET['promo']?>"></div>
<?php




$consulta = "SELECT * FROM planes";
$planes =mysqli_query($conectar, $consulta);


$consulp="SELECT * FROM promos";
$promos=mysqli_query($conectar, $consulp);

while($fil2=mysqli_fetch_array($promos)){

if($promo == $fil2['codigo']){
$decon = $fil2['porcentaje'];

}

}; 
              
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Styles Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer felis neque, suscipit eget dolor quis, accumsan imperdiet elit. Praesent quis mauris eu quam malesuada auctor. Etiam vitae ante sapien. Sed mauris dui, varius non tempor in, semper fringilla ipsum. Phasellus nec purus enim. Nulla eget fringilla mi, id iaculis ante.">
    <meta name="author" content="">
    <link rel="icon" href="img/fav.png">

  <title>MoneySAFE - Index</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="estilos.css">
    <link href="css/style.css" rel="stylesheet">
  
  <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


  <!-- =======================================================
      INICIO DE INDEX
  ======================================================= -->
</head>

<body>

  <!--==========================
  HEADER
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/MS-Logo.png" width="150" height="50"  alt="" title="" ></img></a>
        <!-- Uncomment below if you prefer to use a text logo 
        <h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">

        <ul class="nav-menu">
          <li class="menu-active"><a href="#carouselFull">Início</a></li>
          <li><a href="#about">Acerca de Nosotros</a></li>
          <li><a href="#services">Productos</a></li>
          <li><a href="#team">Equipo</a></li>
          <li><a href="#contact">Contacto</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    SECCION HERO (CARRUSEL)
  ============================-->
    <div id="carouselFull" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
           <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselIndicators" data-slide-to="1"></li>
           <li data-target="#carouselIndicators" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
           <div class="carousel-item active">
               <img class="d-block" src="img/s1.jpg" alt="First slide">
               <div class="carousel-caption d-md-block">
                   <h3>Buscas un sistema para administrar tus gastos?</h3>
                   <p>!MoneySafe es un sistema creado para administrar cualquier tipo de gasto!</p>
               </div>
           </div>
           <div class="carousel-item">
               <img class="d-block" src="img/s2.jpg" alt="Second slide">
               <div class="carousel-caption d-md-block">
                   <h3>Bienvenidos</h3>
                   <p>!El éxito ocurre cuando tus sueños son más grandes que tus excusas.!</p>
               </div>
           </div>
           <div class="carousel-item">
               <img class="d-block" src="img/s3.jpg" alt="Third slide">
               <div class="carousel-caption d-md-block">
                   <h3>!Te ayudamos a ahorrar mejor!</h3>
                   <p>!Una de las razones para elegirnos es sencillo. MoneySafe es adapatable, facil de usar y accesible para aquellas personas que tenga el deseo de ahorrar.!</p>
               </div>
           </div>
       </div>
       <a class="carousel-control-prev" href="#carouselFull" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselFull" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
       </a>
   </div>

    <!--==========================
      SECCION ACERCA DE NOSOTROS
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Un equipo fuerte con una sólida formación.</h2>
            <p>
              Decidí­mos Triunfar es el lema que nos ha acompañado durante mucho tiempo, en todo lo que estamos haciendo en nuestra vida, tanto a nivel personal como profesional. Desde el día que tomamos esta frase como lema, todo empezó a cambiar en la vida. Solo una actitud positiva ante todos los retos que como adulto hemos tenido que enfrentar ha hecho posible salir adelante en forma exitosa. Te invito a que también hagas tuyo este lema y triunfes en todos los retos que se presenten en tu vida.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Calidad - Precio</a></h4>
              <p class="description">Nos esforzamos en crear sistemas altamente capaces de realizar las tareas solicitadas por nuestros clientes, sin precios extremadamente disparados.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Diseños Intuitivos</a></h4>
              <p class="description">Todo programa se crea cuidadosamente, insertando diseños y estructuras para un facil uso, sin dejar a un lado el desempeño profesional. </p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Resultados inmediatos</a></h4>
              <p class="description">Podra notar la efectividad de nuestros programas en su negocio mas rapido de lo que se imagina. Puede dejar todo en nuestras manos, nosotros haremos lo mejor para usted.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      SECCION SERVICIOS
    ============================-->
<section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Productos</h3>
          <p class="section-description">Descubre nuestra variedad de productos para amenizar tu día a día</p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
              <h4 class="title"><a href="">Cañones</a></h4>
              <p class="description">Nos decidimos a desarrollar un sistema con el cuál podrás llevar un control sobre los apartados de Cañones, este proyecto está hecho para todo el público, pero en específico a las escuelas y empresas que cuentan con estos equipos..</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
              <h4 class="title"><a href="">Dámda</a></h4>
              <p class="description">A veces se nos complica el ahorro de dinero y se nos es muy difícil buscar una manera para hacerlo, por lo que ofrecemos este gran sistema con el cuál tu podrás organizar tus propias tandas entre familiares o amigos, tú decides la duración y monto. "Tandeando tu futuro".</p>
            </div>
          </div>
         <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
              <h4 class="title"><a href="">Pagos</a></h4>
              <p class="description">Podras realisar pagos de diferentes diligencias, gracias a su facil uso quedaras enamorado de el.</p>
            </div>
          </div>-->
          

      </div>
    </section><!-- #services -->

    <!--==========================
      SECCION PROMOS
    ============================-->
    <div id="pricing" class="section pricing-section">
      <div class="container">
        <div class="section-header">         
          <h2 class="section-title">Paquetes y Promociones</h2>
            <p class="section-description">Contamos con distintos paquetes y promociones para cubrir tus necesidades</p>
        </div>

        <div class="row pricing-tables">
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <div class="icon">
                  <i class="lni-rocket"></i>
                </div>
                <h2>Trial</h2>
                <ul>
                  <li>Prueba todas las funciones de nuestro sistema durante ¡15 dias!</li>

                </ul>

              </div>

              <div class="price">FREE<span>/mo</span></div>

            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table pricing-active">
              <div class="pricing-details">
                <div class="icon">
                  <i class="lni-drop"></i>
                </div>
                <h2>Basico</h2>
                <ul>
                  <li>7 Gastos por mes</li>
                  <li>3 Ingresos por mes </li>
                  <li>5 Categorias diferentes</li>
                  <li>!Cuida tu economia¡</li>

                </ul>
                
              </div>
              
               <div class="price">
               <?php                
               if (empty($decon) ) {
                  $PrecioF=300;
                  ?>
                  $<?php echo$PrecioF ?><span>/mo</span>
                  <?php
                }

                else{

                  ?>
                  <strike>$300<span>/mo</span></strike> <br>
                  <?php
                  $PrecioF=300 * ((100-$decon)/100);

                  ?>$<?php echo$PrecioF?><span>/mo</span>
                <?php
                }
                ?>
                </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <div class="icon">
                  <i class="lni-briefcase"></i>
                </div>
                <h2>Premium</h2>
                <ul>
                  <li>Registros Ilimitados de gastos</li>
                  <li>Ingresos ilimitados </li>
                  <li>Categorias ilimitadas</li>
                  <li>!Cuida tu economia¡</li>

                </ul>
                
              </div>

              <div class="price">
               <?php                
               if (empty($decon) ) {
                  $PrecioF=600;
                  ?>
                  $<?php echo$PrecioF ?><span>/mo</span>
                  <?php
                }

                else{

                  ?>
                  <strike>$600<span>/mo</span></strike> <br>
                  <?php
                  $PrecioF=600 * ((100-$decon)/100);

                  ?>$<?php echo$PrecioF?><span>/mo</span>
                <?php
                }
                ?>
                </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Pricing Table Section -->

          <!--popup-->
          <div class="contenedor">
            <button class="btn-abrir-popup" id="btn-abrir-popup">Comprar</button>

            <div class="overlay" id="overlay">
              <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa fa-times"></i></a>
                  <h3>SUSCRIBETE</h3>
                  <h4>y forma parte de esta gran familia</h4>
                    <form action="Vplanes.php" method="POST">
                     <div class="contenedor-inputs">
                      <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                      <input type="email" id="email" name="email" placeholder="Correo">
                      <input type="password" id="password" name="password" placeholder="Contraseña">
                      <select name="plan" id="plan">
                        <option value="0">Seleccione un plan</option>
                        <?php
                        while($fila = mysqli_fetch_array($planes)){
                        ?>

                        <option value="<?php echo $fila['id_plan'] ?>"> <?php echo $fila['nombre_plan'] ?></option>

                        <?php 
                          }
                         ?> 

                      </select>
                      </div>
                      <input type="submit" class="btn-submit" value="Suscribirse">
                    </form>
              </div>
            </div>

          </div>
          <!--fin popup-->

    <!--==========================
    SECCION CODIGO PROMOS
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
          <form action="vpromo.php" method="post">
            <h3 class="cta-title">Promociones</h3>
            <p class="cta-text"> Ingresa tu codigo de promocion para obtener Grandes Beneficios </p>
          </div>

          <div class="col-lg-3 cta-btn-container text-center">
           <input type="submit" class="cta-btn align-middle" value="validar">
          </div>
          <div>
          <input type="text" id="promo" name="promo" placeholder="Codigo">

          

          </div>
          </form>
        </div>

      </div>
    </section><!-- #seccion codigo promoss -->

    <!--==========================
      SECCION EQUIPO
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Equípo</h3>
          <p class="section-description">Contamos con un equipo altamente especializado detrás del desarrollo de cada sistema.</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-1.jpg" alt=""></div>
              <h4>Rubén Téllez</h4>
              <span>Diseñador Web</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-2.jpg" alt=""></div>
              <h4>Ojeda Hernández</h4>
              <span>Desarrollador BackEnd</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <h4>Carlos Maldonado</h4>
              <span>Socio Ejecutivo</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>  
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <h4>Moises Caamal</h4>
              <span>Programador de BD</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      SECCION CONTÁCTO
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contácto</h3>
          <p class="section-description">En MoneySAFE, queremos escucharte. Si necesitas mas información, no dudes en ponerte en contácto con nosotros.</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.8758113633426!2d-86.84963468461771!3d21.157339988751218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2b89869a6fc9%3A0x398517ec43739ce7!2sUNID%20Campus%20Canc%C3%BAn!5e0!3m2!1ses-419!2smx!4v1573170132704!5m2!1ses-419!2smx"></object>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Avenida Rodrigo Gómez Manzana 9<br>Lote 1-15, 38, 77507 Cancún, Q.R.</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p><a href=unid.edu.mx@hotmail.com>unid.edu.mx@hotmail.com</a></p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p><a href="tel:889-46-03">998-889-9520</a></p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Porfavor ingrese su nombre" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" data-rule="email" data-msg="Porfavor ingrese un E-Mail Valido" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Porfavor ingrese un asunto al correo" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Porfavor ingrese su mensaje" placeholder="Mensaje"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    SECCION FOOTER
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <p>&copy; 2019 - Todos los Derechos Reservados </p>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

             </div>
        </div>
    </div>

    </div>
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <!-- Scrollspy -->
    <script>$('body').scrollspy({ target: '#navbarsExampleDefault', offset: 108 })</script>
    <!-- Smooth Scroll -->
    <script src="js/smooth-scroll.js"></script>
    <!-- Video Full Width -->
    <script src="js/jquery.vide.js"></script> 
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    <!-- Number Counter -->
    <script src="js/nsc.js"></script>
    <!-- Video -->
    <script async src="https://www.youtube.com/iframe_api"></script>
    <script>
     /*<!--function onYouTubeIframeAPIReady() {
      var player;
      player = new YT.Player('muteYouTubeVideoPlayer', {
        videoId: 'iLs5c2Y1BOM', // YouTube Video ID
        width: 560,               // Player width (in px)
        height: 316,              // Player height (in px)
        playerVars: {
          autoplay: 1,        // Auto-play the video on load
          controls: 1,        // Show pause/play buttons in player
          showinfo: 0,        // Hide the video title
          modestbranding: 1,  // Hide the Youtube Logo
          loop: 1,            // Run the video in a loop
          fs: 0,              // Hide the full screen button
          cc_load_policy: 0, // Hide closed captions
          iv_load_policy: 3,  // Hide the Video Annotations
          autohide: 0         // Hide video controls when playing
        },
        events: {
          onReady: function(e) {
            e.target.mute();
          }
        }
      });
     }

     // Written by @labnol 
    
    </script>
 

</body>
</html>
