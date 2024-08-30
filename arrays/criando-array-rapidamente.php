<?php

  $arr = range(1, 3);
  print_r($arr); // Array ( [0] => 1 [1] => 2 [2] => 3 )
  echo "<br>";
  $arr2 = range(1, 3, 0.5);
  print_r($arr2); // Array ( [0] => 1 [1] => 1.5 [2] => 2 [3] => 2.5 [4] => 3 )
  echo "<br>";
