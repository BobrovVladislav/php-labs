<?php
/*
 Перезапись узлов дерева XML формата.
*/
$productId = 314;
$parent = new DomDocument;
// создаем новый элемент дома product
$parent_node = $parent→createElement('product');
// Добавляем атрибут
$attribute = $parent→createAttribute("pid");
// устанавливаем значение
$attribute→value = $productId;
$parent_node→appendChild($attribute);
// Добавляем дочерний элементы
$parent_node→appendChild($parent→createElement('name', "Яблоко"));
$parent_node→appendChild($parent→createElement('price', "$2.00"));
$parent_node→appendChild($parent→createElement('discount', "1 %"));
// Вставляем созданные элементы в создаваемый 'product'
$parent→appendChild($parent_node);
// Загружаем оригинальный XML формат
$dom = new DomDocument;
$dom→loadXML($nXML);
// Находим имеющийся элемент с pid = 314
$xpath = new DOMXpath($dom);
$nodelist = $xpath→query("/products/product[@pid={$productId}]");
$oldnode = $nodelist→item(0);
// Импортируем созданый ранее элемент в текущее дерево
$newnode = $dom→importNode($parent→documentElement, true);
// заменяем страрый элемент на новый
$oldnode→parentNode→replaceChild($newnode, $oldnode);
// сохраняем XML
echo $dom→saveXML();
?>