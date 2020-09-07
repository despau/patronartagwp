<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- <article id="post-<?php the_ID(); ?>" class="post"> -->
    
    <header class="entry-header">

        <!-- <?php the_title( '<h2><a href="<?php the_permalink(); ?>">', '</a></h2>' ); ?> -->
        <?php the_title( '<h2><a href="' . get_the_permalink() . '">', '</a></h2>' ); ?>

        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'full' ); ?>
        </a>

    </header>
    
    <div class="entry-content">
    <?php the_excerpt( '<p>', '</p>' ); ?>
    </div>
<p><em>template: content-portfolio</em></p>
</article>