<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>課題0011</title>
</head>

<body>
  <p>
    <?php
    $shoppings = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach ($shoppings as $key => $shopping) {
      echo "{$key}:{$shopping}<br>";
    }
    ?>
  </p>
</body>
</html>