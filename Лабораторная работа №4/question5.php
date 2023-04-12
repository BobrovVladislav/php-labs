<?php

include "./connect.php";

if (isset($_POST['btn-5'])) {

    if ($_POST['name'] == "" || $_POST['author'] == "") {
        echo '<h3 class="text-center">Заполните все данные</h3>';
    } else {
        $name = $_POST['name'];
        $author = $_POST['author'];
        $coauthor1 = $_POST['co-author1'];
        $coauthor2 = $_POST['co-author2'];
        $coauthor3 = $_POST['co-author3'];

        $coauthors = 0;

        if ($_POST['co-author1'] !== "" && $_POST['co-author2'] == ""  && $_POST['co-author3'] == "") {
            $coauthors = 1;
        } else if ($_POST['co-author1'] !== "" && $_POST['co-author2'] !== ""  && $_POST['co-author3'] == "") {
            $coauthors = 2;
        } else if ($_POST['co-author1'] !== "" && $_POST['co-author2'] !== ""  && $_POST['co-author3'] !== "") {
            $coauthors = 3;
        }

        $mysqli->query("INSERT INTO `books`(`name`,`author`,`co-author1`,`co-author2`,`co-author3`,`co-authors`) VALUES('$name','$author','$coauthor1','$coauthor2','$coauthor3','$coauthors')");

        bookView();
    }
}

if (isset($_POST['btn-6'])) {
    $data = $mysqli->query("SELECT `books`.`name`,`books`.`author`,`books`.`co-author1`,`books`.`co-author2`, `books`.`co-author3`, `books`.`co-authors` FROM `books` WHERE `books`.`co-authors` = 3 ");


    $books = $data->fetch_all();
    foreach ($books as $book) {
        echo
        '
        <div class="card col-5 mx-auto p-2 mt-3">
            <p  class="card-text">Название книги: ' . $book[0] . '</p>
            <p  class="card-text">Автор: ' . $book[1] . '</p>
            <p  class="card-text">Кол-во соавторов ' . $book[5] . '</p>
        </div>
        ';
    }
}

function bookView()
{
    include "./connect.php";

    $data = $mysqli->query("SELECT `books`.`name`,`books`.`author`,`books`.`co-author1`,`books`.`co-author2`, `books`.`co-author3`, `books`.`co-authors` FROM `books`");

    $books = $data->fetch_all();
    foreach ($books as $book) {
        echo
        '
        <div class="card col-4 mx-auto p-2 mt-3">
            <p  class="card-text">Название книги: ' . $book[0] . '</p>
            <p  class="card-text">Автор: ' . $book[1] . '</p>
            <p  class="card-text">Кол-во соавторов: ' . $book[5] . '</p>
        </div>
        ';
    }
}
