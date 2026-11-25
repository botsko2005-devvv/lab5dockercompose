<?php
// Дані для підключення до MySQL
// "db" - це ім'я сервісу бази даних у docker-compose.yml
$servername = "db";
$username = "webuser";
$password = "webpass";
$dbname = "webdb";

// Підключення до бази даних
$conn = new mysqli($servername, $username, $password, $dbname);

// Якщо підключення не вдалось - виводимо помилку й зупиняємо скрипт
if ($conn->connect_error) {
    die("Помилка підключення: " . $conn->connect_error);
}
?>
