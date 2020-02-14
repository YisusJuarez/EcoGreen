
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Expertos en fumigación, desinfectamos tu casa, oficina, jardín, o cualquier inmueble">
  <title>EcoGreen</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
  <link rel="stylesheet" href="./css/animate.css">
</head>

<body>
  <div class="boton-flotante d-lg-none shadow">
    <a href="https://api.whatsapp.com/send?phone=5215610065892&text=&source=&data="><i class="fab fa-whatsapp-square icon-whats"></i></a>
    <a href="tel:5562377643"><i class="fas fa-phone-square-alt icon-llamada"></i></a>
  </div>
  <nav data-scroll-header class="navbar navbar-expand-lg navbar-light fixed-top bg-color">
    <a class="navbar-brand" href="#"><img class="logo" src="./css/Ecogreeen2.png"></a>
    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="line shadow"></span>
      <span class="line shadow"></span>
      <span class="line shadow" style="margin-bottom: 0;"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item ">
          <a class="nav-link" href="./index.php">Inicio </a>
        </li>
        <li class="nav-item d-md-block d-none">
          <a class="nav-link" data-scroll href="#contacto">Contacto</a>
        </li>
        <li class="nav-item d-md-none">
          <a class="nav-link" data-scroll href="#contacto2">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-scroll href="#nosotros" tabindex="-1" aria-disabled="true">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-scroll href="#servicios" tabindex="-1" aria-disabled="true">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-scroll href="#ubicacion" tabindex="-1" aria-disabled="true">Ubicación</a>
        </li>
      </ul>
      <div class=" my-2 my-lg-0 d-lg-block d-none">
        <a href="https://api.whatsapp.com/send?phone=5215610065892&text=&source=&data=" class="btn-eco"> <i style="font-size: 20px;" class="fab fa-whatsapp"></i>
          WhatsApp</a>
      </div>
      <div class=" my-2 my-lg-0 d-lg-block d-none">
        <a href="tel:5562377643" class="btn-eco-phone"> <i style="font-size: 20px;" class="fas fa-phone-square-alt"></i>
          Teléfono</a>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class=" col-md-4 col-lg-6 bg-image py-5 d-md-block d-none ">
        <div class="row" id="contacto">
          <div class="col-md-10 mx-auto py-5 wow animated fadeIn " style="margin-top: 20%;">
          <?php
if(isset($_POST['submit'])){
    $to = "ventas@ecogreenmip.com.mx"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['second_name'];
    $subject = "Solicitud de Información - EcoGreen";
    $message = '<html>' .
        '<head><title>EcoGreen</title></head>' .
        '<body><h1>Solicitud de Información</h1>' .
        '<hr>' .
        '<p>Nombre:' . $first_name . $last_name . "</p>" .
        '<p>Correo:' . $from . "</p>" .
        '<p>Teléfono:' . $_POST['message'] . "</p>" .
        '</body>' .
        '</html>';
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From:" . $from;
    $enviado = mail($to,$subject,$message,$headers);
    
    if ($enviado) {
      echo '<div class="alert alert-success alert-correo" role="alert">¡Correo enviado! Nos pondremos en contacto contigo lo mas pronto posible.</div>';
  } else {
      echo '<div class="alert alert-danger alert-correo" role="alert">¡Error! Hubo un error al intentar enviar el correo.</div>';
  }
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }


?>

            <form name="contacto2" action="" method="post" class="form-bg shadow-lg">
              <p class="form-title-2">CONTÁCTANOS</p>
              <p class="form-titles">NOMBRE</p class="form-titles">
              <input class="form-input" type="text" name="first_name">
              <p class="form-titles">APELLIDO</p class="form-titles">
              <input class="form-input" type="text" name="second_name">
              <p class="form-titles">TELÉFONO</p>
              <input class="form-input" type="text" name="message">
              <p class="form-titles">CORREO</p>
              <input class="form-input" type="text" name="email">
              <input type="submit" class="btn-form" value="ENVIAR" name="submit">
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-6 bg-image-2" id="inicio">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto wow animated fadeInUp" data-wow-duration="2s">
                <h1 class="text-grey">EcoGreen</h1>
                <h3 class="login-heading mb-4 text-inicial">CONTAMOS CON EL MEJOR EQUIPO DE CONTROL DE PLAGAS EN <span
                    class="span-title">CDMX</span></h3>
                <p class="sub-text-inicial">Expertos en fumigación, desinfectamos tu casa, oficina, jardín, o cualquier
                  inmueble</p>
                <!--IZQ INFO-->

                <a class="btn-oikos btn-oikos-2 d-md-block d-none" style="width: 130px;" data-scroll
                  href="#nosotros">Conócenos</a>


                <a class="btn-oikos btn-oikos-2 d-md-none" style="width: 150px;" data-scroll
                  href="#contacto2">Contáctanos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=" col-md-4 col-lg-6 bg-image py-5 d-md-none">
        <div class="row">
          <div class="col-md-10  mx-auto py-5  wow animated fadeIn" id="contacto2" data-wow-duration="2s">
          <?php
if(isset($_POST['submit2'])){
    $to = "ventas@ecogreenmip.com.mx"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['second_name'];
    $subject = "Solicitud de Información - EcoGreen";
    $message = '<html>' .
        '<head><title>EcoGreen</title></head>' .
        '<body><h1>Solicitud de Información</h1>' .
        '<hr>' .
        '<p>Nombre:' . $first_name . $last_name . "</p>" .
        '<p>Correo:' . $from . "</p>" .
        '<p>Teléfono:' . $_POST['message'] . "</p>" .
        '</body>' .
        '</html>';
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From:" . $from;
    $enviado = mail($to,$subject,$message,$headers);
    
    if ($enviado) {
      echo '<div class="alert alert-success alert-correo" role="alert">¡Correo enviado! Nos pondremos en contacto contigo lo mas pronto posible.</div>';
  } else {
      echo '<div class="alert alert-danger alert-correo" role="alert">¡Error! Hubo un error al intentar enviar el correo.</div>';
  }
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }


?>

            <form class="form-bg" action="" method="post" name="contacto3">
              <p class="form-title">CONTÁCTANOS</p>
              <p class="form-titles">NOMBRE</p class="form-titles">
              <input class="form-input" type="text" name="first_name">
              <p class="form-titles">APELLIDO</p class="form-titles">
              <input class="form-input" type="text" name="second_name">
              <p class="form-titles">TELÉFONO</p>
              <input class="form-input" type="text" name="message">
              <p class="form-titles">CORREO</p>
              <input class="form-input" type="text" name="email">
              <input type="submit" class="btn-form" value="ENVIAR" name="submit2">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background-color: dimgray;">
    <div class="row">
      <div class="col-md-4" style="padding-top: 20px;">
        <p class="areas-text">NUESTRAS</p>
        <p class="areas-text">ÁREAS</p>
      </div>
      <div class="col-md-2">
        <div class="text-center">
          <i class="fas fa-home icon-width-2"></i>
        </div>
        <p class="text-areas">Residencial</p>
      </div>
      <div class="col-md-2">
        <div class="text-center">
          <i class="fas fa-building icon-width-2"></i>
        </div>
        <p class="text-areas">Industrial</p>
      </div>
      <div class="col-md-2">
        <div class="text-center">
          <i class="fas fa-truck-moving icon-width-2"></i>
        </div>
        <p class="text-areas">Medios de Transporte</p>
      </div>
      <div class="col-md-2">
        <div class="text-center">
          <i class="fas fa-store icon-width-2"></i>
        </div>
        <p class="text-areas">Sector Alimenticio</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 wow animated fadeInLeft" data-wow-duration="2s" id="nosotros">
        <p class="title-nosotros">NOSOTROS</p>
        <p class="text-somos">EcoGreen es una empresa de fumigación ecológica que se encarga de el control de plagas y
          desinfección de las mismas.</p>
        <p class="text-somos">Contamos con un amplio catálogo de soluciones para nuestros clientes, el cual
          constantemente lo mantenemos actualizado. Contamos con los mejores técnicos en el control y eliminación de
          plagas, son altamente capacitados y se encuentran en constante capacitación de acuerdo a nuestro catálogo para
          brindarles el mejor servicio.</p>
      </div>
      <div class="col-md-6 col-bg2">

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="col-bg-servicios shadow wow animated fadeInLeft" data-wow-duration="2s">
          <div class="text-center">
            <i class="fas fa-globe-americas icon-width"></i>
          </div>
          <p class="title-servicios">Cobertura</p>
          <p class="text-servicios">Proporcionamos cobertura en la CDMX y Área metropolitana.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-bg-servicios shadow wow animated fadeInUp" data-wow-duration="2s">
          <div class="text-center">
            <i class="fas fa-award  icon-width"></i>
          </div>
          <p class="title-servicios">Calidad</p>
          <p class="text-servicios">Brindamos la mejor calidad de servicio y atención a todos nuestros clientes.</p>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="col-bg-servicios shadow wow animated fadeInRight" data-wow-duration="2s">
          <div class="text-center">
            <i class="fas fa-code-branch icon-width"></i>
          </div>
          <p class="title-servicios">Tecnología</p>
          <p class="text-servicios">Contamos con la mejor tecnología para el control y desinfección de plagas.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="title-servicios-2 cont-bg" id="servicios">
      SERVICIOS QUE OFRECEMOS
    </div>
    <div class="container-fluid cont-style">
      <div class="row justify-content-center ">
        <div class="col-md-9">
          <!--<div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <li class="list-style">Control de ratones</li>
                  <li class="list-style">Control de hormigas</li>
                  <li class="list-style">Control de alacranes</li>
                  <li class="list-style">Control de pulgas</li>
                  <li class="list-style">Control de arañas</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul>
                  <li class="list-style">Control de mosquitos</li>
                  <li class="list-style">Control de moscas</li>
                  <li class="list-style">Control de chinches</li>
                  <li class="list-style">Control de cucarachas</li>
                </ul>
              </div>
            </div>
          </div>-->


          
            <p class="ofrecemos-text">Control de chinches | Control de cucarachas | Control de alacranes | Control de roedores
            | Control de arañas
            | Control de moscas | Control de hormigas | Control de pulgas | Control de mosquitos</p>
        </div>

        <!-- <div class="col-md-2 ofrecemos">CONTROL DE RATONES</div>
        <div class="col-md-2 ofrecemos-2">CONTROL DE HORMIGAS</div>
        <div class="col-md-2 ofrecemos">CONTROL DE ALACRANES</div>
        <div class="col-md-2 ofrecemos-2">CONTROL DE PULGAS</div>
        <div class="col-md-2 ofrecemos">CONTROL DE MOSQUITOS</div>
        <div class="col-md-2 ofrecemos-2">CONTROL DE MOSCAS</div>
        <div class="col-md-4 ofrecemos">CONTROL DE CHINCHES</div>
        <div class="col-md-4 ofrecemos-2">CONTROL DE CUCARACHAS</div>
        <div class="col-md-4 ofrecemos">CONTROL DE ARAÑAS</div>-->
      </div>
     
      <div class="text-center">
        <a data-scroll href="#contacto2" class="btn-oikos">CONTÁCTANOS</a>
      </div>

    </div>
    <div class="container">
      <div class="card shadow" style="margin-top: 30px; padding: 15px;">
        <div class="row">
          <div class="col-md-6">
            <p class="tarjeta-text"> EN <span class="eco-color">ECOGREEN</span>  ACEPTAMOS TODAS LAS TARJETAS DE <span class="color-tarjetas">CRÉDITO</SPAN> y <span class="color-tarjetas">DÉBITO</span></p>
          </div>
          <div class="col-md-6">
            <img src="./css/tarjetas.png" style="width: 100%; padding: 10px;">
          </div>
        </div>
      </div>
    
    </div>
    
    <div class="text-center">
      <p class="title-ofrecemos">
        ¿POR QUÉ CONTRATARNOS?
      </p>
      <p>5 razones principales para elegirnos</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-9 ofrecemos wow animated fadeInLeft" data-wow-duration="2s"><span class="number">1</span>
        Productos ecológicos que se degradan rápidamente.</div>
      <div class="col-md-9 ofrecemos-2 wow animated fadeInLeft" data-wow-duration="2.3s"><span class="number">2</span>
        Servicio profesional 100% garantizado.</div>
      <div class="col-md-9 ofrecemos wow animated fadeInLeft" data-wow-duration="2.6s"><span class="number">3</span> Los
        mejores costos del mercado que se adaptan a tus necesidades.</div>
      <div class="col-md-9 ofrecemos-2 wow animated fadeInLeft" data-wow-duration="2.9s"><span class="number">4</span>
        La mejor logística del mercado, la cual nos permite una solución inmediata.</div>
      <div class="col-md-9 ofrecemos wow animated fadeInLeft" data-wow-duration="3.2s"><span class="number">5</span>
        Técnicos altamente capacitados y certificados ante el conocer.
      </div>
    </div>
    <div class="text-center">
      <p class="title-ofrecemos">
        EMPRESA CON LAS QUE TRABAJAMOS
      </p>
    </div>
    <div class="container">
      <img class="wow animated fadeIn" data-wow-duration="3s" src="./css/empresas-desk.png" style="width: 100%;">
    </div>
    <!-- fin empresas-->
    <div class="row py-4 padding-ubic justify-content-center bg-contacto">
      <!-- <div class="col-md-4" style="padding-bottom: 20px;">
        <p class="title-ubicacion-contacto">CONTACTO</p>
        <p class="subs-info">DIRECCIÓN</p>
        <p class="text-direccion">
          Calle Ignacio Molina Lt 3 Mz 16, La Era I y II, Iztapalapa, Ciudad de México, CDMX
        </p>
        <p class="subs-info">CORREO ELECTRÓNICO</p>
        <p class="text-direccion">
          ventas.ecogreen@gmail.com
        </p>
        <p class="subs-info">HORARIO DE ATENCIÓN</p>
        <p class="text-direccion" style="margin-bottom: 0px;">
          Lunes a Viernes:
        </p>
        <div class="text-direccion">
          9:00 am a 18:00 pm
        </div>
        <div class="text-direccion">
          Sábado 9:00 am a 14:00 pm
        </div>
      </div>-->
      <div class="col-md-9" id="ubicacion">
        <p class="title-ubicacion-contacto">UBICACIÓN</p>
        <p class="text-direccion">
          <i class="fas fa-home"></i> Calle Ignacio Molina Lt 3 Mz 16, La Era I y II, Iztapalapa, Ciudad de México, CDMX
        </p>
        <p class="text-direccion">
          <i class="fas fa-envelope"></i> ventas.ecogreen@gmail.com
        </p>
        <div class="text-direccion" style="padding-bottom: 20px; color: white !important; text-decoration: none;">
          <i class="fas fa-phone"></i> 55 6237 7643
        </div>
        <div class="google-maps shadow wow animated fadeInLeft" data-wow-duration="2s">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.1785440294638!2d-99.05288117085682!3d19.338205264623987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDIwJzE3LjUiTiA5OcKwMDMnMDguNCJX!5e0!3m2!1ses!2smx!4v1580349157871!5m2!1ses!2smx"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="col-md-12">
          <hr style="border-top: 1px solid white; ">
          <footer id="sticky-footer">
            <div class="container-fluid">
              <small> EcoGreen &copy;2020 | Desarrollada por DotCom</small>
            </div>
          </footer>
        </div>
      </div>


    </div>


  </div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>

<script>
  var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 500,
    speedAsDuration: true,
    header: '[data-scroll-header]'

  });
  var scroll = new SmoothScroll('nav', {
    header: '[data-scroll-header]'
  });
</script>
<script src="./js/wow.min.js"></script>
<script>
  new WOW().init();
</script>

</html>