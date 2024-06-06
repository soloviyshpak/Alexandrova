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
      <section class="registration">
        <h2 class="registration__title">Регистрация</h2>
        <form class="registration__form">
          <label class="registration__form-label" for="name">Ваше имя</label>
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
            /></label>
          </div>
          <label class="registration__form-label" for="password"
            >Придумаете пароль</label
          >
          <input
            class="registration__form-input"
            id="password"
            name="password"
            type="password"
            required
          />
          <label class="registration__form-label" for="repeat-password"
            >Повторите пароль</label
          >
          <input
            class="registration__form-input"
            id="repeat-password"
            name="repeat-password"
            type="password"
            required
          />
          <button class="registration__form-btn" type="submit">
            Зарегистрироваться
          </button>
        </form>
      </section>
    </main>
  </body>
  <script src="js/radio.js"></script>
  <script src="js/main.js"></script>
</html>
