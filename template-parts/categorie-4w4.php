<?php 
    $titre = get_the_title();
    if (substr($titre,0,1) == '0'){
        $titre = substr($titre,1);
    }
?>
<article class="blocflex__article">
    <a href="<?php the_permalink();?>"><h3><?= $titre?></h3></a>
    <p><?= wp_trim_words(get_the_excerpt(), 15)?></p>
</article>