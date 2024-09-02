<?php

  $arr = range(1, 5);

  shuffle($arr);

  print_r($arr); // Array ( [0] => 4 [1] => 5 [2] => 1 [3] => 2 [4] => 3 )
  echo "<br>";