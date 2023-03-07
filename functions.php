<?php
/**
* L'ensemble des fonctions du thème
*/
function enfiler_css() {
wp_enqueue_style('4w4-gr1-principal', // id
        get_template_directory_uri() . '/style.css', // adresse url de style.css
        array(), // définir les dépendances
        filemtime(get_template_directory() . '/style.css'), // le calcul de la version du fichier css
        'all'); // media
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
        // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
        if($args->menu == 'cours') {
    // Modifier la longueur du titre en fonction de vos besoins
    $title = wp_trim_words($title, 3, ' ... ');
    }
    return $title;
    }
    add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 4);