<?php
require '../lib/functions.php';
$submit = $_POST['submit'];
$login = strip_tags($_POST['login']);
$pass_first = strip_tags($_POST['pass_first']);
$pass_second = strip_tags($_POST['pass_second']);
$password_first = hash("sha1", $pass_first);
$password_second = hash("sha1", $pass_second);
if(checkLogin($login)){
    echo "<script>alert('Taki użytkownik już istnieje!');</script>";
    echo "<script>location.href = '/admin_add_user.php'</script>";
}else {
    if (isset($submit) && $pass_first == $pass_second) {
        $pdo = get_connection();
        $query = "INSERT INTO users (login,password,second_password) VALUES (:loginVal,:passwordVal,:second_passwordVal)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam('loginVal', $login);
        $stmt->bindParam('passwordVal', $password_first);
        $stmt->bindParam('second_passwordVal', $password_second);
        $stmt->execute();
        header('Location: /admin_users.php');
    } else {
        header('Location: /admin_add_user.php');
    }
}