<?php
  /*
  * Template Name: landind page
  */
  ?>
  <!DOCTYPE html>
  <!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
  <html class="no-js" lang="es">
  <head>
    <title>Prueba terrabionic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css">
    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/502aa2edf1/UntitledProject/style.css">
    <script src= js/vendor/modernizr-3.7.1.min.js></script>
  </head>
  <body>

    <section id="header" class="row">
      <div class="large-12 columns">
        <img src="img/logo.png" alt="">
        <h4 style="display: inline-block">Prueba terrabionic</h4>
        <div class="large-3 columns right" style="margin-top: 2em">
          <div class="row collapse">
            <div class="small-9 columns">
              <input type="text" placeholder="Busqueda" />
            </div>
            <div class="small-3 columns">
              <span class="icon-search postfix" style="padding: 0.7em"></span>
            </div>
          </div>
        </div>
      </div>

      <div id="menu" class="large-12 column">
        <ul class="inline-list menu">
          <li><a href="#" class="menu-item active">Inicio</a></li>
          <li><a href="#" class="menu-item">Nosotros</a></li>
          <li><a href="#" class="menu-item">Servicios</a></li>
          <li><a href="#" class="menu-item">Nosotros</a></li>
          <li><a href="#" class="menu-item">Contactos</a></li>
        </ul>
      </div>
      <ul data-orbit>
        <li>
         <img src="img/imagen1.png"  alt="slide 1" style="width: inherit; height: fit-content;">
         <div class="orbit-caption">
          Caption One.
        </div>
      </li>

    </ul>
    <div class="large-12 column">

    </div>
  </section>

  <section id="body">
    <div class="row">
      <div class="large-9 columns" role="content">
        <hr>
        <div class="row">
          <div class="large-12 columns">
            <span>Misión y Visión</span>
            <p>Curabitur vestibulum augue et purus laoreet tempus. Pellentesque habitant morbi tristique senectus et netus et 
              malesuada fames ac turpis egestas. Nunc eleifend, dui quis fermentum placerat, turpis dolor aliquet neque, non 
              commodo lacus urna ac velit. Nullam a ante lectus, tincidunt ornare nisl. Class aptent taciti sociosqu ad litora torquent 
              per conubia nostra, per inceptos himenaeos. Integer venenatis tristique mauris sit amet vulputate. Vivamus eu 
              elementum ipsum. Suspendisse potenti. Cras luctus, urna non fermentum porta, lorem libero pretium sem, cursus 
            venenatis elit arcu eget magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
          </div>
        </div>  
        
        <hr>
        
        <div class="row">
          <div class="large-3 columns">
            <img src="img/imagen2.png" alt="imagen 2">

          </div>
          <div class="large-9 columns">
            <span>Servicios</span>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vulputate, metus 
              hendrerit placerat blandit, turpis enim viverra tellus, et facilisis arcu leo ac quam. 
              Quisque hendrerit ullamcorper augue, non iaculis augue egestas et. Aliquam 
              pellentesque ipsum et quam molestie tincidunt. In imperdiet, justo nec suscipit 
              interdum, dui lacus posuere elit, idluctus tellus neque ut purus. Pellentesque ultricies 
              tempor mi, ut imperdiet nisi bibendum vel. Etiam lorem elit, lacinia sed vesti... 
              <a href="#" class="light-text"> Continuar leyendo  </a>    
            </p>
          </div>  
        </div>
      </div>


      <aside class="large-3 columns">
        <hr>
        <span>Noticias recientes</span>
        <p>Praesent luctus purus vitae erat feugiat fefeholaoo</p>
        <img src="img/imagen3.png" alt="imagen 3">
        <p>ed lacinia odio at quam dictum ornare. Quisque placerat massa non nunc tincidunt quis molestie 
          ligula posuere. Ut purus arcu, hendrerit eget dignissim at, eleifend sed lorem. Cras tristique 
          congue vulputate. Nullam gravida sollicitudin ultricies. Class aptent taciti sociosqu ad …
          <a href="#" class="light-text"> Continuar leyendo  </a>    
        </p>
      </aside>

    </div>
  </section>



  <footer class="row">
    <div class="large-12 columns">
      <hr />
      
        <div class="large-6 columns">
          <p>Todos los derechos reservados &copy;</p>
        </div>
        <div class="large-6 columns">
          <ul id="footer-menu" class="inline-list right">
            <li><a href="#" class="light-text">Inicio</a></li>
            <li><a href="#" class="light-text">Nosotros</a></li>
            <li><a href="#" class="light-text">Servicios</a></li>
            <li><a href="#" class="light-text">Nosotros</a></li>
            <li><a href="#" class="light-text">Contactos</a></li>
          </ul>
        </div>
      </div>
    
  </footer>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation.min.js"></script>
  <script src= "js/plugins.js"></script>
  <script>
    $(document).foundation({
      orbit:{
        slide_number:false,
        navigation_arrows: false,
        slide_number_text: false,
        timer: false,
        bullets:false
      }
    });
  </script>
</body>
</html>
