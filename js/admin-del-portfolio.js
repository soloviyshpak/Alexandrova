// Кнопка удаления портфолио
$(document).ready(function () {
  $('.admin-portfolio__item-del').on('click', function (e) {
    e.preventDefault();

    let itemId = $(this).attr('data-id');

    $.ajax({
      type: 'POST',
      url: 'php/admin-del-portfolio.php', // Файл для обработки запроса удаления
      data: { itemId: itemId },
      success: function (response) {
        location.reload();
      },
      error: function () {
        alert('Произошла ошибка при удалении записи.');
      },
    });
  });
});
