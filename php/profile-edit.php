<?php
session_start();

// Проверяем, авторизован ли пользователь
if(isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];

    // Подключение к базе данных
    require_once 'config.php';

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $password = $_POST['password'];
      
      // Хэширование пароля
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  
      // Выполнение запроса на обновление информации о пользователе
      $sql = "UPDATE users SET name='$name', email ='$email', gender ='$gender', password ='$hashedPassword' WHERE id={$_SESSION['userId']}";

      if ($conn->query($sql) === TRUE) {
          echo "Информация о пользователе успешно обновлена";
          header("Location: ../account.php");
      } else {
          echo "Ошибка при обновлении информации о пользователе: " . $conn->error;
      }
    }
}
?>
