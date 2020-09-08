<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- for single posts (from blog) -->
    <header class="entry-header">

    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>

        <?php the_title( '<h2><a href=" '. esc_url(get_permalink()) .' ">', '</a></h2>' ); ?>

        <div class="byline">
            <?php 
                esc_html_e( 'Author: ', 'patronarchy' ); the_author_posts_link(); 
                // the_author_meta('user_email'); 
            ?>
        </div>

    </header>
    
    <div class="entry-content">

        <?php the_content( ); ?>
        
        <p>template: content-posts.php</p>

    </div>

    <?php if ( comments_open( ) ) : comments_template(); endif; ?>

</article>