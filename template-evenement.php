<?php
/**
 * Template name: Evenement
 *
 */
?>
<?php get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<h1><?= get_the_title(); ?></h1>
<h5><?php the_content();?></h5>
<h6>L'adresse de l'evénement : <?php the_field('adresse'); ?></h6>
<h6>La date et l'heure de l'événement : <?php the_field('date'); ?></h6>
<?php the_post_thumbnail(); ?> 
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();