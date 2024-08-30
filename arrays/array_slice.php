<?php

  $arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];

  $slice1 = array_slice($arr, 1, 3);

  print_r($slice1); // Array ( [0] => 4 [1] => 6 [2] => 8 )
  echo "<br>";

  $slice2 = array_slice($arr, 4, 4); 
  print_r($slice2); // Array ( [0] => 10 [1] => 12 [2] => 14 [3] => 16 )
  echo "<br>";

  $slice3 = array_slice($arr, 4);
  print_r($slice3); // Array ( [0] => 10 [1] => 12 [2] => 14 [3] => 16 [4] => 18 )
  echo "<br>";

  $slice4 = array_slice($arr, 4, -3);
  print_r($slice4); // Array ( [0] => 10 [1] => 12 )
  echo "<br>";