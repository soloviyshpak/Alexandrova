// Кнопка принятия заказа
$(document).ready(function () {
  $('.admin-orders__item-btn--accept').on('click', function (e) {
    e.preventDefault();

    let userId = $(this).attr('data-id');
    let itemType = $(this).attr('data-type');

    console.log(userId, itemType);
    $.ajax({
      type: 'POST',
      url: 'php/admin-accept-order.php', // Файл для обработки запроса удаления
      data: { userId: userId, itemType: itemType },
      success: function (response) {
        location.reload();
      },
      error: function () {
        alert('Произошла ошибка при одобрении записи.');
      },
    });
  });
});

// Кнопка удаления заказа
$(document).ready(function () {
  $('.admin-orders__item-btn--deny').on('click', function (e) {
    e.preventDefault();

    let userId = $(this).attr('data-id');
    let itemType = $(this).attr('data-type');

    console.log(userId, itemType);
    $.ajax({
      type: 'POST',
      url: 'php/admin-del-order.php', // Файл для обработки запроса удаления
      data: { userId: userId, itemType: itemType },
      success: function (response) {
        location.reload();
      },
      error: function () {
        alert('Произошла ошибка при удалении записи.');
      },
    });
  });
});

// Удаление из принятых заказов
$(document).ready(function () {
  $('.admin-orders__item-btn--del').on('click', function (e) {
    e.preventDefault();

    let userId = $(this).attr('data-id');
    let itemType = $(this).attr('data-type');

    console.log(userId, itemType);
    $.ajax({
      type: 'POST',
      url: 'php/admin-del-order.php', // Файл для обработки запроса удаления
      data: { userId: userId, itemType: itemType },
      success: function (response) {
        location.reload();
      },
      error: function () {
        alert('Произошла ошибка при удалении записи.');
      },
    });
  });
});
