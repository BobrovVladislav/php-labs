<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container col-6 mx-auto">

        <section>
            <h1 class="text-center">Задание 1</h1>
            <h2 align=center style="color:green">Магазин "ПОДАРКИ"</h2>
            <p>Адрес: Лесная ул., д. 2</p>
            <p>Транспорт: трамваи 7, 23, автобусы 56, 93</p>
            <script src="primJs.js"></script>
        </section>

        <section>
            <h1 class="text-center">Задание 2</h1>
            <h2>Изменить изображение и цвет подписи</h2>
            <div class="task2">
                <div class="image__wrapper text-center">
                    <img data-info="0" width="100px" height="100px" class="image" src="" alt="Image">
                    <p style="color: orange" class="title text-center mt-1"></p>
                </div>
            </div>
            <script src="question2.js"></script>
        </section>

        <section>
            <h1 class="text-center">Задание 3</h1>
            <h2>Заказ мебели</h2>
            <form class="form сol-3 mx-auto" action="question3.php" method="POST">

                <select class="form-control select__furniture" name="furniture">
                    <option value="шкаф">шкаф</option>
                    <option value="стол">стол</option>
                    <option value="сервант">сервант</option>
                </select>

                <select class="form-control select__materials mb-2 mt-2" name="materials">
                    <option value="дуб">дуб</option>
                    <option value="орех">орех</option>
                    <option value="бук">бук</option>
                </select>

                <input type="number" name="quantity" class="form-control quantity" required>

                <button class="button__submit btn btn-primary mt-2">Отправить</button>

            </form>
        </section>

        <section>
            <h1 class="text-center">Задание 4</h1>
            <h2>Тригонометрические функции</h2>

            <form class="trigForm">
                <div>
                    <h3>Угол в градусах</h3>
                    <input class="ugol form-control" type="number">
                </div>
                <div>
                    <h3>Функция</h3>
                    <select class="select__function form-control">
                        <option value="sin">синус</option>
                        <option value="cos">косинус</option>
                        <option value="tan">тангенс</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-primary mt-2">Вычислить</button>
                </div>
            </form>

            <div class="result__trig_form">
                <p class="result__trig_text"></p>
            </div>

            <script src="question4.js"></script>
        </section>

        <section>
            <h1 class="text-center">Задание 5</h1>
            <h2>Просмотр фотографий</h2>

            <form class="form_image">
                <select class="select__image form-control">
                    <option value="озеро">озеро</option>
                    <option value="горы">горы</option>
                    <option value="море">море</option>
                    <option value="река">река</option>
                </select>
            </form>
            <img width="100px" height="100px" class="image__select mt-2" src="" alt="">
            <script src="question5.js"></script>
        </section>

        <section>
            <h1 class="text-center">Задание 6</h1>
            <h2>Построение элипса</h2>
            <style>
                #canvas {
                    border: 1px solid gray;
                    width: 100px;
                    height: 100px;
                }
            </style>
            <input class="form-control" type="number" id="a">
            <input class="form-control mt-2 mb-2" type="number" id="b">
            <button id="button" class="btn btn-primary mt-2">Нарисовать</button>
            <div class="mt-3">
                <canvas id='canvas' width='100' hight='100'></canvas>
            </div>

            <script src="question6.js"></script>
        </section>

        <section>

            <h1 class="text-center">Задание 7</h1>
            <h2>Перемещение квадрата по кругу</h2>
            <style>
                #square-container {
                    height: 350px;
                }

                #square {
                    width: 50px;
                    height: 50px;
                    position: absolute;
                    background: black;
                    margin-top: 1650px;
                }
            </style>
            <div id="square-container">
                <div id="square"></div>
            </div>

            <script src="question7.js"></script>
        </section>

        <section>
        <script src="question8.js"></script>
            <h1 class="text-center">Задание 8</h1>
            <h2>Имя браузера</h2>
            <p id="p1"></p>      
            <button id="btn-browser" class="btn btn-primary mt-2">Получить имя</button>

         
        </section>

        <section>
            <h1 class="text-center">Задание 9</h1>
            <h2>Значения тригонометрических функций</h2>

            <input type="text" name="h" onchange=isNumb(this)>

            <script src="question9.js"></script>
        </section>

        <section>
            <h1 class="text-center">Задание 10</h1>
            <h2>Учёт поступления товаров</h2>

            <style>
                table.iksweb {
                    width: 100%;
                    border-collapse: collapse;
                    border-spacing: 0;
                    height: auto;
                }

                table.iksweb,
                table.iksweb td,
                table.iksweb th {
                    border: 1px solid #595959;
                }

                table.iksweb td,
                table.iksweb th {
                    padding: 3px;
                    width: 30px;
                    height: 35px;
                }

                table.iksweb th {
                    background: #347c99;
                    color: #fff;
                    font-weight: normal;
                }
            </style>

            <table class="iksweb">
                <tbody class="table__body">
                    <!-- Заголовки -->
                    <tr>
                        <td align="center"><b>Наименование товара</b></td>
                        <td align="center"><b>Цена за единицу</b></td>
                        <td align="center"><b>Количество</b></td>
                        <td align="center"><b>Стоимость</b></td>
                    </tr>
                </tbody>
            </table>

            <script src="question10.js"></script>
        </section>
    </div>
</body>

</html>