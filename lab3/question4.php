<?
function isURLAvailible($url)
   {
       //проверка URL
       if(!filter_var($url, FILTER_VALIDATE_URL)){
               return false;
       }

       //инициализация cURl
       $curlInit = curl_init($url);
       curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
       curl_setopt($curlInit,CURLOPT_HEADER,true);
       curl_setopt($curlInit,CURLOPT_NOBODY,true);
       curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

       //получение ответа
       $response = curl_exec($curlInit);
       curl_close($curlInit);
       if ($response) return true;
       return false;
   }

   ?>