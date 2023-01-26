<?php
function enfiler_css() {
        wp_enqueue_style('4w4-gr1-principal',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css'),
        'all');
}

add_action('wp_enqueue_scripts', 'enfiler_css');