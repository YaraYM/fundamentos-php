<?php

  class Car {

    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca) {
      $this->portas = $portas;
      $this->cor = $cor;
      $this->marca = $marca;
    }
      
  }

  $ferrari = new Car(4, "Vermelha", "Ferrari");
  echo "O carro � da marca $ferrari->marca, tem $ferrari->portas portas e � da cor $ferrari->cor <br>"; // O carro � da marca Ferrari, tem 4 portas e � da cor Vermelha

  