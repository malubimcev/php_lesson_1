
<?php
  $name = 'Mikhail';
  $last_name = 'Lyubimcev';
  $city = 'Murmansk';
  $age = 42;
  $email = 'malubimcev@gmail.com';
  $about_info = 'something about me';
?>
<html lang="ru">
  <head>
    <title>About</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <div>
      <h2>Информация о пользователе</h2>
      <p>Имя: <?php echo($name.' '.$last_name); ?></p>
      <p>Возраст: <?php echo($age); ?></p>
      <p>Город: <?php echo($city); ?></p>
      <p>E-mail: <?php echo($email); ?></p>
      <p>Обо мне: <?php echo($about_info); ?></p>
    </div>
  </body>
</html>
