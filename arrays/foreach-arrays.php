<?php

  $tony = [
    'nome' => 'Tony',
    'idade' => 8,
    'profissao' => 'g�ngster'
  ];

  $ipa = [
    'nome' => 'Ipa',
    'idade' => 5,
    'profissao' => 'publicit�ria'
  ];

  foreach($tony as $carac => $value) {
    echo "$carac: $value<br>";
  }

  foreach($ipa as $carac => $value) {
    echo "$carac: $value<br>";
  }

  foreach($ipa as $value) {
    echo "$value <br>";
  }