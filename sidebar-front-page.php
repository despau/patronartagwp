<?php 
    if(!is_active_sidebar( 'front-page' )) {
        return;
    }


?>

<aside id="secondary" class="widget-area" role="complementary">

    <?php dynamic_sidebar( 'front-page' ); ?>

    <?php get_calendar(); ?>

    <p>Template: front-page-sidebar.php</p>
</aside>