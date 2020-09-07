<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <header class="entry-header">

    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>

        <?php the_title( '<h1>', '</h1>' ); ?>

        <div class="byline">
            <?php esc_html_e( 'Author: ', 'patronarchy' ); the_author(); ?>
        </div>

    </header>
    
    <div class="entry-content">

        <?php
            if( has_post_thumbnail(  )):
            return;
            endif;
        else: 
            $attr = [
                'class' => 'img featured augustin',
                'title' => get_the_title(),
                'alt' => get_the_title() . 'Alt'
            ];

            the_post_thumbnail('thumbnail', $attr);
        ?>
        
        <?php the_content('Read more ..!'); ?>


    </div>

    <p>template: content.php</p>

    <?php if ( comments_open( ) ) : comments_template(); endif; ?>

</article>