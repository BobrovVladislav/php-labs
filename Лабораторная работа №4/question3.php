<?php

include "./connect.php";

if (isset($_POST['btn-3'])) {

    if ($_POST['name'] == "" || $_POST['price'] == "" || $_POST['detail'] == "" || $_POST['country'] == "") {
        echo '<h3 class="text-center">Заполните все данные</h3>';
    } else {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $detail = $_POST['detail'];
        $country = $_POST['country'];

        $countries = $mysqli->query("SELECT * FROM `countries`");

        foreach ($countries as $countryData) {
            if ($countryData['name_c'] == $country) {
                $country = $countryData['id_c'];
            }
        }

        $mysqli->query("INSERT INTO `products`(`name`,`price`,`detail`,`country`) VALUES('$name','$price','$detail','$country')");

        productView3();

        $mysqli->close();
    }
}


function productView3()
{
    include "./connect.php";

    $data = $mysqli->query("SELECT `products`.`name`,`products`.`price`,`products`.`detail`,`countries`.`name_c` FROM `products`, `countries` WHERE `products`.`country`=`countries`.`id_c`");

    $products = $data->fetch_all();
    foreach ($products as $product) {
        echo
        '
        <div class="card col-4 mx-auto p-2 mb-2">
            <p  class="card-text">Наименование: ' . $product[0] . '</p>
            <p  class="card-text">Цена: ' . $product[1] . '</p>
            <p  class="card-text">Описание: ' . $product[2] . '</p>
            <p class="card-text">Производитель: ' . $product[3] . '</p>
        </div>
        ';
    }
}
