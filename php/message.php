<?php
// Подключение к базе данных
require_once 'config.php';
$conn = new mysqli($servername, $username, $db_password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Получаем данные из формы
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Готовим SQL запрос с использованием подготовленных запросов
$sql = "INSERT INTO messages (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $message);

// Выполняем запрос
if ($stmt->execute()) {
  header("Location: ../contacts.php");
} else {
  echo "Ошибка при добавлении заявки: " . $stmt->error;
}

// Закрываем соединение
$conn->close();
?>
