<?php get_header()?>
    <main class="site__main">
        <h1>Bienvenue au TIM</h1>
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
    </main>
    <?php get_footer()?>
</body>
</html>