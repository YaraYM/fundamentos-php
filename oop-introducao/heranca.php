<?php

  class Humano {

    public $idade = 32;

    public function falar() {
      echo "Ol� <br>";
    }

    private function gritar() {
      echo "PHP � MUITO BOM! <br>";
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

  $ze->falar(); // Ol�
  $ze->acessaGritar(); // PHP � MUITO BOM!
  $ze->acessaFalarBaixinho(); // lalala

  $matheus = new Programador;

  echo $matheus->idade . "<br>"; // 32

  $matheus->falar(); // Ol�
  $matheus->acessaGritar(); // PHP � MUITO BOM!
  $matheus->acessaFalarBaixinho(); // lalala