<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Адрес, на который отправляется письмо
    $to = 'alex.ten.alex.ten.alex.ten@gmail.com';

    // Тема письма
    $subject = 'Данные от пользователя';

    // Тело сообщения
    $message = 'Почта: ' . $email . "\r\n" .
               'Имя: ' . $name . "\r\n" .
               'Телефон: ' . $phone;

    // Заголовки письма
    $headers = 'From: your-email@example.com' . "\r\n" .
               'Reply-To: your-email@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Отправка письма и проверка результата
    if (mail($to, $subject, $message, $headers)) {
        echo 'Письмо успешно отправлено!';
    } else {
        echo 'Ошибка при отправке письма';
    }
}
?>
