<?php 
    add_action('wp_enqueue_scripts', 'load_scripts');
    add_action('after_setup_theme', 'theme_setup');

    function load_scripts() {
        wp_enqueue_style('swiper-style', get_template_directory_uri() . '/styles/swiper-bundle.min.css', false);
        wp_enqueue_style('style', get_template_directory_uri() . '/styles/style.css', '8.0.0', true);

        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-2.0.0.js');
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/scripts/swiper-bundle.min.js', false);
        wp_enqueue_script( 'script', get_template_directory_uri() . '/scripts/script.js', array('jquery', 'swiper-script'), '4.5.0', true);
    }

    function load_images($name) {
        echo get_template_directory_uri() . '/assets/img/' . $name;
    }

    function theme_setup() {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
    }

    add_filter( 'kdmfi_featured_images', function( $featured_images ) {
        $args = array(
          'id' => 'featured-image-2',
          'desc' => 'Your description here.',
          'label_name' => 'Featured Image 2',
          'label_set' => 'Set featured image 2',
          'label_remove' => 'Remove featured image 2',
          'label_use' => 'Set featured image 2',
          'post_type' => array( 'post' ),
        );
      
        $featured_images[] = $args;
      
        return $featured_images;
      });
    add_filter( 'kdmfi_featured_images', function( $featured_images ) {
        $args = array(
          'id' => 'featured-image-3',
          'desc' => 'Your description here.',
          'label_name' => 'Featured Image 3',
          'label_set' => 'Set featured image 3',
          'label_remove' => 'Remove featured image 3',
          'label_use' => 'Set featured image 3',
          'post_type' => array( 'post' ),
        );
      
        $featured_images[] = $args;
      
        return $featured_images;
      });
?>