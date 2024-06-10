<?php
session_start();

// Подключение к базе данных (используйте ваши параметры подключения)
require_once 'config.php';

// Создаем подключение к базе данных
$conn = new mysqli($servername, $username, $db_password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$itemId = $_POST['itemId'];

// Удаляем запись из базы данных
$sql = "DELETE FROM messages WHERE id = $itemId";
if ($conn->query($sql) === TRUE) {
    echo "Сообщение успешно удалено!";
} else {
    echo "Ошибка при удалении сообщения: " . $conn->error;
}

// Закрываем соединение
$conn->close();
?>