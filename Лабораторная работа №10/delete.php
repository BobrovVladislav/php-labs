<?php
// Удаление продукта Манго
// загрузим оригинальный формат XML
$productId = 315;
$dom = new DomDocument;
$dom→loadXML($nXML2);
// Найдем элемент который необходимо удалить
$xpath = new DOMXpath($dom);
$nodelist = $xpath→query("/products/product[@pid={$productId}]");
$oldnode = $nodelist→item(0);
// Удаляем элемент
$oldnode→parentNode→removeChild($oldnode); echo $dom→saveXML();
?>