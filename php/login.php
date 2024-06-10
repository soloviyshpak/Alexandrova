<?php
session_start();

// Проверяем, авторизован ли пользователь
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // Пользователь уже авторизован, перенаправляем его на главную страницу
    header("Location: index.php");
    exit;
}

require_once 'config.php';

$conn = new mysqli($servername, $username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

// Используем подготовленный запрос для безопасной обработки входных данных
$sql = "SELECT id, name, password, isAdmin FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $userId = $row['id'];
        $userName = $row['name'];
        $isAdmin = $row['isAdmin'];

        // Сохраняем информацию об авторизованном пользователе в сессии
        $_SESSION['loggedIn'] = true;
        $_SESSION['userId'] = $userId;

        // Добавляем информацию об администраторе в $_SESSION
        if ($isAdmin == "true") {
            $_SESSION['isAdmin'] = true;
        } else {
            $_SESSION['isAdmin'] = false;
        }

        // Добавляем JavaScript код для сохранения userId в localStorage и редиректа через 5 секунд
        echo "<script>";
        echo "localStorage.setItem('userId', '$userId');";
        echo "setTimeout(function() { window.location.href = '../index.php'; }, 5000);";
        echo "</script>";

        echo "Авторизация успешна! Добро пожаловать, $userName! Вы будете перенаправлены на главную страницу через 5 секунд.";
    } else {
        echo "Ошибка: Неверные данные для авторизации.";
    }
} else {
    echo "Ошибка: Неверные данные для авторизации.";
}

$stmt->close();
$conn->close();
?>