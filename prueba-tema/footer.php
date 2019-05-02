<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prueba
 */

?>

<footer class="row">
    <div class="large-12 columns">
      <hr />
      
        <div class="large-6 columns">
          <span>Todos los derechos reservados &copy;</span>
        </div>
        <div class="large-6 columns">
          <?php 
          wp_nav_menu(
            array(
              'container'=>false,
              'items_wrap'=> '<ul id="menu-footer" class="inline-list right">%3$s</ul>',
              'theme-location'=> 'menu_footer'
            ));
         ?>
        </div>
      
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation.min.js"></script>
  <script src= "<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
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