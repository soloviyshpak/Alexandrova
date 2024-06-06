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
    <link rel="stylesheet" href="css/fancybox.css" />
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
              <a
                href="portfolio.php"
                class="header__nav-link header__nav-link--opened"
                >Портфолио</a
              >
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
      <section class="portfolio-page">
        <h2 class="portfolio-page__title">Обезьяна</h2>
        <ul class="portfolio-page__list">
          <li class="portfolio-page__item">
            <a
              class="portfolio-page__item-link portfolio-page__item-link--page"
              href="#"
              data-fancybox="gallery"
              data-src="img/portfolio-page.jpg"
            >
              <img
                class="portfolio-page__item-img portfolio-page__item-img--page"
                src="img/portfolio-page.jpg"
                alt=""
              />
            </a>
          </li>
          <li class="portfolio-page__item">
            <a
              class="portfolio-page__item-link portfolio-page__item-link--page"
              href="#"
              data-fancybox="gallery"
              data-src="img/portfolio-page.jpg"
            >
              <img
                class="portfolio-page__item-img portfolio-page__item-img--page"
                src="img/portfolio-page.jpg"
                alt=""
              />
            </a>
          </li>
          <li class="portfolio-page__item">
            <a
              class="portfolio-page__item-link portfolio-page__item-link--page"
              href="#"
              data-fancybox="gallery"
              data-src="img/portfolio-page.jpg"
            >
              <img
                class="portfolio-page__item-img portfolio-page__item-img--page"
                src="img/portfolio-page.jpg"
                alt=""
              />
            </a>
          </li>
          <li class="portfolio-page__item">
            <a
              class="portfolio-page__item-link portfolio-page__item-link--page"
              href="#"
              data-fancybox="gallery"
              data-src="img/portfolio-page.jpg"
            >
              <img
                class="portfolio-page__item-img portfolio-page__item-img--page"
                src="img/portfolio-page.jpg"
                alt=""
              />
            </a>
          </li>
          <li class="portfolio-page__item">
            <a
              class="portfolio-page__item-link portfolio-page__item-link--page"
              href="#"
              data-fancybox="gallery"
              data-src="img/portfolio-page.jpg"
            >
              <img
                class="portfolio-page__item-img portfolio-page__item-img--page"
                src="img/portfolio-page.jpg"
                alt=""
              />
            </a>
          </li>
          <li class="portfolio-page__item">
            <a
              class="portfolio-page__item-link portfolio-page__item-link--page"
              href="#"
              data-fancybox="gallery"
              data-src="img/portfolio-page.jpg"
            >
              <img
                class="portfolio-page__item-img portfolio-page__item-img--page"
                src="img/portfolio-page.jpg"
                alt=""
              />
            </a>
          </li>
        </ul>
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
  <script src="js/fancybox.umd.js"></script>
  <script src="js/main.js"></script>
</html>
