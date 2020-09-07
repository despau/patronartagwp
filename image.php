<?php get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="navigation">
            <?php if (have_posts() ) : while (have_posts() ) : the_post();?>
                <!-- get_template_part( 'template-parts/content', get_post_format()); -->
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
                    <header class="entry-header">
                        <?php the_title( '<h1>', '</h1>' ); ?>
                    </header>
                    
                    <div class="entry-content">

                        
                        <p><img src="<?php echo esc_url( $post->guid ); ?>" alt="<?php echo esc_attr( get_the_title(  ) ); ?>"></p>

                        <?php the_content( '<p>', '</p>' ); ?>

                    </div>

                    <?php if ( comments_open( ) ) : comments_template(); endif; ?>

                </article>
             
            <?php endwhile;  else : ?>          
                
                <?php get_template_part( 'template-parts/content', 'none' );
            
            endif; ?>

        </main><!-- #main -->

        <h5>template: Image.php</h5>
    </div><!-- #primary -->
    
    <!-- secondary -->
    <?php get_sidebar(); ?>
    <!-- #secondary -->
    
     
   
<?php get_footer(); ?>    