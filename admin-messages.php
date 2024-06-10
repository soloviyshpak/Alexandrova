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
    $sql = "SELECT * FROM messages";
    $result = mysqli_query($conn, $sql);
    echo '
      <!DOCTYPE html>
      <html lang="ru">
        <head>
          <meta charset="UTF-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>Заказы — Alexandrova (Админ-панель)</title>
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
                    <a href="admin-portfolio.php" class="header__nav-link">Портфолио</a>
                  </ul>
                  <ul class="header__nav-item">
                    <a
                      href="admin-messages.php"
                      class="header__nav-link header__nav-link--opened"
                      >Сообщения</a
                    >
                  </ul>
                </ul>
              </nav>
            </div>
          </header>
          <main class="main">
            <section class="admin-orders">
              <h2 class="admin-orders__title">Сообщения</h2>
              <ul class="admin-orders__list">
    ';
    if (mysqli_num_rows($result) > 0) {
        // Вывод карточек с заказами
        while($row = mysqli_fetch_assoc($result)) {
            echo '
              <li class="admin-orders__item">
                <h4 class="admin-orders__item-title">Сообщение #'.$row["id"].'</h4>
                <p class="admin-orders__item-info">Имя: '.$row["name"].'</p>
                <p class="admin-orders__item-info">
                  E-Mail: <a href="mailto:'.$row["email"].'">'.$row["email"].'</a>
                </p>
                <p class="admin-orders__item-info admin-orders__item-info--center">
                  Текст сообщения:
                </p>
                <p class="admin-orders__item-message">
                  '.$row["message"].'
                </p>
                <a href="#" class="admin-orders__item-del" data-id="'.$row["id"].'"
                  ><img src="img/icons/del-btn.svg" alt=""
                /></a>
              </li>
            ';
        }
    } else {
        echo "Сообщения отсутствуют.";
    }
        echo '
          </ul>
          </section>
        </main>
      </body>
      <script src="js/jquery-3.7.1.min.js"></script>
      <script src="js/admin-del-message.js"></script>
      <script src="js/main.js"></script>
    </html>
    </html>
        ';
} else {
    echo "Доступ запрещен. Вы не являетесь администратором.";
}

mysqli_close($conn);
?>



          
        









          
        




          
        
