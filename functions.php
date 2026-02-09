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

function alnur_enqueue_google_font_preconnect() {
    wp_enqueue_style('preconnect', 'https://fonts.googleapis.com', array(), null);
    wp_enqueue_style('preconnect-gstatic', 'https://fonts.gstatic.com', array(), null);
}

add_action('wp_enqueue_scripts', 'alnur_enqueue_google_font_preconnect');

function alnur_enqueue_google_inter_font() {
    wp_enqueue_style('inter-font', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap', array(), null);
}

add_action('wp_enqueue_scripts', 'alnur_enqueue_google_inter_font');
?>