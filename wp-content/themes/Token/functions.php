<?php

/*this function is created for enable the nav features*/
register_nav_menus( 
    array('primary-menu'=>'Home Top')  
);

/*this function is created for enable the thumbnail-image features*/
add_theme_support('post-thumbnails'); 

/*this function is created for enable the header-image-logo features*/
add_theme_support('custom-header');

/*for creating custom background*/
add_theme_support('custom-background');

/*for getting sidebar*/
register_sidebar(
    array(
        'name'=> 'sidebar',
        'id'=>'sidebar',
        'description'=>'Get Support'
    )
);

/*for getting short description*/
add_post_type_support('page','excerpt');


/*============for SVG================*/
// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }
  
    $filetype = wp_check_filetype( $filename, $mimes );
  
    return [
        'ext'             => $filetype['svg'],
        'type'            => $filetype['svg'],
        'proper_filename' => $data['serv.svg']
    ];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
  }
  add_action( 'admin_head', 'fix_svg' );


/*=====for calling icon=========*/
/*add_action('wp_enqueue_scripts', 'font-awesome_script()')
function font_awesome_script(){
  wp_enqueue_script('font_awesome_script', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(),NULL,true);
}*/
/*========*/

include_once( get_stylesheet_directory() . '/advanced-custom-fields-font-awesome/acf-font-awesome.php' );

/*============creating custom logo image=========*/
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);

	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/*=====adding nav wlaker (bootstrap in wordpress)*/
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/wp-bootstrap-navwalker-4.3.0/class-wp-bootstrap-navwalker.php';
};
add_action( 'after_setup_theme', 'register_navwalker' ); 

?>