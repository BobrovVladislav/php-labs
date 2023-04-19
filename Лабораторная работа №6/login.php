<?php
include 'connect.php';

$login = $_POST['name'];
$password = md5($_POST['password']);


$result = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");


$user = $result->fetch_assoc();

if (mysqli_num_rows($result) > 0) {

    setcookie('id', $user['id'], time() + 40, "/");
    setcookie('login', $user['login'], time() + 40, "/");
    setcookie('password', $user['password'], time() + 40, "/");
    setcookie('background', $user['background'], time() + 40, "/");

    header('Location: index.php');
} else {
    echo '<h3 class="text-center">Неверный логин или пароль</h3>';
    exit();
}
