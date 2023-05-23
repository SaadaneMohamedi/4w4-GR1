<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue au TIM</title>
    <?php wp_head(); ?>
</head>
<body class="site <?php echo(is_front_page() ? "no-aside" : "")?>">
    <header class="site__entete">
        <section class="entete__nav">
            <?php the_custom_logo()?>
            <div class="menu__recherche">
                <input type="checkbox" name="" id="chkBurger">
                <?php wp_nav_menu(array("menu" => "entete", "container" => "nav", "container_class" => "menu__entete"));?>
                <?php get_search_form()?>
                <label class="burger" for="chkBurger"><img src="https://i.pinimg.com/originals/ee/c0/71/eec071442e9a1b8e017c5a7c1853b880.jpg" width="35" height="35"></label>
            </div>
        </section>
    </header>
    <?php if (!is_front_page() && (in_category("cours") || in_category("4w4"))) {get_template_part("template-parts/aside");}
          else if (!is_front_page() && (!in_category("cours") && !in_category("4w4"))) {get_template_part("template-parts/aside-atelier");}?>