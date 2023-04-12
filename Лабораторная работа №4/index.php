<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаборатоная работа №4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <section>
            <h1 class="text-center">Задание 2</h1>
            <form class="col-6 mx-auto" action="index.php" method="POST">
                <h2>Список продуктов</h2>
                <input name="name" type="text" class="form-control" placeholder="Введите название">
                <input name="price" type="text" class="form-control mb-2 mt-2" placeholder="Введите цену">
                <input name="detail" type="text" class="form-control" placeholder="Введите описание">

                <button name="btn-2" type="submit" class="btn btn-primary mt-2">Добавить</button>
            </form>

            <?php
            include "./question2.php";
            ?>
        </section>

        <section>
            <h1 class="text-center">Задание 3</h1>
            <form class="col-6 mx-auto" action="index.php" method="POST">
                <h2>Список продуктов со странами производителями</h2>
                <input name="name" type="text" class="form-control" placeholder="Введите название">
                <input name="price" type="text" class="form-control mb-2 mt-2" placeholder="Введите цену">
                <input name="detail" type="text" class="form-control mb-2" placeholder="Введите описание">
                <input name="country" list="countries" type="text" class="form-control" placeholder="Введите страну">
                <datalist id="countries">
                    <option value="Россия" />
                    <option value="Япония" />
                    <option value="Америка" />
                    <option value="Китай" />
                </datalist>

                <button name="btn-3" type="submit" class="btn btn-primary mt-2">Добавить</button>
            </form>

            <?php
            include "./question3.php";
            ?>
        </section>
        <section>
            <h1 class="text-center">Задание 4</h1>
            <form class="col-6 mx-auto" action="index.php" method="POST">
                <h2>Отправьте письмо</h2>
                <input name="adress" type="email" class="form-control" placeholder="Введите email">
                <textarea name="txt" type="text" class="form-control mb-2 mt-2" rows="3">Введите ваше сообщение</textarea>

                <button name="btn-4" type="submit" class="btn btn-primary mt-2">Добавить</button>
            </form>

            <?php
            include "./question4.php";
            ?>
        </section>

        <section>
            <h1 class="text-center">Задание 5</h1>
            <form class="col-6 mx-auto" action="index.php" method="POST">
                <h2>Книжный каталог</h2>
                <input name="name" type="text" class="form-control mb-2" placeholder="Введите название">
                <input name="author" type="text" class="form-control" placeholder="Введите автора">

                <div class="card col-6 p-2 mt-3">
                <h3>Соавторы</h3>
                <input name="co-author1" type="text" class="form-control" placeholder="Введите соавтора(при наличии)">
                <input name="co-author2" type="text" class="form-control mb-2 mt-2" placeholder="Введите соавтора(при наличии)">
                <input name="co-author3" type="text" class="form-control" placeholder="Введите соавтора(при наличии)">
                </div>
                <button name="btn-5" type="submit" class="btn btn-primary mt-2">Добавить</button>
                <button name="btn-6" type="submit" class="btn btn-secondary mt-2">Получить список книг с 3 соавторами</button>
            </form>

            <?php
            include "./question5.php";
            ?>
        </section>
</body>

</html>