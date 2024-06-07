<?php
session_start();

// Проверяем, авторизован ли пользователь
if (!isset($_SESSION['userId'])) {
    echo "Ошибка: Пользователь не авторизован";
    exit;
}

$userId = $_SESSION['userId'];

// Подключение к базе данных
require_once 'config.php';
$conn = new mysqli($servername, $username, $db_password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Проверяем, есть ли уже такой тип заказа у данного пользователя
$sql_check = "SELECT COUNT(*) as count FROM orders WHERE userId = ? AND type = 'Съемка мероприятий'";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("i", $userId);
$stmt_check->execute();
$result = $stmt_check->get_result();
$row = $result->fetch_assoc();

if ($row['count'] > 0) {
    // Запись уже существует, выводим сообщение об ошибке
    echo "Вы уже подали заявку на фотосессию для мероприятий.";
} else {
    // Выполняем вставку только если записи не существует
    $sql_insert = "INSERT INTO orders (userId, type) VALUES (?, 'Съемка мероприятий')";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("i", $userId);
    
    if ($stmt_insert->execute()) {
        echo 'Ваша заявка на фотосессию для мероприятий в рассмотрении. Её можно мониторить в <a href="../account.php">Личном кабинете</a>';
    } else {
        echo "Ошибка при создании записи";
    }
}

$conn->close();
?>
