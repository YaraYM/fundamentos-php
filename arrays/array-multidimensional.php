<?php

  $arr = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
  ];

  print_r($arr); // Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [1] => Array ( [0] => 4 [1] => 5 [2] => 6 ) [2] => Array ( [0] => 7 [1] => 8 [2] => 9 ) )
  echo "<br>";

  echo $arr[0][1] . "<br>"; // 2
  echo $arr[1][2] . "<br>"; // 6

  echo count($arr) . "<br>"; // 3
  echo count($arr[0]) . "<br>"; // 3