<?php
session_start();

// Проверяем, авторизован ли пользователь
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // Пользователь авторизован, скрываем кнопку авторизации
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alexandrova</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <header class="header-page">
      <div class="header__bar">
        <a class="header__bar-logo" href="index.php"
          ><img
            src="img/logo.svg"
            alt="Александрова - профессиональный фотограф"
        /></a>
        <nav class="header__nav">
          <ul class="header__nav-list">
            <ul class="header__nav-item">
              <a href="index.php" class="header__nav-link">Главная</a>
            </ul>
            <ul class="header__nav-item">
              <a href="portfolio.php" class="header__nav-link">Портфолио</a>
            </ul>
            <ul class="header__nav-item">
              <a href="price.php" class="header__nav-link">Записаться</a>
            </ul>
            <ul class="header__nav-item">
              <a href="contacts.php" class="header__nav-link">Контакты</a>
            </ul>
            <?php if($isLoggedIn): ?>
            <ul class="header__nav-item">
              <a href="account.php" class="header__nav-link"
                ><img src="img/icons/account.svg" alt=""
              /></a>
            </ul>
            <?php else: ?>
              <ul class="header__nav-item header__nav-item--auth">
              <a href="registration.php" class="header__nav-link header__nav-link--auth">Зарегистрироваться</a> / <a href="login.php" class="header__nav-link header__nav-link--auth"
                >Войти</a>
            </ul>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
    </header>
    <main class="main">
      <section class="account">
        <div class="account__inner">
        <?php
            // Проверяем, авторизован ли пользователь
            if(isset($_SESSION['userId'])) {
                $userId = $_SESSION['userId'];

                // Подключение к базе данных
                require_once 'php/config.php';

                $conn = new mysqli($servername, $username, $db_password, $dbname);

                // Проверка соединения
                if ($conn->connect_error) {
                    die("Ошибка подключения: " . $conn->connect_error);
                }

                // SQL запрос для выборки данных пользователя
                $sql = "SELECT * FROM users WHERE id = $userId";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // Вывод данных пользователя
                  $row = $result->fetch_assoc();
                  
                  echo '
                    <h2 class="account__name">'.$row['name'].'</h2>
                    <p class="account__email">'.$row['email'].'</p>
                      ';
                } else {
                    echo "Пользователь не найден.";
                }

                $conn->close();
            } else {
                echo '<span class="acc__err">Пользователь не авторизован.</span>';
            }
            ?>
          <a class="account__edit" href="account-edit.php">Редактировать профиль</a>
          <a class="account__orders" href="orders.php">Мои заказы</a>
          <a href="php/logout.php" class="account__exit">Выйти</a>
        </div>
      </section>
    </main>
    <footer class="footer footer--account">
      <div class="container">
        <div class="footer__inner">
          <div class="footer__copyright">© 2024 Alexandrova</div>
          <ul class="footer__socials">
            <li class="footer__socials-item">
              <a href="#" class="footer__socials-link"
                ><img src="img/icons/footer/vk.svg" alt="" />
              </a>
            </li>
            <li class="footer__socials-item">
              <a href="#" class="footer__socials-link"
                ><img src="img/icons/footer/tg.svg" alt="" />
              </a>
            </li>
            <li class="footer__socials-item">
              <a href="#" class="footer__socials-link"
                ><img src="img/icons/footer/whatsapp.svg" alt="" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
  <script src="js/main.js"></script>
</html>
