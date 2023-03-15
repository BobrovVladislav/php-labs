<?
        $to = $_POST['to'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if (!empty($to) && !empty($subject) && !empty($message)) {
            $mail = mail($to, $subject, $message);
            if ($mail == true) {
                echo 'Статус: Письмо отправлено';
            } else {
                echo 'Статус: Не удалось отправить письмо';
            }
        } else {
            echo 'Статус: Введите данные';
        }
?>