<?php
require 'lib/functions.php';
require 'lib/render_functions.php';
$id = $_GET['id'];
$wallpaper = get_one_category($id);

?>
    <!doctype html>
    <html lang="pl">
    <?php echo get_html_head($wallpaper['name'],$wallpaper['description']);?>
    <body class="bg-light">
    <?php echo get_html_main_menu(is_logged());?>
    <?php echo get_html_sub_menu(get_category());?>
    <hr>
    <?php echo get_html_admin_menu(get_menu(),is_logged());?>
    <?php echo get_html_wallpaper(get_one_category($id));?>
    <?php echo get_html_footer();?>
    </body>
    </html>
<?php
