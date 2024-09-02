<?php

  $arr = [1, 2, 3, 4, 5];

  $arrRev = array_reverse($arr);

  print_r($arr); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
  echo "<br>";
  print_r($arrRev); // Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
  echo "<br>";