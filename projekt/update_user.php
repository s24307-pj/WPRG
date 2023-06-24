<?php
require 'lib/functions.php';
$id = $_GET['id'];
$date = date('Y-m-d');
$name = strip_tags($_POST['login']);
$pass_first = strip_tags($_POST['pass_first']);
$pass_second = strip_tags($_POST['pass_second']);
$submit = $_POST['submit'];
$password_first = hash("sha1", $pass_first);
$password_second = hash("sha1", $pass_second);
if(checkLogin($name)){
    echo "<script>alert('Taki użytkownik już istnieje!');</script>";
    echo "<script>location.href = '/admin_users.php' </script>";
}else {
    if (isset($submit) && $password_first == $password_second) {
        $pdo = get_connection();
        $query = 'UPDATE `users` SET `login`=:nameVal,`password`=:pass_firstVal,`second_password`=:pass_secondVal,`date`=:dateVal WHERE id_user=:idVal';
        $stmt = $pdo->prepare($query);
        $stmt->bindParam('idVal', $id);
        $stmt->bindParam('nameVal', $name);
        $stmt->bindParam('pass_firstVal', $password_first);
        $stmt->bindParam('pass_secondVal', $password_second);
        $stmt->bindParam('dateVal', $date);
        $stmt->execute();
        header('Location: ../admin_users.php');
    } else {
        header('Location: /edit_user.php?id=' . $id);
    }
}