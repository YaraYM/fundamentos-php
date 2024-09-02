<?php

  $arr1 = [1, 2, 3];
  $arr2 = [10, 40, 90];
  $arr3 = [2.1, 44.5, 43.3];
  $arr4 = ['creme', 'agenda'];

  $arrMerge = array_merge($arr1, $arr2, $arr3, $arr4);
  print_r($arrMerge); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 10 [4] => 40 [5] => 90 [6] => 2.1 [7] => 44.5 [8] => 43.3 [9] => creme [10] => agenda )