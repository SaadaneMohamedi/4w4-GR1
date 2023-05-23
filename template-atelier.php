<?php
/**
 * Template name: Atelier
 *
 */
?>
<?php get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail(); ?> 
<h1><?= get_the_title(); ?></h1>
<h5><?php the_content();?></h5>
<h6><?php the_field('formateur'); ?></h6>
<h6><?php the_field('date'); ?></h6>
<h6><?php the_field('heure'); ?></h6>
<h6><?php the_field('durée'); ?></h6>
<h6><?php the_field('local'); ?></h6>
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();