<?php

  $arr = [
    'cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'a�o'
  ];

  extract($arr);

  echo $cor . "<br>"; // vermelho
  echo $forma . "<br>"; // retangular
  echo $material . "<br>"; // a�o

  $nome = "Matheus";

  $pessoa = [
    'nome' => 'Jo�o',
    'idade' => 20
  ];

  echo $nome . "<br>"; // Matheus

  extract($pessoa);

  echo $nome . "<br>"; // Jo�o
  echo $idade . "<br>"; // 20