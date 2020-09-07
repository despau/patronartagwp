<?php get_header(); ?>

    <div id="primary" class="content-area extended">

        <main id="main" class="site-main" role="navigation">
            <?php if (have_posts() ) : while (have_posts() ) : the_post();
                
                get_template_part( 'template-parts/content', 'page' );
             
             endwhile;  else : ?>          
                
                <?php get_template_part( 'template-parts/content', 'none' );
            
            endif; ?>
            <h5>template: Front-Page (for your homepage)</h5>
        </main><!-- #main -->

        
        
    </div><!-- #primary -->
    
    <!-- secondary -->
    <?php get_sidebar('front-page'); ?>
    <!-- #secondary -->
    
     
   
<?php get_footer(); ?>    