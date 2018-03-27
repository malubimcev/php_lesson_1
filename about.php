<?php
  $name = 'Mikhail';
  $last_name = 'Lyubimcev';
  $city = 'Murmansk';
  $age = 42;
  $email = 'malubimcev@gmail.com';
  $about_info = 'something about me';
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>About</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <div>
      <h2>Информация о пользователе</h2>
      <p>Имя: <?= $name.' '.$last_name ?></p>
      <p>Возраст:  <?= $age ?></p>
      <p>Город: <?= $city ?></p>
      <p>E-mail: <?= $email ?></p>
      <p>Обо мне: <?= $about_info ?></p>
    </div>
  </body>
</html>
