<?php
require 'lib/functions.php';
require 'lib/render_functions.php';
$id_category = $_GET['id'];
$page_count = ceil(get_wallpaper_count($id_category)[0] / 16);
if(!isset($_GET['page'])){
    $page = 1;
}else{
    $page = $_GET['page'];
}
$url = 'category.php?id='. $id_category . '&page=';
$offset = ($page-1)*24;
?>
<!doctype html>
<html lang="pl">
<?php echo get_html_head(); ?>
<body class="bg-light">
<?php echo get_html_main_menu(is_logged()); ?>
<?php echo get_html_sub_menu(get_category()); ?>
<hr>
<h1 class="w-100 text-center">Najnowsze tapety</h1>
<?php echo get_html_wallpapers(get_category_wallpaper($id_category,$offset,24)); ?>
<?php echo get_html_pagination($page, $page_count, $url); ?>
<?php echo get_html_footer(); ?>
</body>
</html>

