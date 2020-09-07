<?php 
    if(!is_active_sidebar( 'page-sidebar' )) {
        return;
    }


?>

<aside id="secondary" class="widget-area" role="complementary">

    <?php dynamic_sidebar( 'page-sidebar' ); ?>
                
    <?php

        $args = [
            'type' => 'monthly',
            'limit' => 10,
            'show_post_count' => true,
            'order' => 'ASC'
        ];

        wp_get_archives($args);
        
    ?>

    
    <p>Template: page-sidebar.php</p>
</aside>