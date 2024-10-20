<?php
//1. Задание 1: Форма для отправки отзыва о товаре
//Создайте форму с полями: имя, отзыв (textarea), рейтинг (1-5).
//Отправляйте данные методом POST .
//Реализуйте обработку данных, проверяя метод запроса ( POST ).
//Выводите результат с введенными пользователем данными.
//Подсказка:
//Используйте массив $_POST для получения данных:
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//$name = $_POST['name'];
// Дальнейшая обработка данных}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $review = $_POST['review'];
    $rating = $_POST['rating'];
    echo "Имя: {$name}<br>";
    echo "Отзыв: {$review}<br>";
    echo "Рейтинг: {$rating}<br>";
    }


    //2. Задание 2: Форма для отмены заказа
//Создайте форму с полями: номер заказа, причина отмены (textarea).
//Отправка данных методом POST .
//Обрабатывайте данные, выводя номер заказа и причину отмены.
//Подсказка:
//Используйте htmlspecialchars() для защиты данных от XSS-атак:
//$order_id = htmlspecialchars($_POST['order_id']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order_id = htmlspecialchars($_POST['order_id']);
    $cancel_reason = htmlspecialchars($_POST['cancel_reason']);
    echo "Номер заказа: {$order_id}<br>";
    echo "Причина отмены: {$cancel_reason}<br>";
    }

    //Задание 3: Добавление и отображение отзывов (фиктивные данные)
//Создайте форму для добавления отзыва.
//Создайте массив для хранения фиктивных отзывов.При добавлении нового отзыва обновляйте массив и выводите все отзывы на
//странице.
//Подсказка:
//Для хранения фиктивных данных используйте массив:
//$reviews = [
//['name' => 'Иван', 'review' => 'Отличный товар!', 'rating' => 5],
//// Добавляйте новые отзывы в массив ];
//После отправки формы добавляйте отзыв в массив:
$reviews[] = ['name' => $name, 'review' => $review, 'rating' => $rating];
$reviews = [
    ['name' => 'Алекс', 'review' => 'Всё ок!', 'rating' => 5],
    ['name' => 'Ирина', 'review' => 'Не понравился', 'rating' => 2],
    ['name' => 'Влад', 'review' => 'Рекомендую, но есть недостатки!', 'rating' => 4],
    ['name' => 'Игорь', 'review' => 'Пойдет', 'rating' => 3],
  
   ];
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $name = $_POST['name'];
       $review = $_POST['review'];
       $rating = $_POST['rating'];
       $reviews[] = ['name' => $name, 'review' => $review, 'rating' => $rating];
       echo "Отзыв добавлен!<br>";
       echo "Имя: {$name}<br>";
       echo "Отзыв: {$review}<br>";
       echo "Рейтинг: {$rating}<br>";
       echo "<br>Отзывы:<br>";
       foreach ($reviews as $review) {
           echo "Имя: {$review['name']}<br>";
           echo "Отзыв: {$review['review']}<br>";
           echo "Рейтинг: {$review['rating']}<br>";
           echo "<br>";
       }}