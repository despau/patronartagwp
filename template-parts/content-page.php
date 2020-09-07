<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- <article id="post-<?php the_ID(); ?>" class="post"> -->
    
    <header class="entry-header">
        <?php the_title( '<h1>', '</h1>' ); ?>
    </header>
    
    <div class="entry-content">
    <?php the_content( '<p>', '</p>' ); ?>
    </div>
<p><em>template: content-page</em></p>
</article>