<?php
require '../lib/functions.php';
$id = $_GET['id'];
if(isset($_POST['delete'])){
    $query= 'DELETE FROM category WHERE id_category=:idVal';
    $pdo = get_connection();
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('idVal',$id);
    $stmt->execute();
    header('Location: ../admin_categories.php');
}