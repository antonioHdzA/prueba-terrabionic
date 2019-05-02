<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package prueba
 */

get_header();
?>

<section id="body">
    <div class="row">
      <div class="large-9 columns" role="content">
        <?php 
        if( have_posts() ) : while ( have_posts() ) : the_post(); 
           if(has_post_thumbnail()){
        ?>
          <hr>
        <div class="row">
          <div class="large-3 columns">
            <?php the_post_thumbnail('post-thumbnails');?>
          </div>
          <div class="large-9 columns">
            <span><?php the_title(); ?></span>
            <p><?php the_excerpt() ?> </p>
          </div>  
        </div>

        <?php 
        }//if(has_post_thumbnail)
        else{?>
            <div class="row">
          <div class="large-12 columns">
            <hr>
            <span><?php the_title(); ?></span>
            <p><?php the_excerpt() ?> </p>
            
          </div>
        </div>
        <?php
        }
        
      endwhile; else: ?>
         <h1>No se encontraron artículos</h1>
        <?php endif; ?>
        <!--hr>
        <div class="row">
          <div class="large-3 columns">
            <#?php if(has_post_thumbnail()){the_post_thumbnail('post-thumbnails');} ?>
          </div>
          <div class="large-9 columns">
            <#?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <span><#?php the_title(); ?></span>
            <p><#?php the_excerpt() ?> </p>
            <#?php endwhile; else: ?>
              <h1>No se encontraron artículos</h1>
              <#?php endif; ?>
          </div>  
        </div-->
        <!--div class="row">
          <div class="large-12 columns">
            <hr>
            <div>
              <#?php if(has_post_thumbnail()){the_post_thumbnail('post-thumbnails');} ?>
            </div>
            <#?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <span><#?php the_title(); ?></span>
            <p><#?php the_excerpt() ?> </p>
            <#?php endwhile; else: ?>
              <h1>No se encontraron artículos</h1>
              <#?php endif; ?>
          </div>
        </div-->
        

      </div><!--NO BORRAR-->
<?php
get_sidebar();
?>

    </div>
  </section>

<?php
get_footer();
?>
