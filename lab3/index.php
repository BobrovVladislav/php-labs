<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №3</title>
</head>
<body>
    <section>
    <h1>Задание 2</h1>
    <form action="index.php">
        <h2>Как вы оцениваете наш магазин?</h2>
        <input name="vote" type="radio" value="5" checked>отлично</input>
        <input name="vote" type="radio" value="4">хорошо</input>
        <input name="vote" type="radio" value="3">удовлетворительно</input>
        <input name="vote" type="radio" value="2">плохо</input>
        <button>Проголосовать</button>
    </form>

    <?
    if (@$_POST['vote'])
    {
    $file=$_POST['vote'].".txt"; 
    $f=fopen($file,"r"); 
    $votes=fread($f, 100); 
    fclose($f); 
    $votes++; 
    $f=fopen($file,"w");
    fwrite($f,$votes); 
    fclose($f); 
    } ?>
    </section>
</body>
</html>