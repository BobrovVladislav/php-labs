<?
function counter(){
    $result = 0;

    if($_POST['compiler'] == "Компилятор"){
        $result++;
    }
    if($_POST['algorithms'] == "Линейным"){
        $result++;
    }
    if($_POST['cycles'] == "Do...while"){
        $result++;
    }
    return $result;
}
?>