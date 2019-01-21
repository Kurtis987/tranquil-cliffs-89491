<?php get_header(); ?>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">

      <!-- Three columns of text below the carousel -->
      <div class="row">
      
         
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="container text-center">
<h1><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>  </h1>
<p><?php the_author(); ?></p> 



      
   
                            <p><?php the_content(); ?></p>
                            
                        
                        
    

              <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>
           
      </div><!-- /.row -->

      <hr class="featurette-divider"> 


     <?php get_footer(); ?>