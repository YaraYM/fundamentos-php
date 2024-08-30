<?php

  // RESGATAR ELEMENTOS DE ARRAY
  // REMOVER ELEMENTOS

  $arr = [1, 2, 3, 4, 5, 6];

  $removidos = array_splice($arr, 1, 2);

  print_r($arr); // Array ( [0] => 1 [1] => 4 [2] => 5 [3] => 6 )
  echo "<br>";
  print_r($removidos); // Array ( [0] => 2 [1] => 3 )
  echo "<br>";

  $arr2 = [1, 2, 3, 4, 5, 6];

  $removidos2 = array_splice($arr2, 3);
  print_r($arr2); // Array ( [0] => 1 [1] => 2 [2] => 3 )
  echo "<br>";
  print_r($removidos2); // Array ( [0] => 4 [1] => 5 [2] => 6 )
  echo "<br>";

  $arr3 = [1, 2, 3, 4, 5, 6];
  $removidos = array_splice($arr3, 1, -1);
  print_r($arr3); // Array ( [0] => 1 [1] => 6 )
  echo "<br>";
  print_r($removidos); // Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 )
  echo "<br>";