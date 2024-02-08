<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Список ПВК</title>
</head>
<body>
  <h1>Список профессионально важных качеств</h1>

  <ul>
    <?php foreach ($pvk as $item): ?>
      <li>
        <?php echo $item['name']; ?>
        <form action="index.php" method="post">
          <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
          <button type="submit" name="delete_pwk">Удалить</button>
        </form>
      </li>
    <?php endforeach; ?>
  </ul>

  <h2>Добавить ПВК</h2>

  <form action="index.php" method="post">
    <input type="text" name="name" placeholder="Введите название ПВК">
    <button type="submit" name="add_pwk">Добавить</button>
  </form>
</body>
</html>
