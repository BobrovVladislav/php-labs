<?php

include "./connect.php";

if (isset($_POST['btn-2'])) {
    if($_POST['name'] == "" || $_POST['price'] == "" || $_POST['detail'] == ""){
        echo '<h3 class="text-center">Заполните все данные</h3>';
    } else {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $detail = $_POST['detail'];
       
        $mysqli->query("INSERT INTO `products`(`name`,`price`,`detail`) VALUES('$name','$price','$detail')");
       
        productView();
       
        $mysqli->close();
    }
}


function productView(){
    include "./connect.php";

    $data = $mysqli->query("SELECT `products`.`name`,`products`.`price`,`products`.`detail` FROM `products`");

    $products = $data->fetch_all();
    foreach ($products as $product){

        echo 
        '
        <div class="card col-4 mx-auto p-2 mb-2">
            <p  class="card-text">Наименование: '.$product[0].'</p>
            <p  class="card-text">Цена: '.$product[1].'</p>
            <p  class="card-text">Описание: '.$product[2].'</p>
        </div>
        ';
    }
}

?>
