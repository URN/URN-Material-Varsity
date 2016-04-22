<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('scoreboard', get_stylesheet_directory_uri() . '/js/scoreboard.js', array('jquery'), false, true);
});

?>
