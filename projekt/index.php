<?php
require 'lib/functions.php';
require 'lib/render_functions.php';
?>
<!doctype html>
<html lang="pl">
    <?php echo get_html_head();?>
    <body class="bg-light">
        <?php echo get_html_main_menu(is_logged());?>
        <?php echo get_html_sub_menu(get_category());?>
        <hr>
        <?php echo get_html_admin_menu(get_menu(),is_logged());?>
        <h1 class="w-100 text-center">Najnowsze tapety</h1>
        <?php echo get_html_wallpapers(get_new_wallpapers(8));?>
        <hr>
        <h1 class="w-100 text-center">Tapety o największej rozdzielczości</h1>
        <?php echo get_html_wallpapers(get_big_wallpapers(8));?>
        <?php echo get_html_footer();?>
    </body>
</html>
