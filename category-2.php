<?php get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="navigation">
            hello cat 2
            <h1><?php the_archive_title(); ?></h1>
            <p><?php echo category_description(); ?></p>
            <hr>

            <?php if (have_posts() ) : while (have_posts() ) : the_post();
                
                get_template_part( 'template-parts/content-posts', get_post_format() );
             
             endwhile;  else : ?>          
                
                <?php get_template_part( 'template-parts/content', 'none' );
            
            endif; ?>

            <?php echo paginate_links(); ?>

        </main><!-- #main -->

        <h5>template: Category-2.php (alignment)</h5>
    </div><!-- #primary -->
    
    <!-- secondary -->
    <?php get_sidebar(); ?>
    <!-- #secondary -->
    
     
   
<?php get_footer(); ?>    