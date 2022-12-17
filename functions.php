<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
register_sidebar([
    'name'=>'logo top right',
    'id'=>'ltr',
    'before_widget'  => '',
	'after_widget'   => "",
]);
register_sidebar([
    'name'=>'hero title',
    'id'=>'herotitle',
    'before_widget'  => '',
	'after_widget'   => "",
]);
register_sidebar([
    'name'=>'card img 1',
    'id'=>'cardimg1',
    'before_widget'  => '',
	'after_widget'   => "",
]);
register_sidebar([
    'name'=>'card body 1',
    'id'=>'cardbody1',
    'before_widget'  => '',
	'after_widget'   => "",
]);

register_nav_menus( array(
'TM'=>'praimary'
));

?>