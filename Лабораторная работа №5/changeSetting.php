<?php
include 'connect.php';

$id = $_SESSION['user']['id'];

$background = $_POST['background'];
$login = $_POST['name'];

$mysqli->query("UPDATE `users` SET `login`='$login', `background`='$background'  WHERE `users`.`id` = '$id'");


$_SESSION['user'] = [
    "login"=> $login = $_POST['name'],
    "background"=> $_POST['background']
];

header('Location: index.php');

$mysqli->close(); 
?>
