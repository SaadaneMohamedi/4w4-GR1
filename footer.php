<footer class="site__footer">
 <nav class="footer">
    <h5>Plus ici!</h5>
    <?php wp_nav_menu(array("menu" => "footer", "container" => "nav", "container_class" => "menufooter", )); ?>
 </nav>
 <section class="footer_col">
    <div class="sidebar">
        <?php dynamic_sidebar('footer_1');?>
    </div>
    <div class="sidebar">
        <?php dynamic_sidebar('footer_2');?>
    </div>
    <div class="sidebar">
        <?php dynamic_sidebar('footer_3');?>
    </div>
 </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>
