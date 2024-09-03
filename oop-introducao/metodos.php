<?php

  class Pessoa {

    function falar() {
      echo "Olá, eu sou um objeto! <br>";
    } 

    function somar($x, $y) {
      return $x + $y . "<br>";
    }

  }

  $matheus = new Pessoa();

  $matheus->falar();
  $matheus->falar();

  $joao = new Pessoa();

  $joao->falar();

  $matheus->somar(10, 20);
  $joao->somar(30, 40);