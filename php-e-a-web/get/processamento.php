<?php

  // print_r($_GET); // Array ([nome] => Rafael)

  if(null !== $_GET['nome'] && $_GET['nome'] !== '') {
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
  } else {
    $nome = 'Padr�o';
    $idade = 'Padr�o';
  }

?>

<h1>O seu nome � ?<?= $nome ?>, e voc� tem <?= $idade ?> anos.</h1>