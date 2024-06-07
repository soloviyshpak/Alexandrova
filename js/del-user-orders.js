$(document).ready(function () {
  $('.admin-orders__item-btn--del').on('click', function (e) {
    e.preventDefault();

    let itemType = $(this).attr('data-type');

    $.ajax({
      type: 'POST',
      url: 'php/del-user-order.php', // Файл для обработки запроса удаления
      data: { itemType: itemType },
      success: function (response) {
        location.reload();
      },
      error: function () {
        alert('Произошла ошибка при отмене записи.');
      },
    });
  });
});
