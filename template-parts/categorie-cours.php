<?php
    $titre = get_the_title();
    $sigle = substr($titre, 0, 7);
    $titre_long = substr($titre, 7, -5);
    $duree = "90";
?>
<article class="blocflex__article">
    <h3><a href="<?php the_permalink();?>"><?= $sigle;?></a></h3>
    <h6><?= $titre_long;?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h6><?= $duree; ?></h6>
</article>