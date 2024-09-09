<?php

  Class Car {

    public $rodas = 4;
    private $vidro = "Sem película";
    protected $portas = 4;

    public function getVidro() {
      return $this->vidro;
    }

    public function getPortas() {
      return $this->portas;
    }

  }

  class Mecanico {

    public function alterarRodas($carro) {
      $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula) {
      $carro->vidro = $pelicula;
    }
  }

  $carro = new Car;

  echo $carro->rodas . "<br>"; // 4

  $matheus = new Mecanico;

  $matheus->alterarRodas($carro);

  echo $carro->rodas; // 10

  // Não pode alterar porque é privado
  // $matheus->colocarPelicula($carro, "G20");

  echo $carro->getVidro() . "<br>"; // Sem película

  // $carro->vidro = "teste";

  echo $carro->getPortas(); // 4