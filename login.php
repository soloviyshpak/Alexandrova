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
        <a class="header__bar-logo" href="index.html"
          ><img
            src="img/logo.svg"
            alt="Александрова - профессиональный фотограф"
        /></a>
      </div>
    </header>
    <main class="main">
      <section class="registration registration--login">
        <h2 class="registration__title">Авторизация</h2>
        <form class="registration__form">
          <label class="registration__form-label" for="email">E-Mail</label>
          <input
            class="registration__form-input"
            id="email"
            name="email"
            type="text"
            placeholder="ivanov@example.com"
            required
          />
          <label class="registration__form-label" for="password">Пароль</label>
          <input
            class="registration__form-input"
            id="password"
            name="password"
            type="password"
            required
          />
          <button class="registration__form-btn" type="submit">Войти</button>
        </form>
      </section>
    </main>
  </body>
  <script src="js/radio.js"></script>
  <script src="js/main.js"></script>
</html>
