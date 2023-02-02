<?php get_header()?>
    <pre>single.php</pre>
    <main><h1>Bienvenue sur 4W4</h1></main>
    <?php
        if (have_posts()):
            while (have_posts()): the_post();?>
                <article>
                    <h3><?php the_title();?></h3>
                    <?php the_content();?>
                </article>
                <hr>
            <?php endwhile;?>
        <?php endif;?>
    <?php get_footer()?>
</body>
</html>