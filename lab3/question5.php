<?

$city = "London"; // город. Можно и по-русски написать, например: Брянск
$country = "FR"; // страна
$mode = "json"; // в каком виде мы получим данные json или xml
$units = "metric"; // Единицы измерения. metric или imperial
$lang = "ru"; // язык
$countDay = 7; // количество дней. Максимум 14 дней
$appID = "c4854b5317a3e2ad5ff8d0c3f2d3a706"; // Ваш APPID
  
// формируем урл для запроса
$url = "http://api.openweathermap.org/data/2.5/forecast?q=$city,$country&cnt=$countDay&lang=$lang&units=$units&appid=$appID";
// делаем запрос к апи
$data = @file_get_contents($url);
// если получили данные
if($data){
    // декодируем полученные данные
    $dataJson = json_decode($data);
    // получаем только нужные данные
    $arrayDays = $dataJson->list;
    // выводим данные
    foreach($arrayDays as $oneDay){
        echo "Утром: " . $oneDay->temp->morn . "<br/>"; 
        echo "Днем: " . $oneDay->temp->day . "<br/>";   
        echo "Вечером: " . $oneDay->temp->eve . "<br/>";    
        echo "Ночью: " . $oneDay->temp->night . "<br/>";    
        echo "Скорость ветра: " . $oneDay->speed . "<br/>";
        echo "Погода: " . $oneDay->weather[0]->description . "<br/>";
        echo "Давление: " . $oneDay->pressure . "<br/>";
        echo "Влажность: " . $oneDay->humidity . "<br/>";
        echo "<hr/>";
    }
}else{
    echo "<h3 class='text-center'>Сервер не доступен!</h3>";
}

?>