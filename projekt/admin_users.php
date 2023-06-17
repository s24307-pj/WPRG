<?php
require 'lib/functions.php';
require 'lib/render_functions.php';
$headers = ['ID','DATA','NAZWA','EDYTUJ','USUŃ'];
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
    <a href="/admin_add_user.php" class="d-flex justify-content-center fs-4">Dodaj użytkownika:</a>
    <?php echo get_html_table($headers,get_users(),'/edit_user.php?id=','/admin/delete_users.php?id=');?>
    <?php echo get_html_footer(); ?>
    </body>
    </html>
<?php
