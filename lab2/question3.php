<?php 
    $password = $_POST["password2"];

    function checkPassword($password) {
    $validPassword = 'monolit';

    if($password == $validPassword) {
        header('Location: correctPassword.php'); 
        die();
    } else if($password == '') {
        return "введите пароль";
    } else {
        return "пароль не верный";
    }
    }
   
?>