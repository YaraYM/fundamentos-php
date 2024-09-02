<?php

  $arr = [
    'Matheus' => 29,
    'Pedro' => 18,
    'João' => 14,
    'Ana' => 20
  ];
  
  asort($arr);

  print_r($arr); // Array ( [João] => 14 [Pedro] => 18 [Ana] => 20 [Matheus] => 29 )
  echo "<br>";

  $arr2 = [
    'Matheus' => 12,
    'Pedro' => 44,
    'Joaquim' => 14,
    'Maria' => 32
  ];

  arsort($arr2);

  print_r($arr2); // Array ( [Pedro] => 44 [Maria] => 32 [Joaquim] => 14 [Matheus] => 12 )
  echo "<br>";

  ksort($arr2);
  
  print_r($arr2); // Array ( [Joaquim] => 14 [Maria] => 32 [Matheus] => 12 [Pedro] => 44 )
  echo "<br>";

  krsort($arr2);
  print_r($arr2); // Array ( [Pedro] => 44 [Matheus] => 12 [Maria] => 32 [Joaquim] => 14 )