<?php

// Подключение к базе данных
$db = mysqli_connect("VH306.spaceweb.ru", "mukhinnnik", "opdOPDopd", "mukhinnnik");

// Функция для получения списка ПВК
function get_pvk() {
  global $db;

  $stmt = $db->prepare('SELECT * FROM mukhinnnik');
  $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Функция для добавления ПВК
function add_pvk($name) {
  global $db;

  $stmt = $db->prepare('INSERT INTO mukhinnnik (name) VALUES (?)');
  $stmt->execute([$name]);
}

// Функция для удаления ПВК
function delete_pvk($id) {
  global $db;

  $stmt = $db->prepare('DELETE FROM mukhinnnik WHERE id = ?');
  $stmt->execute([$id]);
}

?>
