<?php
require '../lib/functions.php';
$submit = $_POST['submit'];
$category = strip_tags($_POST['category']);
if (isset($submit)) {
    $pdo = get_connection();
    $query = "INSERT INTO category (category_name) VALUES (:categoryVal)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('categoryVal', $category);
    $stmt->execute();
    header('Location: ../admin_categories.php');
}
