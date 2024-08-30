<?php

  $arr = [
    'nome' => 'João',
    'idade' => 25
  ];

  if(array_key_exists("nome", $arr)) {
    echo "A chave existe! <br>";
  } else {
    echo "A chave não existe! <br>";
  }

  if(isset($arr['idade'])) {
    echo "A chave existe! <br>";
  } else {
    echo "A chave não existe! <br>";
  }

  if(isset($x)) {
    echo "A variável existe! <br>";
  } else {
    echo "A variável não existe! <br>";
  }