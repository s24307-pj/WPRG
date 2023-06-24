<?php
require '../lib/functions.php';
$id = $_GET['id'];
if(isset($_POST['delete'])){
    $query= 'DELETE from wallpapers WHERE id=:idVal';
    $pdo = get_connection();
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('idVal',$id);
    $stmt->execute();
    header('Location:../admin_wallpapers.php');
}