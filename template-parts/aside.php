<aside class="site__aside">
    <?php 
    /*$category = get_queried_object();
    if (isset($category)) {
        $menu = $category->slug;
    } else {
        $menu = "aside";
    }
        
    wp_nav_menu(array("menu" => $menu, "container" => "nav", "container_class" => "menu__aside"));*/
    $menu = "4w4";
    if (in_category('cours')){ 
        $menu = "cours";
    }
    echo $menu;
    wp_nav_menu(array("menu" => $menu, "container" => "nav"));?>
</aside>