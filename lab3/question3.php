<?
     if (isset($_POST['btn-3'])) {

    if($_POST['name'] == "" || $_POST['tel1'] == ""){
    echo '<h3 class="text-center">Заполните все данные</h3>';
}
        $file = 'tel.txt';
        $data = file_get_contents($file);
        $data = 'Имя:'.$_POST['name']."\n".'Телефон 1:'.$_POST['tel1']."\n".'Телефон 2:'.$_POST['tel2']."\n\n";
        file_put_contents($file, $data, FILE_APPEND);
}
