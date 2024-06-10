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

// Одобряем заказ (меням поле state)
$sql = "UPDATE orders SET state = 'Одобрено'
        WHERE userId = $userId AND type = '$itemType'";

if ($conn->query($sql) === TRUE) {
    echo "Заказ успешно одобрен";
} else {
    echo "Ошибка при одобрении заказа: " . $conn->error;
}

// Закрываем соединение
$conn->close();
?>