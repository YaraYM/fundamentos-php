<?php

  $pessoa = ["Matheus", 29, "Programador", "verde"];

  print_r($pessoa);
  echo "<br>"; // Array ( [0] => Matheus [1] => 29 [2] => Programador [3] => verde )

  list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;
  print_r($nome); // Matheus
  echo "<br>";
  print_r($idade); // 29
  echo "<br>";
  print_r($profissao); // Programador
  echo "<br>";
  print_r($corDosOlhos); // verde
  echo "<br>";