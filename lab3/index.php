<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <section>
            <h1 class="text-center">Задание 2</h1>
            <form class="col-6 mx-auto" action="index.php" method="GET">
                <h2>Как вы оцениваете наш магазин?</h2>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vote" value="5" checked>отлично</input>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vote" value="4">хорошо</input>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vote" value="3">удовлетворительно</input>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vote" value="2">плохо</input>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Проголосовать</button>
            </form>

            <? include "./question2.php" ?>
        </section>

        <section>
            <h1 class="text-center">Задание 3</h1>
            
            <form class="col-6 mx-auto" action="index.php" method="POST">
                <h2>Телефонный справочник</h2>
                <input name="name" type="text" class="form-control" placeholder="Введите имя">
                <input name="tel1" type="text" class="form-control mb-2 mt-2" placeholder="Введите номер">
                <input name="tel2" type="text" class="form-control" placeholder="Введите дополнительный номер (при наличии)">

                <button name="btn-3" type="submit" class="btn btn-primary mt-2">Добавить</button>
            </form>

            <? include "./question3.php" ?>
        </section>

        <section>
            <h1 class="text-center">Задание 4</h1>
            
            <form class="col-6 mx-auto" action="index.php" method="POST">
                <h2>Проверьте доступность сервера</h2>
                <input name="url" type="text" class="form-control" placeholder="Введите желаемый URL">

                <button name="btn-4" type="submit" class="btn btn-primary mt-2">Проверить</button>
            </form>

            <? include "./question4.php";
           
                $URL = $_POST['url'];

                if(isURLAvailible($URL)){
                    echo '<h3 class="text-center">Этот сайт доступен!</h3>';
                } else {
                    echo '<h3 class="text-center">К сожалению, этот сайт не доступен(</h3>';
                }           
            ?>
            
        </section>

        
        <section class="col-6 mx-auto">
            <h1 class="text-center">Задание 5</h1>
        
                <h2>Прогноз погоды</h2>
            
            <? include "./question5.php" ?>
        </section>
    </div>
</body>

</html>