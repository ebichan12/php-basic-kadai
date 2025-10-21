<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    class Food
    {
      private $name;
      private $price;

      public function show_price()
      {
        return $this->price;
      }

      public function __construct($name, $price)
      {
        $this->name = $name;
        $this->price = $price;
      }
    }

    class Animal
    {
      private $name;
      private $height;
      private $weighgt;

      public function show_height()
      {
        return $this->height;
      }

      public function __construct($name, $height, $weighgt)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weighgt = $weighgt;
      }
    }

    $food = new Food('potate', 250);
    print_r($food);

    echo '<br>';

    $animal = new Animal('dog', 60, 5000);
    print_r($animal);

    echo '<br>';

    echo $food->show_price();

    echo '<br>';

    echo $animal->show_height();

    ?>
  </p>
</body>

</html>