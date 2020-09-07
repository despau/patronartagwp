<?php get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="navigation">
                
            <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <h5>template: 404</h5>

        </main><!-- #main -->

        
        
    </div><!-- #primary -->
    
    <!-- secondary -->
    <?php get_sidebar('page'); ?>
    <!-- #secondary -->
    
     
   
<?php get_footer(); ?>    