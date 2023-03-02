<?php get_header()?>
    <pre>category.php</pre>
    <main class="site__main">
        <h1>Bienvenue sur 4W4</h1>
        <!--<section class="blocflex">
        </*?php
            if (have_posts()):
                while (have_posts()): the_post();?>
                    <article>
                        <a href="</*?php the_permalink();?>"><h3></*?php the_title();?></h3></a>
                        </*?php the_excerpt();?>
                        </*?php wp_trim_words(get_the_excerpt(), 10, "...")?>
                    </article>
                </*?php endwhile;?>
            </*?php endif;?>
        </section> -->
        <section class="blocflex">
            <?php $category = get_queried_object(); $args = array( 'category_name' => $category->slug, 'orderby' => 'title', 'order' => 'ASC');
            $query = new WP_Query($args);
            if ($query->have_posts() ) :
                while ($query->have_posts()) : $query->the_post();
                get_template_part('template-parts/categorie', $category->slug);
                ?>
                <?php endwhile; ?>
            <?php endif; wp_reset_postdata();?>
        </section>
    </main>
    <?php get_footer()?>
</body>
</html>