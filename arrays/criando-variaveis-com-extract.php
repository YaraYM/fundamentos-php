<?php

  $arr = [
    'cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'aço'
  ];

  extract($arr);

  echo $cor . "<br>"; // vermelho
  echo $forma . "<br>"; // retangular
  echo $material . "<br>"; // aço

  $nome = "Matheus";

  $pessoa = [
    'nome' => 'João',
    'idade' => 20
  ];

  echo $nome . "<br>"; // Matheus

  extract($pessoa);

  echo $nome . "<br>"; // João
  echo $idade . "<br>"; // 20