<?php
require '../lib/functions.php';
$submit = $_POST['submit'];
$file = $_FILES['file'];
$name = strip_tags($_POST['file_name']);
$description = strip_tags($_POST['file_description']);
$uploaddir = '../assets/images/';
$uploadfile = $uploaddir . basename($file['name']);
$id_cat = $_POST['select'];
$file_src = $file['name'];
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
    if (isset($submit) && isset($file)) {
        $image_data = getimagesize($uploaddir . $file_src);
        $image_data['size'] = $file['size'] / 1000;
        $pdo = get_connection();
        $query = "INSERT INTO wallpapers( image,name,description,id_category,size,width,height) VALUES (:fileVal,:nameVal,:descriptionVal,:idVal,:sizeVal,:widthVal,:heightVal)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam('fileVal', $file_src);
        $stmt->bindParam('nameVal', $name);
        $stmt->bindParam('descriptionVal', $description);
        $stmt->bindParam('idVal', $id_cat);
        $stmt->bindParam('sizeVal', $image_data['size']);
        $stmt->bindParam('widthVal', $image_data['0']);
        $stmt->bindParam('heightVal', $image_data['1']);
        $stmt->execute();
        header('Location: ../admin_wallpapers.php');
    }
}
