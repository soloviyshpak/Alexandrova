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
$sql = "DELETE FROM portfolioimages WHERE workId = ?";
$sql2 = "DELETE FROM portfolio WHERE id = ?";


$stmt = $conn->prepare($sql);
$stmt2 = $conn->prepare($sql2);

$stmt->bind_param("i", $itemId);
$stmt2->bind_param("i", $itemId);

if ($stmt->execute()) {
  echo "Позиция с портфолио успешно удалена!";
  
  // Проверяем успешность выполнения первого запроса перед выполнением второго
  if ($stmt2->execute()) {
      echo "Картинки из портфолио успешно удалены!";
  } else {
      echo "Ошибка при удалении картинок из портфолио: " . $conn->error;
  }
} else {
  echo "Ошибка при удалении позиции с портфолио: " . $conn->error;
}

// Закрываем соединение
$stmt->close();
$stmt2->close();
$conn->close();
?>
