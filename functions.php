<?php

//Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnais' );
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


//Load in our CSS
function patronarchy_enqueue_styles() {
    wp_enqueue_style( 'varela-font-css', 'https://fonts.googleapis.com/css?family=Varela+Round', [], '', 'all' );
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', ['varela-font-css'], time(), 'all' );
    wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/assets/css/custom-style.css', ['main-css'], time(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'patronarchy_enqueue_styles' );


// Load in our JS
function patronarchy_enqueue_scripts() {

  wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', [], time(), true );

}
add_action( 'wp_enqueue_scripts', 'patronarchy_enqueue_scripts' );



//Register Menu Locations
register_nav_menus([
    'main-menu' => esc_html__( 'Main Menu', 'pratonarchy' )
]);


// Setup Widget Areas
function patronarchy_widgets_init() {
    register_sidebar([
      'name'          => esc_html__( 'Main Sidebar', 'patronarchy' ),
      'id'            => 'main-sidebar',
      'description'   => esc_html__( 'Add widgets for main sidebar here', 'patronarchy' ),
      'before_widget' => '<section class="widget">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ]);
    register_sidebar([
      'name'          => esc_html__( 'Page Sidebar', 'patronarchy' ),
      'id'            => 'page-sidebar',
      'description'   => esc_html__( 'Add widgets for page sidebar here', 'patronarchy' ),
      'before_widget' => '<section class="widget">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ]);
    register_sidebar([
      'name'          => esc_html__( 'Front Page Widgets', 'patronarchy' ),
      'id'            => 'front-page',
      'description'   => esc_html__( 'Add widgets for the front page here', 'patronarchy' ),
      'before_widget' => '<section class="widget">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ]);
  }
  add_action( 'widgets_init', 'patronarchy_widgets_init' );
















?>
