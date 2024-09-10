<?php

  interface Caracteristicas {

    const nome = "Matheus";

    public function falar();

  }

  class Humano implements Caracteristicas {

    public $idade = 29;

    public function falar() {
      echo "Ol� <br>";
    }

    public function dizerNome() {
      echo "Meu nome � " . self::nome . "<br>";
    }

  }

  $matheus = new Humano;

  $matheus->falar(); // Ol�

  $matheus->dizerNome(); // Meu nome � Matheus