<?php

  $arr = [
    'nome' => 'Jo�o',
    'idade' => 25
  ];

  if(array_key_exists("nome", $arr)) {
    echo "A chave existe! <br>";
  } else {
    echo "A chave n�o existe! <br>";
  }

  if(isset($arr['idade'])) {
    echo "A chave existe! <br>";
  } else {
    echo "A chave n�o existe! <br>";
  }

  if(isset($x)) {
    echo "A vari�vel existe! <br>";
  } else {
    echo "A vari�vel n�o existe! <br>";
  }