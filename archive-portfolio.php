<?php get_header(); ?>

    <div id="primary" class="content-area extended">

        <main id="main" class="site-main" role="navigation">

            <h1><?php the_archive_title(); ?></h1>
            <!-- <p><?php the_archive_description(); ?></p> -->

            <?php if (have_posts() ) : while (have_posts() ) : the_post();
                
                get_template_part( 'template-parts/content-portfolio', get_post_format() );
             
             endwhile;  else : ?>          
                
                <?php get_template_part( 'template-parts/content', 'none' );
            
            endif; ?>

            <?php echo paginate_links(); ?>

        </main><!-- #main -->

        <h5>template: Archive-Portfolio.php</h5>
    </div><!-- #primary -->

   
<?php get_footer(); ?>    