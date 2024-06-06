<?php 
session_start();

// Проверяем, авторизован ли пользователь
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // Пользователь уже авторизован, перенаправляем его на главную страницу
    header("Location: index.php");
    exit;
}

require_once 'config.php';

// Получаем данные с формы регистрации

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$passRepeat = $_POST['repeat-password'];

if($password !== $passRepeat) {
  header("Location: ../registration.php");
}

// Подключение к базе данных
$conn = new mysqli($servername, $username, $db_password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Хешируем пароль
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// SQL-запрос для вставки данных пользователя с хешированным паролем
$sql = "INSERT INTO users (name, email, gender, password) VALUES ('$name', '$email', '$gender', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    echo "Пользователь успешно зарегистрирован";
    header("refresh:5; url=../index.php");
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

// Закрытие соединения
$conn->close();
?>