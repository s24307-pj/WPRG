<?php
require 'lib/functions.php';
$id = $_GET['id'];
$submit = $_POST['submit'];
$file = $_FILES['file'];
$name = strip_tags($_POST['file_name']);
$description = strip_tags($_POST['file_description']);
$uploaddir = 'assets/images/';
$uploadfile = $uploaddir . basename($file['name']);
$id_cat = $_POST['select'];
$file_src = $file['name'];
$date = date('Y-m-d');
if (move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)) {
    if (isset($submit) && isset($file)) {
        $image_data = getimagesize($uploaddir . $file_src);
        $image_data['size'] = $file['size'] / 1000;
        $pdo = get_connection();
        $query = 'UPDATE `wallpapers` SET `name`=:nameVal,`date`=:dateVal,`image`=:fileVal,`width`=:widthVal,`height`=:heightVal,`size`=:sizeVal,`description`=:descriptionVal,`id_category`=:id_catVal WHERE id=:idVal';
        $stmt = $pdo->prepare($query);
        $stmt->bindParam('fileVal', $file_src);
        $stmt->bindParam('nameVal', $name);
        $stmt->bindParam('descriptionVal', $description);
        $stmt->bindParam('idVal', $id);
        $stmt->bindParam('sizeVal', $image_data['size']);
        $stmt->bindParam('widthVal', $image_data['0']);
        $stmt->bindParam('heightVal', $image_data['1']);
        $stmt->bindParam('dateVal', $date);
        $stmt->bindParam('id_catVal', $id_cat);
        $stmt->execute();
        header('Location: ../admin_wallpapers.php');
    }
}
?>

