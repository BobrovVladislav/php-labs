<?php
$qName = $_POST['qName'];
$qBirdYear = $_POST['qBirdYear'];
$programmingLanguage = $_POST['programmingLanguage'];

function counterProgrammingLanguage($programmingLanguage){
    $programmingLanguageArray = array('c#', 'c++', 'javascript', 'java', 'ruby', 'python', 'php', 'dart', 'flutter', 'swift', 'kotlin', 'f#', 'pascal', 'visualbasic');
    $countProgrammingLanguage = 0;
    for($i = 0;$i <= count($programmingLanguageArray);$i++){
        if(strpos($programmingLanguage, $programmingLanguageArray[$i])){
            $countProgrammingLanguage += 1;
        }
        else{
            continue;
        }
    }
    return $countProgrammingLanguage;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета пользователя</title>
</head>

<body>
    <p><b>Ваши данные:</b></p>
    <p>
        <?
        if (!empty($qName) && !empty($qBirdYear) && !empty($programmingLanguage)) {
            $userYear = 2023 - $qBirdYear;

            echo "<div>
            <p>Ваше имя: $qName </p>
            <p>Вам: $userYear лет</p>
            <p>Вы знаете ". counterProgrammingLanguage($programmingLanguage) ." языков програмирования</p>
            </div>";
        } else {
            echo 'Введите данные правильно!';
        }
        ?>
    </p>
</body>

</html>