<?php get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="navigation">

            <h1><?php the_archive_title(); ?></h1>
            <p><?php echo category_description(); ?></p>
            <h2><?php single_term_title( 'Current cat: ' ); ?></h2>
            <hr>

            <?php if (have_posts() ) : while (have_posts() ) : the_post();
                
                get_template_part( 'template-parts/content-posts', get_post_format() );
             
             endwhile;  else : ?>          
                
                <?php get_template_part( 'template-parts/content', 'none' );
            
            endif; ?>

            <?php echo paginate_links(); ?>

        </main><!-- #main -->

        <h5>template: Category.php</h5>
    </div><!-- #primary -->
    
    <!-- secondary -->
    <?php get_sidebar(); ?>
    <!-- #secondary -->
    
     
   
<?php get_footer(); ?>    