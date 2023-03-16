<footer class="site__footer">
 <?php the_custom_logo();?>
 <nav class="footer">
    <h5>Plus ici!</h5>
    <?php wp_nav_menu(array("menu" => "footer", "container" => "nav", "container_class" => "menufooter", )); ?>
</nav>
</footer>
<?php wp_footer(); ?>
</body>
</html>
