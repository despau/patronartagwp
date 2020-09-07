<?php get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="navigation">
            <?php if (have_posts() ) : while (have_posts() ) : the_post();
                
                get_template_part( 'template-parts/content', get_post_format());
             
             endwhile;  else : ?>          
                
                <?php get_template_part( 'template-parts/content', 'none' );
            
            endif; ?>

        </main><!-- #main -->

        <h5>template: Single.php (blog posts)[content]</h5>
    </div><!-- #primary -->
    
    <!-- secondary -->
    <?php get_sidebar(); ?>
    <!-- #secondary -->
    
     
   
<?php get_footer(); ?>    