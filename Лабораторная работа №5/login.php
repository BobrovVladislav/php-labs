<?php
include 'connect.php';

$login = $_POST['name'];
$password = md5($_POST['password']);


$result = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");


$user = $result->fetch_assoc();

if (mysqli_num_rows($result) > 0) {
   
$_SESSION['user'] = [
    "id"=> $user['id'],
    "login"=> $user['login'],
    "background"=>  $user['background']
];
header('Location: index.php');
} else {
    echo '<h3 class="text-center">Неверный логин или пароль</h3>';
    exit();
}


