<?php get_header()?>
    <pre>front-page.php</pre>
    <main><h1>Bienvenue sur 4W4</h1></main>
    <?php
        if (have_posts()):
            while (have_posts()): the_post();?>
                <article>
                    <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                    <?php the_excerpt();?>
                </article>
            <?php endwhile;?>
        <?php endif;?>
    <?php get_footer()?>
</body>
</html>