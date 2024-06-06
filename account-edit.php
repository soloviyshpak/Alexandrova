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
        <div class="account__inner account__inner--edit">
          <h2 class="registration__title">Редактировать профиль</h2>
          <form class="registration__form registration__form--edit" method="POST" action="php/profile-edit.php">
            <label class="registration__form-label" for="name">Имя</label>
            <input
              class="registration__form-input"
              id="name"
              name="name"
              type="text"
              placeholder="Иван Иванов"
              required
            />
            <label class="registration__form-label" for="email">E-Mail</label>
            <input
              class="registration__form-input"
              id="email"
              name="email"
              type="text"
              placeholder="ivanov@example.com"
              required
            />
            <h4 class="registration__form-gender_title">Ваш пол</h4>
            <div class="registration__form-gender">
              <label
                class="registration__form-label registration__form-label--gender"
                for="male"
                ><span class="registration__form-gender_tag">М</span>
                <input
                  class="registration__form-radio"
                  id="male"
                  name="gender"
                  type="radio"
                  value="male"
                />
              </label>

              <label
                class="registration__form-label registration__form-label--gender"
                for="female"
                ><span class="registration__form-gender_tag">Ж</span>
                <input
                  class="registration__form-radio"
                  id="female"
                  name="gender"
                  type="radio"
                  value="female"
              /></label>
            </div>
            <label class="registration__form-label" for="password"
              >Новый пароль</label
            >
            <input
              class="registration__form-input"
              id="password"
              name="password"
              type="password"
              required
            />
            <button class="registration__form-btn" type="submit">
              Сохранить
            </button>
          </form>
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
  <script src="js/radio.js"></script>
  <script src="js/main.js"></script>
</html>
