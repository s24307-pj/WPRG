<?php
require 'lib/functions.php';
$id = $_GET['id'];
$submit = $_POST['submit'];
$date = date('Y-m-d');
$name = strip_tags($_POST['category']);
if (isset($submit)) {
    $pdo = get_connection();
    $query = 'UPDATE `category` SET `category_name`=:nameVal, date=:dateVal WHERE `id_category`=:idVal';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('idVal', $id);
    $stmt->bindParam('nameVal', $name);
    $stmt->bindParam('dateVal', $date);
    $stmt->execute();

    header('Location: ../admin_categories.php');
}
?>
