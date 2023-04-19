<?php
include 'connect.php';

$id = $_COOKIE['id'];

$background = $_POST['background'];
$login = $_POST['name'];

$mysqli->query("UPDATE `users` SET `login`='$login', `background`='$background'  WHERE `users`.`id` = '$id'");


setcookie('login', $user['login'], time() + 40, "/");
setcookie('background', $user['background'], time() + 40, "/");

$mysqli->close(); 
?>
