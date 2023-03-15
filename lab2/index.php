<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №2</title>
</head>

<body>
    <section>
        <h1>Задание 2</h1>

        <form method="POST">
            <input name="name" type="text" placeholder="Введите ФИО">
            <input name="address" type="text" placeholder="Введите адрес">
            <input name="email" type="text" placeholder="Введите Email">
            <input name="password" type="password" placeholder="Введите пароль">
            <button>Отправить</button>
        </form>
        <? include './question2.php' ?>
    </section>

    <section>
        <h1>Задание 3</h1>
        <? include './question3.php' ?>

        <form method="POST">
            <input name="password2" type="password" placeholder="Введите пароль">
            <button>Отправить</button>
        </form>

        <div style="margin-top: 25px">
            Статус: <? echo checkPassword($password) ?>
        </div>
    </section>

    <section>
        <h1>Задание 4</h1>

        <form method="POST" style="margin-bottom: 25px">
            <input name="to" type="text" placeholder="Введите ваше имя">
            <input name="subject" type="email" placeholder="Введите ваше email">
            <textarea name="message" cols="30" rows="10"></textarea>
            <button name="mail_ok">submit</button>
        </form>
        <? include './question4.php' ?>
    </section>

    <section>
        <h1>Задание 5</h1>
        <? include './question5.php'?>

        <form method="POST" >
            <input name="num1" type="text" placeholder="Введите первое число">
            <input name="char" type="text" placeholder="Введите знак">
            <input name="num2" type="text" placeholder="Введите второе число">
            <button>Посчитать</button>
        </form>

        <p>
            Результат: <? echo calculation($num1, $char, $num2) ?>
        </p>
    </section>

    <section>
        <h1>Задание 6</h1>

        <form action="question6.php" method="POST">
            <h3>Введите данные о пользователе</h3>
            <input type="text" name="qName" placeholder="Введите имя">
            <input type="date" name="qBirdYear" placeholder="Введите год рождения">
            <textarea type="text" name="programmingLanguage" cols="30" rows="10">Сколько вы знаете языков программирования</textarea>
            <button>Отправить</button>
        </form>
    </section>

    <section>
        <h1>Задание 7</h1>
        <? include './question7.php' ?>

        <form method="POST">
        <div class="questions">
            <div class="one">
                <p>Перевод программ с языка высокого уровня на язык более низкого уровня обеспечивает программа:</p>
                <input type="radio" name="compiler" value="Паскаль">Паскаль</input>
                <input type="radio" name="compiler" value="Ассемблер">Ассемблер</input>
                <input type="radio" name="compiler" value="Компилятор">Компилятор</input>
            </div>  
            <div class="two">
                <p>Как называется алгоритм, в котором действия выполняются друг за другом, не повторяясь:</p>
                <input type="radio" name="algorithms" value="Циклическим">Циклическим</input>
                <input type="radio" name="algorithms" value="Разветвленным">Разветвленным</input>
                <input type="radio" name="algorithms" value="Линейным">Линейным</input>
            </div>  
            <div class="three">
                <p>Оператор цикла с постусловием:</p>
                <input type="radio" name="cycles" value="For">For</input>
                <input type="radio" name="cycles" value="While…do">While…do</input>
                <input type="radio" name="cycles" value="Do...while">Do...while</input>
            </div>  
        </div>
        <button style="margin-top: 25px;">Проверить</button>
        </form>
        <p>
            Результат: <? echo counter() ?> правильных ответа
        </p>
    </section>
</body>

</html>