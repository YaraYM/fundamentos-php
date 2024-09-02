<?php

  $arr1 = [1, 2, 3];
  $arr2 = [2, 4, 6];
  
  $diff = array_diff($arr1, $arr2);

  print_r($diff); // Array ( [0] => 1 [1] => 3 )
  echo "<br>";

  $diff2 = array_diff($arr2, $arr1);

  print_r($diff2); // Array ( [1] => 4 [2] => 6 )
  echo "<br>";

  $arr3 = [4, 6];

  $diff3 = array_diff($arr2, $arr1, $arr3);

  print_r($diff3); // Array ( )