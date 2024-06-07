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
    <header class="header">
      <div class="header__bar">
        <a class="header__bar-logo" href="index.php"
          ><img
            src="img/logo.svg"
            alt="Александрова - профессиональный фотограф"
        /></a>
        <nav class="header__nav">
          <ul class="header__nav-list">
            <ul class="header__nav-item">
              <a
                href="index.php"
                class="header__nav-link header__nav-link--opened"
                >Главная</a
              >
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
      <div class="header__content">
        <h1 class="header__content-title">Ольга Александрова</h1>
        <p class="header__content-subtitle">ПРОФЕССИОНАЛЬНЫЙ ФОТОГРАФ</p>
        <a href="#" class="header__content-btn">Подробнее</a>
      </div>
    </header>
    <main class="main">
      <section class="about">
        <div class="container">
          <div class="about__inner">
            <h2 class="about__title">Обо мне</h2>
            <div class="about__content">
              <img
                class="about__content-img"
                src="img/me.jpg"
                alt="Ольга Александрова - профессиональный фотограф"
              />
              <div class="about__content-text">
                <h3 class="about__content-title">
                  Приветствую Вас на моем сайте!
                </h3>
                <p class="about__content-subtitle">
                  Меня зовут Ольга Александрова, я предоставляю услуги фотографа
                  в Коломне
                </p>
                <p class="about__content-paragraph">
                  Больше 13 лет занимаюсь фотографией. Моя
                  специализация стильные женственные съемки. Для меня фотограф —
                  это не просто профессия, работа или хобби, это мой образ жизни
                  и моя любовь. Фотографирую практически во всех жанрах.  Ещё
                  в детстве  фотография стала моим страстным увлечением,
                  я любила сниматься и фотографировать: все семейные праздники,
                  съёмки с подружками, а далее уже посещение курсов
                  и мастер-классов по фотографии, участие в онлайн конкурсах для
                  фотографов и фотомоделей. Меня всё это всегда очень
                  захватывало, я старалась делать лучше и лучше того, что сейчас
                  могу. И сейчас при каждой возможности посещаю разные семинары
                  фотографов со всего мира. Так моё когда-то увлечение стало
                  моей любовью и профессией.
                </p>
                <p class="about__content-paragraph">
                  Самый приятный момент — когда твой труд дарит только
                  положительные эмоции. Я уверенна, что вы, как и я верите, что
                  фотографии сами по себе удивительны. Они раскрывают красоту
                  человека, придают глубину и значимость драгоценных мгновений
                  в вашей жизни, даже годы спустя. Чтобы получить отличные живые
                  фотографии совсем не обязательно быть профессиональной моделью
                  или иметь опыт в этой области.
                </p>
                <p class="about__content-paragraph">
                  Очень люблю своих клиентов и благодарна им за доверие, которое
                  они мне оказывают, считаю каждого клиента уникальным
                  и прекрасным по своему, поэтому стараюсь сделать всё, чтобы
                  передать его красоту на фотографии.
                </p>
                <p class="about__content-paragraph">
                  Основное место фотосъёмки — Коломна и её окрестности,
                  но всегда готова к выезду из города. Поэтому пишите,
                  не стесняйтесь. Всегда открыта к новым знакомствам.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sign">
        <div class="container">
          <div class="sign__inner">
            <h2 class="sign__title">Записаться на фотосессию</h2>
            <p class="sign__subtitle">
              Нужны красивые, стильные фотографии? Или хотите запечатлеть важное
              событие? С удовольствием предложу свежие идеи и проведу для вас
              фотоссесию. Нахожу индивидуальный подход к любому клиенту
            </p>
            <a class="sign__btn" href="#">Записаться</a>
          </div>
        </div>
      </section>
      <section class="portfolio">
        <div class="container">
          <h2 class="portfolio__title">Портфолио</h2>
          <ul class="portfolio__list">
          <?php
              require_once 'php/config.php';
              $mysqli = new mysqli($servername, $username, $db_password, $dbname);
              if ($mysqli->connect_error) {
                  die('Ошибка подключения (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
              }

              $query = "set names utf8mb4";
              $mysqli->query($query);

              $query = "SELECT * FROM portfolio ORDER BY id DESC LIMIT 6";
              $results = $mysqli->query($query);

              while ($row = $results->fetch_assoc()) {
                  echo '
                    <li class="portfolio__item">
                      <img src="'.$row["cover"].'" alt="" class="portfolio__item-img" />
                      <h4 class="portfolio__item-title">'.$row["name"].'</h4>
                      <p class="portfolio__item-subtitle">
                        '.$row["description"].'
                      </p>
                      <a class="portfolio__item-btn" href="work.php?id='. $row["id"] .'">Смотреть</a>
                    </li>
                  ';
            }
            ?>
          </ul>
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
