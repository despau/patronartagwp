<?php get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="navigation">
            <?php if (have_posts() ) : while (have_posts() ) : the_post();
                
                get_template_part( 'template-parts/content', 'page' );
             
                // do not need an else because when wordpress cannot find a page
                // it will send you to the 404 page
             endwhile; endif; ?>

            <h5>template: Page</h5>
        </main><!-- #main -->

        
        
    </div><!-- #primary -->
    
    <!-- secondary -->
    <?php get_sidebar('page'); ?>
    <!-- #secondary -->
    
     
   
<?php get_footer(); ?>    