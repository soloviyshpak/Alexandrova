<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Добавить портфолио — Alexandrova (Админ-панель)</title>
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
              <a href="index.php" class="header__nav-link">Заказы</a>
            </ul>
            <ul class="header__nav-item">
              <a
                href="portfolio.html"
                class="header__nav-link header__nav-link--opened"
                >Портфолио</a
              >
            </ul>
            <ul class="header__nav-item">
              <a href="price.html" class="header__nav-link">Сообщения</a>
            </ul>
          </ul>
        </nav>
      </div>
    </header>
    <main class="main">
      <section class="admin-portfolio">
        <h2 class="admin-portfolio__title">Добавить Портфолио</h2>
        <form class="admin-portfolio__form">
          <label for="name" class="admin-portfolio__form-label"
            >Название работы</label
          >
          <input
            type="text"
            name="name"
            id="name"
            class="admin-portfolio__form-input"
            required
          />
          <label for="descr" class="admin-portfolio__form-label"
            >Описание</label
          >
          <textarea
            name="descr"
            id="descr"
            class="admin-portfolio__form-textarea"
          ></textarea>
          <label for="cover" class="admin-portfolio__form-label"
            >Обложка
            <div class="admin-portfolio__form-window">
              <img src="img/icons/plus.svg" alt="" />
              <p>Нажмите, чтобы загрузить обложку</p>
            </div>
          </label>
          <input
            type="file"
            name="cover"
            id="cover"
            class="admin-portfolio__form-cover"
            accept="image/png, image/jpeg"
            required
          />
          <input
            type="file"
            name="photos"
            id="photos"
            class="admin-portfolio__form-photos"
            accept="image/png, image/jpeg"
            multiple
            required
          />
          <button class="admin-portfolio__form-btn" type="submit">
            Добавить
          </button>
        </form>
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
  <script src="js/admin-cover.js"></script>
  <script src="js/main.js"></script>
</html>
