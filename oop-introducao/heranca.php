<?php

  class Humano {

    public $idade = 32;

    public function falar() {
      echo "Olá <br>";
    }

    private function gritar() {
      echo "PHP É MUITO BOM! <br>";
    }

    public function acessaGritar() {
      $this->gritar();
    }

    protected function falarBaixinho() {
      echo "lalala <br>";
    }

    public function acessaFalarBaixinho() {
      $this->falarBaixinho();
    }

  }

  class Programador extends Humano {

    public function acessaFalarBaixinhoProgramador() {
      $this->falarBaixinho();
    }

  }

  $ze = new Humano;

  $ze->falar(); // Olá
  $ze->acessaGritar(); // PHP É MUITO BOM!
  $ze->acessaFalarBaixinho(); // lalala

  $matheus = new Programador;

  echo $matheus->idade . "<br>"; // 32

  $matheus->falar(); // Olá
  $matheus->acessaGritar(); // PHP É MUITO BOM!
  $matheus->acessaFalarBaixinho(); // lalala