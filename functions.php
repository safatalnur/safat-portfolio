<?php

// Add script and stylesheets
function alnur_scripts() {
    // Custom Style
    $custom_css_file = get_stylesheet_directory() . '/assets/css/alnur-style.css';
    $file_ver = file_exists($custom_css_file) ? date("Ymd-Gis", filemtime($custom_css_file)) : false;
    wp_enqueue_style('alnur_style', get_stylesheet_directory_uri() . '/assets/css/alnur-style.css', array(), $file_ver);   
    // Custom JS
    wp_enqueue_script('alnur_js', get_stylesheet_directory_uri().'/assets/js/alnur.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'alnur_scripts');

?>