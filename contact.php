<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lastName = htmlspecialchars($_POST['lastName']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $currentDateTime = date('Y-m-d--H-i');
    $fileName = "mail/{$currentDateTime}.txt";

    $content = "Фамилия: $lastName\nИмя: $firstName\nЕмейл: $email\nСообщение:\n$message";

    if (!is_dir('mail')) {
        mkdir('mail', 0777, true);
    }

    file_put_contents($fileName, $content);
    echo "<p>Сообщение успешно отправлено! Спасибо за ваш отзыв.</p>";
} else {
    echo "<p>Ошибка: Форма не была отправлена корректно.</p>";
}
?>
