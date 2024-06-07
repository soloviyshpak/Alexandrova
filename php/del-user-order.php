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

$itemType = $_POST['itemType']; 
$userId = $_SESSION['userId'];

// Удаляем запись из базы данных
$sql = "DELETE FROM orders WHERE userId = $userId AND type = '$itemType'";
if ($conn->query($sql) === TRUE) {
    echo "Заказ успешно отменент";
} else {
    echo "Ошибка при отмене заказа: " . $conn->error;
}

// Закрываем соединение
$conn->close();
?>