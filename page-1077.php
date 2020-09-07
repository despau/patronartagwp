<?php get_header(); ?>

    <div id="primary" class="content-area extended">

        <main id="main" class="site-main" role="navigation">
            <?php if (have_posts() ) : while (have_posts() ) : the_post();
                
                get_template_part( 'template-parts/content', 'page' );
             
             endwhile;  else : ?>          
                
                <?php get_template_part( 'template-parts/content', 'none' );
            
            endif; ?>

        </main><!-- #main -->

        <h5>template: Page-1077</h5>
    </div><!-- #primary -->
    

    
     
   
<?php get_footer(); ?>    