// Получаем элементы формы
const coverInput = document.getElementById('cover');
const windowElement = document.querySelector('.admin-portfolio__form-window');

// Слушаем изменения в поле загрузки обложки
coverInput.addEventListener('change', function (event) {
  const file = event.target.files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = function (e) {
      windowElement.style.backgroundImage = `url(${e.target.result})`;
      windowElement.style.backgroundSize = 'cover';
      windowElement.style.backgroundPosition = 'center';
    };

    reader.readAsDataURL(file);
  }
});
