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
<h1><?= get_the_title(); ?></h1>
<h5><?php the_content();?></h5>
<h6>Formateur: <?php the_field('formateur'); ?></h6>
<h6>Date de l'atelier: <?php the_field('date'); ?></h6>
<h6>Heure de l'atelier: <?php the_field('heure'); ?></h6>
<h6>Durée: <?php the_field('duree'); ?> heures</h6>
<h6>Local: <?php the_field('local'); ?></h6>
<?php the_post_thumbnail(); ?> 
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();