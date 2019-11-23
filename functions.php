<?php

// navalker - to enable bootstrap dropdown menu & navbar
require get_template_directory() . '/bootstrap-navwalker.php';

register_nav_menus( array(
    'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
) );
// Enables admin support to add images
add_theme_support('post-thumbnails');

function ana_theme_fonts() {
	// LOAD FONTS
	wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css?family=Raleway&display=swap' );
	wp_enqueue_style('zappat_css', get_template_directory_uri() . '/fonts/zappat/style.css');
	wp_enqueue_style('icomoon_css', get_template_directory_uri() . '/fonts/icomoon/style.css');
	wp_enqueue_style('flaticon_css', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css');
}
add_action( 'wp_enqueue_scripts', 'ana_theme_fonts' );

function ana_theme_styles() {
	// BOOTSTRAP CSS & MY STYLE
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap/bootstrap.css');
	wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('magnificpopup_css', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style('jquery_css', get_template_directory_uri() . '/css/jquery-ui.css');
	wp_enqueue_style('owlcarousel_css', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style('owltheme_css', get_template_directory_uri() . '/css/owl.theme.default.min.css');
	wp_enqueue_style('animate_css', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style('aos_css', get_template_directory_uri() . '/css/aos.css');
}
add_action('wp_enqueue_scripts', 'ana_theme_styles');

function ana_theme_js() {

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'bootstrap_min_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'jquery_migrate_js', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'jquery_ui_js', get_template_directory_uri() . '/js/jquery-ui.js', array('jquery'), '', true );
	wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'owlcarousel_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'stellar_js', get_template_directory_uri() . '/js/jquery.stellar.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'countdown_js', get_template_directory_uri() . '/js/jquery.countdown.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'magnific_popup_js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'aos_js', get_template_directory_uri() . '/js/aos.js', array('jquery'), '', true );
	wp_enqueue_script( 'bootstrap_min_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
	// GOOGLE MAP
	wp_enqueue_script( 'google_map_js', get_template_directory_uri() . '/js/google-map.js', array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'ana_theme_js');

//Widget Locations
function ana_widgets($id) {
	//Pill text widget
	register_sidebar(array(
		'name'	=> 'Schedule',
		'id'	=> 'pill',
		'before_widget'	=> '<table class="row bg-white p-4 align-items-center">',
		'after_widget'	=> '</table>',
		'before_title'	=> '<td>',
		'after_title'	=>	'</td>'
	));

	//Contact Form
	register_sidebar(array(
		'name'	=> 'Contact Form',
		'id'	=> 'contact',
		'before_widget'	=> '<div class="d-md-flex">',
		'after_widget'	=> '</div>',
		'before_title'	=> '',
		'after_title'	=>	''
	));

}
add_action('widgets_init', 'ana_widgets');

//Customiser File
require get_template_directory() . '/inc/customizer.php';

?>