<?php
session_start();

// Проверяем, авторизован ли пользователь
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // Пользователь авторизован, скрываем кнопку авторизации
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
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
              <a
                href="price.php"
                class="header__nav-link header__nav-link--opened"
                >Записаться</a
              >
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
      <section class="price">
        <div class="container">
          <div class="price__inner">
            <h3 class="price__postition-title">Индивидуальная фотосессия</h3>
            <div class="price__position">
              <img src="img/price1.jpg" alt="" class="price__position-img" />
              <div class="price__position-info">
                <h4 class="price__position-info_title">Подойдет для:</h4>
                <ul class="price__position-info_list">
                  <li class="price__position-info_item">Женской фотосессии</li>
                  <li class="price__position-info_item">
                    Парной фотосессии Love Story
                  </li>
                  <li class="price__position-info_item">
                    Фотосессии беременности
                  </li>
                  <li class="price__position-info_item">
                    Будуарной фотосессии
                  </li>
                  <li class="price__position-info_item">
                    Контент-фотосессии для блога
                  </li>
                  <li class="price__position-info_item">
                    Фотосессии для интернет-магазина одежды
                  </li>
                  <li class="price__position-info_item">
                    Прогулочной фотосессии
                  </li>
                </ul>
                <h4 class="price__position-info_title">В стоимость входит:</h4>
                <ul class="price__position-info_list">
                  <li class="price__position-info_item">
                    Фотосъемка 1 час в студии (студия оплачивается отдельно) или
                    на улице
                  </li>
                  <li class="price__position-info_item">
                    Консультация в подготовке к съемке
                  </li>
                  <li class="price__position-info_item">
                    Помощь с поиском и бронированием подходящей студии или
                    локации в городе
                  </li>
                  <li class="price__position-info_item">
                    Помощь во время фотосессии
                  </li>
                  <li class="price__position-info_item">
                    Авторская обработка 10 лучших фотографий
                  </li>
                  <li class="price__position-info_item">
                    От 200 фотографий в формате jpeg
                  </li>
                  <li class="price__position-info_item">
                    Закрытый доступ к фотографиям на облачном диске
                  </li>
                  <li class="price__position-info_item">
                    Срок готовности в течении 3 недель после дня съемки
                  </li>
                </ul>
                <p class="price__position-info_cost">Стоимость: 7000 ₽</p>
                <a class="price__position-info_btn" href="php/add-individual-order.php">Записаться</a>
              </div>
            </div>
            <h3 class="price__postition-title">Съёмка мероприятий</h3>
            <div class="price__position">
              <img src="img/price2.jpg" alt="" class="price__position-img" />
              <div class="price__position-info">
                <h4 class="price__position-info_title">Подойдет для:</h4>
                <ul class="price__position-info_list">
                  <li class="price__position-info_item">
                    Фотоотчета с дня рождения 
                  </li>
                  <li class="price__position-info_item">Девичника </li>
                  <li class="price__position-info_item">
                    Фотоотчета с мероприятия
                  </li>
                  <li class="price__position-info_item">Модного показа</li>
                </ul>
                <h4 class="price__position-info_title">В стоимость входит:</h4>
                <ul class="price__position-info_list">
                  <li class="price__position-info_item">Фотосъемка 1 час</li>
                  <li class="price__position-info_item">
                    Консультация в подготовке к съемке
                  </li>
                  <li class="price__position-info_item">
                    Помощь во время фотосессии
                  </li>
                  <li class="price__position-info_item">
                    Использование при необходимости нескольких источников
                    дополнительного освещения  
                  </li>
                  <li class="price__position-info_item">
                    Авторская обработка 10 лучших фотографий
                  </li>
                  <li class="price__position-info_item">
                    От 200 фотографий в формате jpeg
                  </li>
                  <li class="price__position-info_item">
                    Закрытый доступ к фотографиям на облачном диске
                  </li>
                  <li class="price__position-info_item">
                    Срок готовности в течении 3 недель после дня съемки
                  </li>
                </ul>
                <p class="price__position-info_cost">Стоимость: 7000 ₽</p>
                <a class="price__position-info_btn" href="php/add-event-order.php">Записаться</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
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
