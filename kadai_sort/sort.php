<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way ($array, $order) {
          if ($order == 'asc') {
            sort($array);
          } else   {
            rsort($array);
          }
          return $array;
        }

        echo '昇順にソートします。<br>';
        $asc_nums = sort_2way ($nums, 'asc');

        foreach ($asc_nums as $num) {
          
          echo $num.'<br>';
        }

        echo '降順にソートします。<br>';
        $desc_nums = sort_2way ($nums, 'desc');

        foreach ($desc_nums as $num) {
          
          echo $num.'<br>';
        }

        ?>
    </p>
</body>

</html>