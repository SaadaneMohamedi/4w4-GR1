<?php
function enfiler_css() {
wp_enqueue_style('4w4-gr1-principal', // id
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css'),
        'all');
}        

add_action( 'wp_enqueue_scripts', 'enfiler_css' ); 

if (! function_exists('enregistre_menus')) {
        function enregistre_menus(){
                register_nav_menus(array('menu_entete' => 'Menu_entete', 'menu_sidebar' => 'Menu_sidebar'));
        };
};
add_action('after_setup_theme', 'enregistre_menus', 0);

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 150,
    'width'  => 150,
) );

function cidweb_modifie_requete_principal( $query ) {
        if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
          $query->set( 'category_name', '4w4' );
          $query->set( 'orderby', 'title' );
          $query->set( 'order', 'ASC' );
          }
         }
add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );

function perso_menu_item_title($title, $item, $args, $depth) {
    if($args->menu == 'cours') {
        $title = wp_trim_words($title, 3, ' ... ');
    }
    
    if($args->menu == 'Notes 4W4') {
        if (substr($title,0,1) == '0') {
                $title = substr($title,1);
        }
    }
    return $title;
    }
add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 4);

function enregistrer_sidebar() {
        register_sidebar( array(
            'name' => __( 'Footer 1', 'nom-de-mon-theme' ),
            'id' => 'footer_1',
            'description' => __( 'Une zone de widgets pour afficher des widgets dans le pied-de-page.', 'nom-de-mon-theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ) );
    }
add_action( 'widgets_init', 'enregistrer_sidebar' );