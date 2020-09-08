<?php get_header(); ?>
    <!-- can also add author-id.php author-nicename.php etc.. -->
    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="navigation">

            <div class="author-bio">
                <h1><?php the_archive_title(); ?></h1>
                <p>
                    <?php the_author_meta( 'description', $post->post_autor ); ?>
                </p>
                
                <?php wp_list_authors(); ?>

                <p><a href="<?php esc_url( bloginfo('home')); ?>">
                    <?php the_author_meta( 'email', $post->post_autor ); ?>
                </a></p>
            </div>

            
            <!-- <p><?php the_archive_description(); ?></p> -->

            <?php if (have_posts() ) : while (have_posts() ) : the_post();
                
                get_template_part( 'template-parts/content-posts', get_post_format() );
             
             endwhile;  else : ?>          
                
                <?php get_template_part( 'template-parts/content', 'none' );
            
            endif; ?>

            <?php echo paginate_links(); ?>

        </main><!-- #main -->

        <h5>template: Author.php</h5>
    </div><!-- #primary -->
    
    <!-- secondary -->
    <?php get_sidebar(); ?>
    <!-- #secondary -->
    
     
   
<?php get_footer(); ?>    