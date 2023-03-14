<?php $userPassword = $_POST["password1"];
function passwordValidator($password)
{
    $passwordValid = 'monolit';

    if ($password == $passwordValid) {
        echo "<p>Пароль верный: $password</p>";
    } else {
        echo "<p>Ошибка в пароле: $password</p>";
    }
}

function passwordValidatorChanged($password)
{
    $passwordValid = 'monolit';

    if ($password == $passwordValid) {
        return "<p>Пароль верный: $password</p>";
    } else {
        return "<p>Ошибка в пароле: $password</p>";
    }
}

passwordValidator($userPassword)
?>