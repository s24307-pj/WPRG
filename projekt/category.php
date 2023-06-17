<?php
require 'lib/functions.php';
require 'lib/render_functions.php';
$id_category = $_GET['id'];
$page_count = ceil(get_wallpaper_count($id_category)[0]/ 12);
if(!isset($_GET['page'])){
    $page = 1;
}else{
    $page = $_GET['page'];
}
$url = 'category.php?id='. $id_category . '&page=';
$offset = ($page-1)*24;

$category = get_category_name($id_category);
?>
<!doctype html>
<html lang="pl">
    <?php echo get_html_head($category .' - Tapety'); ?>
    <body class="bg-light">
        <?php echo get_html_main_menu(is_logged()); ?>

        <?php echo get_html_sub_menu(get_category()); ?>
        <hr>
        <?php echo get_html_admin_menu(get_menu(),is_logged()); ?>
        <h1 class="w-100 text-center"><?php echo $category ?></h1>
        <?php echo get_html_wallpapers(get_category_wallpaper($id_category ,$offset, 25)); ?>
        <?php echo get_html_pagination($page, $page_count, $url); ?>
        <?php echo get_html_footer(); ?>
    </body>
</html>
