<?php get_header()?>
    <pre>front-page.php</pre>
    <main class="site__main">
        <h1>Bienvenue sur 4W4</h1>
        <?php
            if (in_category('galerie')) {
                get_template_part("template-parts/categorie", "galerie");
            }
            else {
                get_template_part("template-parts/categorie", "4w4");
            }
        ?>
        <section class="blocflex">
        <?php
            if (have_posts()):
                while (have_posts()): the_post();
        ?>
        <article>
            <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
            <?php the_excerpt();?>
            <?php wp_trim_words(get_the_excerpt(), 10, "...")?>
        </article>
        <?php endwhile;?>
        <?php endif;?>
        </section>
    </main>
    <?php get_footer()?>
</body>
</html>