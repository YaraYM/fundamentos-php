<?php

  // print_r($_GET); // Array ([nome] => Rafael)

  if(null !== $_GET['nome'] && $_GET['nome'] !== '') {
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
  } else {
    $nome = 'Padrão';
    $idade = 'Padrão';
  }

?>

<h1>O seu nome é ?<?= $nome ?>, e você tem <?= $idade ?> anos.</h1>