<?php

  $arr = [1, 2, 3, 4, 5];
  $arr[] = 6;
  print_r($arr); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )
  echo "<br>";

  $arr2 = [];
  $arr2[] = 1;
  print_r($arr2); // Array ( [0] => 1 )
  echo "<br>";

  $arr3 = [];
  $arr3['teste'] = 'testando';
  print_r($arr3); // Array ( [teste] => testando )