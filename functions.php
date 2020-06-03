<?php

// Henter stylesheets
function load_stylesheets(){
    /*Bootstrap CSS hentes ind */
    	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
	array(), false, 'all');
    
    wp_enqueue_style('bootstrap');
    
    /* Henter min egen stylesheet */
	wp_register_style('style', get_template_directory_uri() . '/style.css',
	array(), false, 'all');
    
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


/*GOOGLE FONTS*/
function wpb_add_google_fonts() {
 
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@1,300&family=Satisfy&display=swap', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );



/* Henter scripts */
function include_script(){
    
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', true);
    
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.4.1', true );
    
    // Register Custom Navigation Walker - Bootstrap menu 
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

}
add_action('wp_enqueue_scripts', 'include_script');



//Tilføjer et billede til blog
add_theme_support('post-thumbnails');

/**************************** MENU *********************************/



// Tilføjer placering på menuer
register_nav_menus(
	array(
		'top-menu' => __('Top Menu', 'theme'),
        'bund-menu' => __('Bund menu', 'theme'),

	)
);
/**************************** MENU SLUT *********************************/


// opretter billedestørrelser 
add_image_size('small', 300, 300, true);
add_image_size('large', 500, 500, true);
add_image_size('heroImage', 1500, 400, true);



/******************************** Tilføjet widget til footer ******************************/
function widget_footer() {
    register_sidebar( array(
    'name' => 'Footer Widget 1',
    'id' => 'footer-sidebar-1',
    'description' => 'Vises i footeren',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    
    register_sidebar( array(
    'name' => 'Footer Widget 2',
    'id' => 'footer-sidebar-2',
    'description' => 'Vises i footeren',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    
    register_sidebar( array(
    'name' => 'Footer Widget 3',
    'id' => 'footer-sidebar-3',
    'description' => 'Vises i footeren',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    
    
}
add_action( 'widgets_init', 'widget_footer' );

/******************************** WIDGET I FOOTER SLUT ******************************/

define( 'WP_DEBUG', true );



function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 200,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


/********************* ADD THEME SUPPORT *******************************/

// LOGO I HEADER
add_theme_support( 'custom-logo' );


//Tilføjer navbar under udseende
add_theme_support('menus');


/********************* ADD THEME SUPPORT SLUT **************************/