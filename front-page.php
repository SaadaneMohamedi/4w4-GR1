<?php get_header()?>
    <pre>front-page.php</pre>
    <main><h1>Bienvenue sur 4W4</h1></main>
    <?php
        if (have_posts()):
            while (have_posts()):
                the_post();?>
                <article>
                    <h3><?php get_the_title();?></h3>
                    <h6>Extrait:</h6> <?php the_excerpt();?>
                    <h6>Contenu:</h6><?php the_content();?></h6>
                </article>
            <?php endwhile;
        endif;
    ?>
    <?php get_footer()?>
</body>
</html>