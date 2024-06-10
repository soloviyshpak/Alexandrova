<?php
// Подключение к базе данных
require_once 'config.php';

$conn = new mysqli($servername, $username, $db_password, $dbname);
if ($conn->connect_error) {
  die("Ошибка подключения: " . $conn->connect_error);
}

// Получаем данные из формы
$name = $_POST['name'];
$descr = $_POST['descr'];

// Обработка загруженной обложки
if(isset($_FILES['cover'])){
  $coverFileName = $_FILES['cover']['name'];
  $coverFilePath = 'img/covers/' . $coverFileName;

  $query = "INSERT INTO portfolio (name, description, cover) VALUES ('$name', '$descr', '$coverFilePath')";
  if ($conn->query($query)) {
      $portfolioId = $conn->insert_id;
  } else {
      echo "Ошибка при добавлении данных в таблицу portfolio: " . $conn->error;
  }
  
  // Сохранение обложки на сервере
  move_uploaded_file($_FILES['cover']['tmp_name'], '../' . $coverFilePath);
} else {
  echo "Ошибка при загрузке обложки.";
}

// Обработка загруженных фотографий
if(isset($_FILES['photos'])){
  $file_array = reArrayFiles($_FILES['photos']);
  foreach($file_array as $file){
      $fileName = $file['name'];
      $filePath = 'img/works/' . $fileName;

      $query = "INSERT INTO portfolioimages (workId, image) VALUES ('$portfolioId', '$filePath')";
      if (!$conn->query($query)) {
          echo "Ошибка при добавлении данных в таблицу portfolioimages: " . $conn->error;
      }
      
      // Сохранение фотографии на сервере
      move_uploaded_file($file['tmp_name'], '../' . $filePath);
  }
} else {
  echo "Ошибка при загрузке фотографий.";
}


$conn->close();

header("Location: ../admin-add.php");
exit();

// Функция для обработки массива файлов
function reArrayFiles($file_post) {
    $file_ary = array();
    if (is_array($file_post['name'])) {
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);

        for ($i=0; $i<$file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }
    } else {
        $file_ary[] = $file_post;
    }
    return $file_ary;
}
?>