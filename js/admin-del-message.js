// Кнопка удаления сообщения
$(document).ready(function () {
  $('.admin-orders__item-del').on('click', function (e) {
    e.preventDefault();

    let itemId = $(this).attr('data-id');

    $.ajax({
      type: 'POST',
      url: 'php/admin-del-message.php', // Файл для обработки запроса удаления
      data: { itemId: itemId },
      success: function (response) {
        location.reload();
      },
      error: function () {
        alert('Произошла ошибка при удалении сообщения.');
      },
    });
  });
});
