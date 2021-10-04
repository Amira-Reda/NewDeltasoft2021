<?php
function enqueue_my_custom_styles(){
    wp_enqueue_style('bootstrap.min.cs',get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css',false);
    wp_enqueue_style('animate.css',get_template_directory_uri().'/vendor/WOW-master/css/animate.css',false);

    wp_enqueue_style('owl.carousel.css',get_template_directory_uri().'/vendor/owlCarousel/assets/owl.carousel.css',false);

    wp_enqueue_style('style.css',get_template_directory_uri().'/assets/css/style.css',false);


    if( WPGlobus::Config()->language == 'ar'){


        wp_enqueue_style('ar.css',get_template_directory_uri().'/assets/css/ar.css',false);


    }

    

}

function enqueue_my_custom_scripts(){
    wp_enqueue_script('ce4a4e1044.js','https://kit.fontawesome.com/ce4a4e1044.js',false);
    wp_enqueue_script('core.js', get_template_directory_uri().'/assets/js/core.js',false);
    wp_enqueue_script('maps.js', get_template_directory_uri().'/assets/js/maps.js',false);
    wp_enqueue_script('worldLow.js', get_template_directory_uri().'/assets/js/worldLow.js',false);
    wp_enqueue_script('animated.js', get_template_directory_uri().'/assets/js/animated.js',false);

    // footer
    wp_enqueue_script('jquery-3.5.1.slim.min.js','https://code.jquery.com/jquery-3.5.1.slim.min.js',array(),false,true);
    wp_enqueue_script('popper.min.js','https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js',array(),false,true);
    wp_enqueue_script('bootstrap.min.js',get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.min.js',array(),false,true);
    wp_enqueue_script('wow.min.js',get_template_directory_uri().'/vendor/WOW-master/js/wow.min.js',array(),false,true);
    wp_enqueue_script('owl.carousel.min.js',get_template_directory_uri().'/vendor/owlCarousel/owl.carousel.js',array(),false,true);
    wp_enqueue_script('anmiated-map.js',get_template_directory_uri().'/assets/js/anmiated-map.js',array(),false,true);
    wp_enqueue_script('scripts.js',get_template_directory_uri().'/assets/js/scripts.js',array(),false,true);
    // contact us
    // wp_enqueue_script('scripts.js',get_template_directory_uri().'../../plugins/contact-form-7/includes/js/scripts.js',array(),false,true);


    // <script src="http://localhost/Deltasoft_wordpress/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.2.2" id="contact-form-7-js"></script>

}
add_action('wp_enqueue_scripts','enqueue_my_custom_styles');
add_action('wp_enqueue_scripts','enqueue_my_custom_scripts');


// menu
function register_my_menu() {
    register_nav_menu('header-menu',__( 'main menu' ));
  }
  add_action( 'init', 'register_my_menu' );



?>

