<?php

include "./connect.php";

if (isset($_POST['btn-4'])) {

    if ($_POST['adress'] == "" || $_POST['txt'] == "") {
        echo '<h3 class="text-center">Заполните все данные</h3>';
    } else {

        $adress = $_POST['adress'];
        $txt = $_POST['txt'];
        $data = date('Y-m-d H:i');
        
        $mysqli->query("INSERT INTO `question4` (`adress`,`text`,`data`) VALUE('$adress', '$txt', '$data')");
    }
}
?>