<?php
require 'lib/functions.php';
require 'lib/render_functions.php';
if (isset($_POST['submit']) && isset($_POST['category'])){
    $submit = $_POST['submit'];
    $category = strip_tags($_POST['category']);
}
$headers = ['ID','DATA','NAZWA','EDYTUJ','USUŃ'];
$url = 'admin/add_category.php';
if(is_logged() == false){
    header('Location: /index.php');
}
?>
<!doctype html>
<html lang="pl">
<?php echo get_html_head(); ?>
<body class="bg-light">
<?php echo get_html_main_menu(is_logged()); ?>
<?php echo get_html_sub_menu(get_category()); ?>
<hr>
<?php echo get_html_admin_menu(get_menu(),is_logged()); ?>
<h1 class="w-100 text-center">Dodaj kategorię:</h1>
<?php echo create_html_category($url);?>
<?php echo get_html_footer(); ?>
</body>
</html>
