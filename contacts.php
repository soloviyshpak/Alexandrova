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
        <nav class="header__nav">
          <ul class="header__nav-list">
            <ul class="header__nav-item">
              <a href="index.html" class="header__nav-link">Главная</a>
            </ul>
            <ul class="header__nav-item">
              <a href="portfolio.html" class="header__nav-link">Портфолио</a>
            </ul>
            <ul class="header__nav-item">
              <a href="price.html" class="header__nav-link">Записаться</a>
            </ul>
            <ul class="header__nav-item header__nav-link--opened">
              <a href="contacts.html" class="header__nav-link">Контакты</a>
            </ul>
            <ul class="header__nav-item">
              <a href="#" class="header__nav-link"
                ><img src="img/icons/account.svg" alt=""
              /></a>
            </ul>
          </ul>
        </nav>
      </div>
    </header>
    <main class="main">
      <section class="contacts">
        <div class="container">
          <div class="contacts__inner">
            <div class="contacts__write">
              <h3 class="contacts__title">
                Остались вопросы?<br />Напишите мне:
              </h3>
              <div class="contacts__write-inner">
                <iframe
                  class="contacts__write-map"
                  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7679.894135118196!2d38.771934125989176!3d55.09145315299313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1717263361588!5m2!1sru!2sru"
                  width="484"
                  height="346"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
                <form class="contacts__write-form">
                  <label class="contacts__write-form_label" for="name"
                    >Ваше имя</label
                  >
                  <input
                    class="contacts__write-form_input"
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Иван Иванов"
                    required
                  />
                  <label class="contacts__write-form_label" for="email"
                    >E-Mail</label
                  >
                  <input
                    class="contacts__write-form_input"
                    type="email"
                    id="email"
                    name="email"
                    placeholder="ivanov@example.com"
                    required
                  />
                  <label class="contacts__write-form_label" for="message"
                    >Сообщение</label
                  >
                  <textarea
                    class="contacts__write-form_textarea"
                    name="message"
                    id="message"
                    placeholder="Текст сообщения"
                    required
                  ></textarea>
                  <button class="contacts__write-form_btn" type="submit">
                    Записаться
                  </button>
                </form>
              </div>
            </div>
            <div class="contacts__socials">
              <h3 class="contacts__title">Или найдите меня в соцсетях:</h3>
              <ul class="contacts__socials-list">
                <li class="contacts__socials-item">
                  <a class="contacts__socials-link" href="#">
                    <img
                      class="contacts__socials-img"
                      src="img/icons/socials/vk.svg"
                      alt=""
                    />
                  </a>
                </li>
                <li class="contacts__socials-item">
                  <a class="contacts__socials-link" href="#">
                    <img
                      class="contacts__socials-img"
                      src="img/icons/socials/inst.svg"
                      alt=""
                    />
                  </a>
                </li>
                <li class="contacts__socials-item">
                  <a class="contacts__socials-link" href="#">
                    <img
                      class="contacts__socials-img"
                      src="img/icons/socials/tg.svg"
                      alt=""
                    />
                  </a>
                </li>
                <li class="contacts__socials-item">
                  <a class="contacts__socials-link" href="#">
                    <img
                      class="contacts__socials-img"
                      src="img/icons/socials/whatsapp.svg"
                      alt=""
                    />
                  </a>
                </li>
              </ul>
            </div>
            <div class="contacts__phone">
              <h3 class="contacts__title contacts__title--phone">
                ДЛЯ СРОЧНОЙ СВЯЗИ
              </h3>
              <p class="contacts__phone-subtitle">
                Прошу звонить только если это важно и срочно.
              </p>
              <a class="contacts__phone-btn" href="#" data-path="modal-phone"
                >Позвонить</a
              >

              <div class="contacts__phone-modals">
                <div class="contacts__phone-modal_overlay">
                  <div class="contacts__phone-modal" data-target="modal-phone">
                    <a
                      class="contacts__phone-modal_phone"
                      href="tel:+79993505666"
                      >Только для срочной связи:<br />+7 (999) 350-56-66</a
                    >
                  </div>
                </div>
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
  <script src="js/popup.js"></script>
</html>
