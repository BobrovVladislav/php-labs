<? php
// Чтение XML формата
$rxml = new XMLReader(); // Создание элемента для чтения
$rxml→xml($nXML); // Загрузка XML, $nXML – строка в формате XML
// Переместиться к первому элементу customer while($rxml→read() &&
$rxml→name!== ('customer');
$amountSpent = 0;
// Получим значение поля total у второго узла дерева
while($rxml→name === 'customer') {
// Чтение текущего дочернего через SimpleXMLElement
$node = new SimpleXMLElement($rxml→readOuterXML());
// Проверяем, номер элемента, если он равен 2 то это искомый элемент
if($node→id == 2) {
$amountSpent = $node→total; break;
}
// Переместиться к следующему элементу customer
$rxml→next('customer');
}
echo $amountSpent;