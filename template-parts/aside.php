<aside class="site__aside">
    <?php
    $menu = "4w4";
    if (in_category('cours')){ 
        $menu = "cours";
    }
    ?>
    <p class="aside-titre"><?= $menu;?></p>
    <?php wp_nav_menu(array("menu" => $menu, "container" => "nav"));?>
</aside>