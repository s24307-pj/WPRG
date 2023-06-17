<?php
require '../lib/functions.php';
$id = $_GET['id'];
if (isset($_POST['delete'])) {
    $pdo = get_connection();
    $query = 'DELETE FROM users WHERE id_user=:idVal';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('idVal', $id);
    $stmt->execute();
    header('Location: ../admin_users.php');
}
?>

