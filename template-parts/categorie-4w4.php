<?php 
    $titre = get_the_title();
    /*if (substr(0,1) == "0") {
        
    }*/
?>
<article class="blocflex__article">
    <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
    <p><?= wp_trim_words(get_the_excerpt(), 15)?></p>
</article>