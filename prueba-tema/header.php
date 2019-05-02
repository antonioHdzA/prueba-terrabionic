<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prueba
 */

?>
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
    <link rel="stylesheet" href= "<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css">
    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/502aa2edf1/UntitledProject/style.css">
    <script src= "<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-3.7.1.min.js"></script>
  </head>
  <body>

    <section id="header" class="row">
      <div class="large-12 columns">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
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
        <?php 
          wp_nav_menu(
            array(
              'container'=>false,
              'items_wrap'=> '<ul id="menu-top" class="inline-list menu">%3$s</ul>',
              'theme-location'=> 'menu_superior'
            ));
         ?>
      </div>
      <ul data-orbit>
        <li>
         <img src="<?php echo get_template_directory_uri(); ?>/img/imagen1.png"  alt="slide 1" style="width: inherit; height: fit-content;">
         <div class="orbit-caption">
          Caption One.
        </div>
      </li>

    </ul>
    <div class="large-12 column">

    </div>
  </section>