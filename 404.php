<?php get_header()?>
    <main class="site__main site__404">
        <h1 class="titre__404">Erreur 404</h1>
        <h3 class="titre__404">Page introuvable, vous pouvez tenter une recherche</h3>
        <div class="titre__404 recherche__404"><?php get_search_form()?></div>
        <h4 class="titre__404">Nos choix de cours</h4>
        <section class="menu__404">
        <?php
        $menuCRS = "cours";
        ?>
        <?php wp_nav_menu(array("menu" => $menuCRS, "container" => "nav"));?>
        </section>
        <h4 class="titre__404">Nos notes de cours</h4>
        <section class="menu__404">
        <?php
        $menu4W4 = "Notes 4w4";
        ?>
        <?php wp_nav_menu(array("menu" => $menu4W4, "container" => "nav"));?>
        </section>
    </main>
    <?php get_footer()?>