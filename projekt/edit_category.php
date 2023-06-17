<?php
require 'lib/functions.php';
require 'lib/render_functions.php';
$url ='update_category.php?id='.$_GET['id'];
?>
<!doctype html>
<html lang="pl">
<?php echo get_html_head(); ?>
<body class="bg-light">
<?php echo get_html_main_menu(is_logged()); ?>
<?php echo get_html_sub_menu(get_category()); ?>
<hr>
<?php echo get_html_admin_menu(get_menu(),is_logged()); ?>
<?php if(is_logged()){?>
<h1 class="w-100 text-center">Edytuj kategorię:</h1>
<?php echo create_html_category($url);?>
<?php }
else{
    echo "<div class='block fs-1'>Zaloguj się aby kontynuować! </div>";
    }
?>
<?php echo get_html_footer(); ?>
</body>
</html>
