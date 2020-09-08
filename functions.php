<?php

//Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails', ['page', 'post'] );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'video', 'chat' ] );
add_theme_support( 'title-tag' );
add_theme_support( 'title-tag' );
add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    )
);
add_theme_support( 'automatic-feedlink' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-background' );
add_theme_support( 'custommized-selective-refresh-widgets' );
add_theme_support( 'starter-content' );


// Include R Debug
require( dirname(__FILE__) . '/lib/r-debug.php' );


//Load in our CSS
function patronartag_enqueue_styles() {
    wp_enqueue_style( 'varela-font-css', 'https://fonts.googleapis.com/css?family=Varela+Round', [], '', 'all' );
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', ['varela-font-css'], time(), 'all' );
    wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/assets/css/custom-style.css', ['main-css'], time(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'patronartag_enqueue_styles' );


// Load in our JS
function patronartag_enqueue_scripts() {

  wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', [], time(), true );

}
add_action( 'wp_enqueue_scripts', 'patronartag_enqueue_scripts' ); //default priority is 10


//our own hook wphooks_before_footer
// to display custom footer message
function wphooks_before_footer_message() {

  // echo '<p>My custom footer text message rawwg!</p>';
  locate_template( 'template-parts/before-footer.php', true);

}
add_action( 'wphooks_before_footer', 'wphooks_before_footer_message', 10);
// remove_action( 'wphooks_before_footer', 'wphooks_before_footer_message', 10);



//Register Menu Locations
register_nav_menus([
    'main-menu' => esc_html__( 'Main Menu', 'pratonarchy' )
]);


// Setup Widget Areas
function patronartag_widgets_init() {
    register_sidebar([
      'name'          => esc_html__( 'Main Sidebar', 'patronartag' ),
      'id'            => 'main-sidebar',
      'description'   => esc_html__( 'Add widgets for main sidebar here', 'patronartag' ),
      'before_widget' => '<section class="widget">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ]);
    register_sidebar([
      'name'          => esc_html__( 'Page Sidebar', 'patronartag' ),
      'id'            => 'page-sidebar',
      'description'   => esc_html__( 'Add widgets for page sidebar here', 'patronartag' ),
      'before_widget' => '<section class="widget">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ]);
    register_sidebar([
      'name'          => esc_html__( 'Front Page Widgets', 'patronartag' ),
      'id'            => 'front-page',
      'description'   => esc_html__( 'Add widgets for the front page here', 'patronartag' ),
      'before_widget' => '<section class="widget">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ]);
  }
  add_action( 'widgets_init', 'patronartag_widgets_init' );
















?>
