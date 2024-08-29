<?php

  $arr = [];

  // Adicionando valores
  print_r($arr); // Array ( )
  echo "<br>";
  $arr[0] = 10;
  print_r($arr); // Array ( [0] => 10 )
  echo "<br>";
  $arr[1] = 20;
  print_r($arr); // Array ( [0] => 10 [1] => 20 )
  echo "<br>";
  $arr[5] = 30;
  print_r($arr); // Array ( [0] => 10 [1] => 20 [5] => 30 )
  echo "<br>";

  // Modificar valores
  $arr[1] += 15;
  print_r($arr); // Array ( [0] => 10 [1] => 35 [5] => 30 )
  echo "<br>";

  $arrayAssoc = [];
  $arrayAssoc["carro"] = "Fusca";
  print_r($arrayAssoc); // Array ( [carro] => Fusca )   
  echo "<br>";
  $arrayAssoc["carro"] = "Gol";
  print_r($arrayAssoc); // Array ( [carro] => Gol )