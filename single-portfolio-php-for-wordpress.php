<?php get_header(); ?>

    <div id="primary" class="content-area extented">

        <main id="main" class="site-main" role="navigation">
            <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    <header class="entry-header">

                        <?php the_title( '<h1>', '</h1>' ); ?>

                    </header>
                    
                    <div class="entry-content">

                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'full' ); ?>
                        </a>

                        <?php the_content( '<p>', '</p>' ); ?>

                        <p>
                            <a class='button' href="<?php the_field( 'url' ); ?>">
                                <?php esc_html_e( 'Visit the Site', 'patronarchy'); ?>
                            </a>
                        </p>

                    </div>

                    <p><em>template: content-single-portfolio</em></p>
                </article>

             
            <?php endwhile; endif; ?>

        </main><!-- #main -->

        <h5>template: Single-Portfolio-php-for-wordpress.php</h5>
    </div><!-- #primary -->
     
   
<?php get_footer(); ?>    