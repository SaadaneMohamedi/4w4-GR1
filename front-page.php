<?php get_header()?>
    <main class="site__main">
        <h1>Bienvenue sur 4W4</h1>
        <section class="blocflex">
        <?php
            if (have_posts()):
                while (have_posts()): the_post();
                if (in_category('galerie')) {
                    get_template_part("template-parts/categorie", "galerie");
                }
                else {
                    get_template_part("template-parts/categorie", "4w4");
                }
        ?>
        <?php endwhile;?>
        <?php endif;?>
        </section>
    </main>
    <?php get_footer()?>
</body>
</html>