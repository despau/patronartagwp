<?php get_header(); ?>

    <div id="primary" class="content-area">
    
            <!-- post_title() demo outside of the loop -->
            <h2><?php single_post_title( 'Current post: ' ); ?></h2>

            <p class="byline">
                <p><em>
                    <?php esc_html_e( 'Categories: ', 'patronartag'); ?>
                    <?php the_category(', ', ''); ?>
                </em></p>
                <p><em><?php the_tags( 'Tags: ', ', '); ?></em></p>
                <p><em>
                    <?php esc_html_e( 'Time: ', 'patronartag'); ?>
                    <?php the_time('F j, Y'); ?>
                </em></p>
                <?php the_shortlink( ); ?>
                <?php the_permalink(); ?>
                <pre>
                    <?php 
                        var_export(get_post_meta( $post->ID ));
                        var_export(the_meta( $post->ID ));
                    ?>
                </pre>
            </p>

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