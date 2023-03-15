<?
$num1 = $_POST['num1'];
$char = $_POST['char'];
$num2 = $_POST['num2'];

function calculation($num1, $char, $num2)

{
    $result = 0;

    if (!empty($num1) && !empty($char) && !empty($num2)) {
        switch ($char) {
            case '+':
                $result = $num1 + $num2;
                return $result;
                break;
            case '-':
                $result = $num1 - $num2;
                return $result;
                break;
            case '*':
                $result = $num1 * $num2;
                return $result;
                break;
            case '/':
                $result = $num1 / $num2;
                return $result;
                break;
        }
    } else {
        return $result;
    }
}
?>