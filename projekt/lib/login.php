<?php
require 'functions.php';
$login = $_POST["login"];
$password = $_POST["password"];
$user_id = login($login, hash("sha1", $password));
if (is_array($user_id)) {
    $_SESSION['id_user'] = $user_id['id_user'];
    $response['message'] = 'Zalogowano';
    $response['success'] = TRUE;
} else {
    $response['message'] = 'Bledne dane logowania';
    $response['success'] = FALSE;
}
echo json_encode($response);




