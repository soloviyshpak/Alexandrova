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

$userId = $_POST['userId'];
$itemType = $_POST['itemType']; 

// Удаляем запись из базы данных
$sql = "DELETE FROM orders WHERE userId = $userId AND type = '$itemType'";
if ($conn->query($sql) === TRUE) {
    echo "Заказ успешно отменен";
} else {
    echo "Ошибка при отмене заказа: " . $conn->error;
}

// Закрываем соединение
$conn->close();
?>