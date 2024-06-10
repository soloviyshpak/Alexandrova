<?php
session_start();

// Подключение к базе данных
require_once 'php/config.php';
$conn = mysqli_connect($servername, $username, $db_password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Проверка, является ли текущий пользователь администратором
if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == 'true') {
    // Получение заказов на рассмотрении
    $sql = "SELECT * FROM portfolio";
    $result = mysqli_query($conn, $sql);
    echo '
      <!DOCTYPE html>
      <html lang="ru">
        <head>
          <meta charset="UTF-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>Портфолио — Alexandrova (Админ-панель)</title>
          <link rel="stylesheet" href="css/reset.css" />
          <link rel="stylesheet" href="css/main.css" />
        </head>
        <body>
          <header class="header-page">
            <div class="header__bar">
              <div class="header__logo-inner">
                <a class="header__bar-logo" href="index.php"
                  ><img
                    src="img/logo.svg"
                    alt="Александрова - профессиональный фотограф"
                /></a>
                <p class="header__bar-admin">Админ-панель</p>
              </div>
              <nav class="header__nav">
                <ul class="header__nav-list">
                  <ul class="header__nav-item">
                    <a href="admin.php" class="header__nav-link">Заказы</a>
                  </ul>
                  <ul class="header__nav-item">
                    <a
                      href="admin-portfolio.php"
                      class="header__nav-link header__nav-link--opened"
                      >Портфолио</a
                    >
                  </ul>
                  <ul class="header__nav-item">
                    <a href="admin-messages.php" class="header__nav-link">Сообщения</a>
                  </ul>
                </ul>
              </nav>
            </div>
          </header>
          <main class="main">
            <section class="admin-portfolio">
              <h2 class="admin-portfolio__title">Портфолио</h2>
              <div class="admin-portfolio__add-inner"><a class="admin-portfolio__add" href="admin-add.php">Добавить</a></div>
              <ul class="admin-porfolio__list">
    ';
    if (mysqli_num_rows($result) > 0) {
        // Вывод карточек с заказами
        while($row = mysqli_fetch_assoc($result)) {
            echo '
              <li class="admin-portfolio__item">
                <img
                  src="'.$row["cover"].'"
                  alt=""
                  class="admin-portfolio__item-img"
                />
                <a href="work.php?id='. $row["id"] .'" class="admin-portfolio__item-title">'.$row["name"].'</a>
                <a href="#" class="admin-portfolio__item-del" data-id="'.$row["id"].'">
                  <img src="img/icons/del-btn.svg" alt="" />
                </a>
              </li>
            ';
        }
    } else {
        echo "Нет загруженных портфолио.";
    }
        echo '
              </ul>
          </section>
        </main>
      </body>
      <script src="js/jquery-3.7.1.min.js"></script>
      <script src="js/admin-del-portfolio.js"></script>
      <script src="js/main.js"></script>
    </html>
        ';
} else {
    echo "Доступ запрещен. Вы не являетесь администратором.";
}

mysqli_close($conn);
?>



          
        









          
        
