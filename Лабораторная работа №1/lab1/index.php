<?php

//Задание 1
$product1 = "book";
$product2 = "food";
$product3 = "notebook";

$price1 = 40;
$price2 = 20;
$price3 = 250;

$average = ($price1 + $price2 + $price3) / 3;

//Задание 2
$max_price = $price1;
$max_product = $product1;

$min_price = $price1;
$min_product = $product1;

//Задание 3
function max_price($product1, $price1, $product2, $price2, $product3, $price3)
{
    $max_price = $price1;
    $max_product = $product1;
    if ($max_price < $price2) {
        $max_price = $price2;
        $max_product = $product2;
        if ($max_price < $price3) {
            $max_price = $price3;
            $max_product = $product3;
        }
        return "<p>самый дорогой товар - $max_product (он стоит $max_price $)</p>";
    }
}

//Задание 4
function whileСycle()
{
    $price = 100;
    $inflation = 0.1;
    while ($price < 150) {
        echo "<p>Цена товара за год " . round($price) . " $</p>";
        $price += ($price * $inflation);
        $inflation += 0.035;
    }
}

function forCycle()
{
    $price = 100;
    $inflation = 0.1;
    for ($i = 0; $i <= 10; $i++) {
        if ($i == 0) {
            $price = ($price * $inflation) + $price;
            $inflation += 0.035;
            echo "<p>Цена товара в конце года: " . round($price) . " $ (Инфляция: $inflation)) </p>";
        } else if ($price < 170) {
            echo "<p>Цена товара через $i лет: " . round($price) . " $ (Инфляция: $inflation))</p>";
            $price += ($price * $inflation);
            $inflation += 0.035;
        } else {
            echo "<p>Цена товара через $i лет: " . round($price) . " $ (Инфляция: $inflation)</p>";
            $price += ($price * $inflation);
            $inflation += -0.035;
        }
    }
}

// Задание 5
$items = array("Телевизор", "Компьютер", "Ноутбук", "Смартфон", "Планшет");
array_push($items, "Роутер", "Адаптер питания");
function arrayWrite($array)
{
    for ($i = 0; $i < count($array); $i++) {
        echo "<p>$array[$i]</p>";
    }
}

//Задание 6 
$itemsArray = ["Стол" => 120, "Стул" => 75, "Дверь" => 200];
$itemsArray["Кран"] = 40;
$itemsArray["Ручка"] = 25;

function sumOrders($ordersArrays)
{
    $summa = array_sum($ordersArrays);
    return $summa;
}

function increasingArray($ordersArrays)
{
    asort($ordersArrays);
    foreach ($ordersArrays as $key => $value) {
        echo "Товар: " . $value
            . " Цена: " . $key . "<br>";
    }
}

function decreasingArray($ordersArrays)
{
    arsort($ordersArrays);
    foreach ($ordersArrays as $key => $value) {
        echo "Товар: " . $value
            . " Цена: " . $key . "<br>";
    }
}

function alphabeticalArray($ordersArrays)
{
    ksort($ordersArrays);
    foreach ($ordersArrays as $key => $value) {
        echo "Товар: " . $value
            . " Цена: " . $key . "<br>";
    }
}
?>

<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <section>
        <h1>Задание 1</h1>
        <?
        echo "<p>$product1 =>  $price1 $</p>";
        echo "<p>$product2 =>  $price2 $</p>";
        echo "<p>$product3 =>  $price3 $</p>";
        ?>

        <hr>

        <table border="1">
            <thead>
                <tr>
                    <th>Товар</th>
                    <th>Цена</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><? echo $product1 ?></td>
                    <td><? echo $price1 . ' $' ?></td>
                </tr>
                <tr>
                    <td><? echo $product2 ?></td>
                    <td><? echo $price2 . ' $' ?></td>
                </tr>
                <tr>
                    <td><? echo $product3 ?></td>
                    <td><? echo $price3 . ' $' ?></td>
                </tr>
            </tbody>
        </table>

        <p>Средняя цена товаров = <? echo  round($average) ?> $</p>
    </section>

    <section>
        <h1>Задание 2</h1>
        <p>
            <?
            if ($max_price < $price2) {
                $max_price = $price2;
                $max_product = $product2;
                echo "самый дорогой товар - $max_product (он стоит $max_price $)";
            } elseif ($max_price < $price3) {
                $max_price = $price3;
                $max_product = $product3;
                echo "самый дорогой товар - $max_product (он стоит $max_price $)";
            } else {
                echo "самый дорогой товар - $max_product (он стоит $max_price $)";
            } ?>
        </p>
        <p>
            <?
            if ($min_price > $price2) {
                $min_price = $price2;
                $min_product = $product2;
                echo "самый дешёвый товар - $min_product (он стоит $min_price $)";
            } elseif ($min_price > $price3) {
                $min_price = $price3;
                $min_product = $product3;
                echo "самый дешёвый товар - $min_product (он стоит $min_price $)";
            } else {
                echo "самый дешёвый товар - $min_product (он стоит $min_price $)";
            }
            ?></p>
    </section>

    <section>
        <h1>Задание 3</h1>
        <?
        echo max_price("чай", 30, "кофе", 35, "молоко", 777);
        echo max_price("липтон", 30, "кола", 35, "пепси", 220);
        echo max_price("сухарики", 30, "чипсы", 35, "гренки", 157);
        ?>

        <h3><b>Проверка пароля</b></h3>

        <form action="question3.php" method="post">
            <input type="password" name="password1">
            <input type="submit" name="send">
        </form>

    </section>

    <section>
        <h1>Четвёртое задание</h1>

        <h3><b>Цикл while</b></h3>
        <p>
            <?
            whileСycle();
            ?>
        </p>
        <h3><b>Цикл for</b></h3>
        <p>
            <?
            forCycle();
            ?>
        <p>
    </section>

    <section>
        <h1>Пятое задание</h1>
        <h3><b>Исходный массив</b></h3>
        <p>
            <?
            arrayWrite($items);
            ?>
        </p>

        <h3><b>Кол-во товаров - <? echo count($items) ?> </b></h3>

        <h3><b>Отсортированный массив</b></h3>
        <p>
            <?
            sort($items);
            arrayWrite($items);
            ?>
        </p>
    </section>

    <section>
        <h1>Шестое задание</h1>
        <h3><b>Исходный массив</b></h3>
        <p>
            <?
            foreach ($itemsArray as $key => $value) {
                echo "<span>Товар: $key </span> <br> <b> Цена: $value </b> <br>";
            }
            ?>
        </p>
        <p>
            <?
            echo "<p><b>Кол-во товаров: </b>" . count($itemsArray) . "</p>";

            echo "<p><b>Сумарная стоимость товаров: </b>" . sumOrders($itemsArray) . "</p>";

            echo "<p><b>Массив в порядке возрастания цены: </b>" . "</p>";
            increasingArray($itemsArray);

            echo "<p><b>Массив в порядке убывания цены: </b>" . "</p>";
            decreasingArray($itemsArray);

            echo "<p><b>Массив товаров в алфавитном порядке: </b>" . "</p>";
            alphabeticalArray($itemsArray)
            ?>
        </p>
    </section>

    <section>
        <a href="question7.php">
            <h1>Седьмое задание</h1>   
        </a>
    </section>

    <section>
        <h1>Восьмое задание</h1>
        <div>
            <?
            echo '<table border=1>';
            for ($i = 0; $i <= 255; $i += 50) {
                echo '<tr>';

                for ($j = 0; $j <= 255; $j += 50) {
                    for ($k = 0; $k <= 255; $k += 50) {
                        echo '<td style="background-color:RGB(' . $i . ', ' . $j . ', ' . $k . ');"> rgb(' . $i . ', ' . $j . ', ' . $k . ')</td>';
                    }
                }

                echo '</tr>';
            }
            echo '</table>';
            ?>
        </div>
    </section>

    <section>
        <h1>Девятое задание</h1>
        <div>
            <?
            $n = 50;
            do {
                $min = rand(0, 30);
                $max = rand(0, 30);
                $sum = $min + $max;
                echo $sum . "<br>";
            } while ($sum <= $n)
            ?>
        </div>
    </section>
</body>

</html>