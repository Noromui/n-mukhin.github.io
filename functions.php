?php

// Подключение к базе данных
require_once('database.php');

// Получение списка ПВК
function get_pvk() {
  $query = "SELECT * FROM pvk";
  $result = mysqli_query($GLOBALS['db'], $query);

  $pvk = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $pvk[] = $row;
  }

  return $pvk;
}

// Добавление ПВК
function add_pvk($name) {
  $query = "INSERT INTO pvk (name) VALUES (?)";
  $stmt = mysqli_prepare($GLOBALS['db'], $query);

  mysqli_stmt_bind_param($stmt, "s", $name);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

// Удаление ПВК
function delete_pvk($id) {
  $query = "DELETE FROM pvk WHERE id = ?";
  $stmt = mysqli_prepare($GLOBALS['db'], $query);

  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

?>
