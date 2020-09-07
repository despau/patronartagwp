<?php 
    // Template Name: Full Width
    // Template Post Type: post, page
?>

<?php get_header(); ?>

    <div id="primary" class="content-area extended">

        <main id="main" class="site-main" role="navigation">
            <?php if (have_posts() ) : while (have_posts() ) : the_post();
                
                get_template_part( 'template-parts/content', 'page' );
             
             endwhile;  else : ?>          
                
                <?php get_template_part( 'template-parts/content', 'none' );
            
            endif; ?>
            <h5>template: Template Full Width</h5>
        </main><!-- #main -->

        
        
    </div><!-- #primary -->
    
   
<?php get_footer(); ?>    