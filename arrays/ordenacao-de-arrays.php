<?php

  $arr = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

  sort($arr);

  print_r($arr); // Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 12 [4] => 32 [5] => 38 [6] => 65 [7] => 123 [8] => 334 [9] => 9999 )
  echo "<br>";

  $arr2 = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];
  rsort($arr2);
  print_r($arr2); // Array ( [0] => 9999 [1] => 334 [2] => 123 [3] => 65 [4] => 38 [5] => 32 [6] => 12 [7] => 4 [8] => 2 [9] => 1 )
  echo "<br>";

  $nomes = ["Jo�o", "Maria", "Jos�", "Pedro", "Ana"];
  sort($nomes);
  print_r($nomes); // Array ( [0] => Ana [1] => Jo�o [2] => Jos� [3] => Maria [4] => Pedro )