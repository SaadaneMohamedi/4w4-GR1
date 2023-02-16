<?php get_header()?>
    <pre>category.php</pre>
    <main><h1>Bienvenue sur 4W4</h1></main>
    <section class="blocflex">
    <?php
        if (have_posts()):
            while (have_posts()): the_post();?>
                <article>
                    <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                    <?php the_excerpt();?>
                    <?php wp_trim_words(get_the_excerpt(), 10, "...")?>
                </article>
            <?php endwhile;?>
        <?php endif;?>
    </section>
    <?php get_footer()?>
</body>
</html>