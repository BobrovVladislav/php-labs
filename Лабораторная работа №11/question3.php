<?php 
    $furniture = $_POST['furniture'];
    $materials = $_POST['materials'];
    $quantity = $_POST['quantity'];

    echo '<b>Ваш заказ принят</b> <br>';
    echo "Заказано изделие – $furniture <br>";
    echo "Материал – $materials <br>";
    echo "Количество – $quantity <br>";
?>