document.addEventListener('DOMContentLoaded', function () {
  const header = document.querySelector('.header');
  const images = ['1.jpg', '2.jpg', '3.jpg', '4.jpg'];
  let index = 0;

  function changeBackground() {
    header.style.backgroundImage = `url('img/header-bg/${images[index]}')`;
    index = (index + 1) % images.length;
    setTimeout(changeBackground, 10000); // Повторяем через каждые 10 секунд
  }

  changeBackground(); // Начинаем смену заднего фона
});
