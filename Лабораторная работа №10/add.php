<?php
// Добавим новый узел в имеющийся XML
$sXML = new SimpleXMLElement($nXML2); // загрузка в XML
$newchild = $sXML→addChild("product");
// Добавление параметров записи
$newchild→addAttribute("pid", 328);
$newchild→addChild("name", "Банан");
$newchild→addChild("price", "$3.00");
$newchild→addChild("discount", "0.3 %");
echo $sXML→asXML();
?>
